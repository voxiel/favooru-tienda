<?php

class Upload extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'file'));
        $this->load->model(array('account/account_model'));
    }

    function index(){
        $this->load->view('account/favooru_upload', array('error' => ' ' ));
    }

    function do_upload(){
        /*
            NOTA: PARA EL PLUGIN DE LAS TABLAS EL ARCHIVO CON EL OBJETO JSON DEBE
            TENER LA SIGUIENTE ESTRUCTURA: 
                [
                    {
                        "id": 0,
                        "name": "test0",
                        "price": "$0"
                    },{
                        "id": 1,
                        "name": "test1",
                        "price": "$1"
                    }
                ]
        */

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|csv|xl';
        $config['max_size'] = '0';

        $this->load->library('upload', $config);

        if (  !$this->upload->do_upload() )
        {
            $response = array('error' => $this->upload->display_errors());
            echo json_encode($response);
        }
        else {
            //obtencion de la cantidad de passwords disponibles por producto
            //devuelve la cantidad de contraseñas disponibles y el nombre del producto es decir el doble de notificaciones
            $passwords_available = $this->account_model->count_passwords_available_by_product();

            //Proceso de subida del archivo
            $data = array('upload_data' => $this->upload->data());

            //Proceso de lectura del archivo
            $content_file = read_file($data['upload_data']['full_path']);

            $element = preg_split("/[\s,]+/", $content_file);  //obteniedo todos los elementos del archivo como elementos de un arreglo
            $json_content = '[{';
            $product = array();

            //inicializar el arreglo que contiene el conteo 
            for ($i=0; $i < 5; $i++) { 
                    $product[$i]=0;
            }

            $i = 0;
            //itera sobre el contenido de todas las celdas
            foreach ($element as $index => $value) {
                //obtencion de las cabeceras de las columnas
                if ($index < 4) {
                    $column_name[$index] = $value;
                    continue;
                }

                //reiniciar el indice del arreglo que contienen el nombre de las columnas
                if ($index%4 == 0) {
                    $i = 0;
                }

                //obtener la cantidad de contraseñas disponibles por producto
                if ($i == 0) {
                    $product[intval(substr($value, 8, -6))-1] += 1; 
                }

                //creacion del archivo json
                $json_content .= $column_name[$i] . ': '.$value;

                //agregando los separadores ( , | },{ | }]) al final de cada elemento del objeto json
                if ($i < 3) {
                    $json_content .= ',';
                }elseif( $index == count($element)-2) { //ultimo elemento del arreglo, cierre del objeto json, se le restan 2: porque la numeracion comienza en 0 y el ultimo elemento del arreglo esta vacio.
                        $json_content .= '}]';
                        break;
                }else{
                    $json_content .= '},{';
                }

                $i++;
            }
            
            //Proceso guardado del archivo como json
            $metadata = array('name'=> $data['upload_data']['raw_name'], 'path' => $data['upload_data']['file_path'].'json/');
            $json_file = $metadata['path'].$metadata['name'].'.json';

            write_file($json_file, $json_content, 'w');

            //Comparacion de los contraseñas disponibles vs las requeridas
            $response = array('error' => false, 'json_name' => $metadata['name'].'.json');
            $num_alerts = 0;
            for ($i=0; $i < count($product); $i++) { 
                if ($product[$i] > $passwords_available[$i*2]) {
                    //la descripcion del producto
                    $response['alerts'][] = $passwords_available[($i*2)+1];
                    //la cantidad de contraseñas solicitadas en la transaccion
                    $response['alerts'][] = $product[$i];
                    //la cantidad de contreñas disponibles en la base de datos
                    $response['alerts'][] = $passwords_available[$i*2];
                    $num_alerts++ ;
                }
            }
        
            $response['num_alerts'] = $num_alerts;
            

            echo json_encode($response);
            //print_r( $passwords_available);

        }
    }

    function process(){

        //obtencion de las ordenes pendientes de completar
        $orders = $this->account_model->pending_orders();
        
        //peticiones de ordenes a completar
        $data = json_decode(file_get_contents("php://input"));
        $not_found = array();
        //iteramos segun la cantidad peticiones de ordenes
        $flag = false;
        $j = 0;
        for ($i=0; $i < count($data); $i++) { 
            
            //comparamos cada solicitud con cada orden pendiente en la base
            foreach ($orders as $index => $value) {
                if($data[$i]->{'codTransaccion'} == $value){
                    $flag = $this->account_model->process_orders($value);
                    $j++;
                }
            }//del foreach
            if(!$flag){
                array_push($not_found, $data[$i]->{'codTransaccion'});
            }else{
                /******************* enviar correo aqui ***************************/





                /******************* enviar correo aqui ***************************/
            }
        }//del for
        if(count($not_found)==0){
            $not_found['error'] = false;
            $not_found['num_inserts'] = $j;
            echo json_encode($not_found);
        }else{
            $not_found['error'] = true;
            $not_found['num_alerts'] = count($not_found)-1;
            echo json_encode($not_found);
        }
    }

    function upload_access(){

        $config['upload_path'] = './uploads/access';
        $config['allowed_types'] = 'gif|jpg|png|csv|xl';
        $config['max_size'] = '0';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()){
            $response = array('error' => $this->upload->display_errors());
            echo json_encode($response);
        }else{
            //Proceso de subida del archivo
            $data = array('upload_data' => $this->upload->data());

            //Proceso de lectura del archivo
            $content_file = read_file($data['upload_data']['full_path']);

            $element = preg_split("/[\s,]+/", $content_file);  //obteniedo todos los elementos del archivo como elementos de un arreglo
            //print_r($element);
            //itera sobre el contenido de todas las celdas
            $i=0;
            $data = array();
            foreach ($element as $index => $value) {
                //echo $index.'=>'.$value.'--';
                $data[$i] =  (string)$value;
                //reiniciar el indice del arreglo para verificar el 
                if ($index%3 == 0 && $index != 0) {
                    //echo $data[0].'-'. $data[1].'-'. $data[2].'-';
                    $this->account_model->insert_access($data[0], $data[1],intval($data[2]));
                    $i = 0;
                }
                if( $index == count($element)-2) { //Se le restan 2: porque la numeracion comienza en 0 y el ultimo elemento del arreglo esta vacio.
                    break;
                }
                $i++;
            }

            $response = array('error' => false);
            echo json_encode($response);
        }

    }
}
?>

