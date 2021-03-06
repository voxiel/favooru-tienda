<?php

class Upload extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'file','date'));
        $this->load->model(array('account/account_model'));
    }

    function index(){
        $this->load->view('account/favooru_upload', array('error' => ' ' ));
    }

    function do_upload(){
        date_default_timezone_set('America/El_Salvador');
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
        $format = 'DATE_RFC822';
        $time = time();

        //echo standard_date($format, $time);

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|csv|xl';
        $config['max_size'] = '0';
        $config['file_name'] = standard_date($format, $time);

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
        $this->load->library('email');

        //obtencion de las ordenes pendientes de completar
        $orders = $this->account_model->pending_orders();
        
        //peticiones de ordenes a completar
        $data = json_decode(file_get_contents("php://input"));
        $not_found = array();
        $access = array();
        $users = array();
        //iteramos segun la cantidad peticiones de ordenes
        $flag = false;
        $j = 0;
        for ($i=0; $i < count($data); $i++) { 
            
            //comparamos cada solicitud con cada orden pendiente en la base
            foreach ($orders as $index => $value) {
                if($data[$i]->{'codTransaccion'} == $value){
                    $flag = $this->account_model->process_orders($value);
                    $row = $this->account_model->get_id_access(substr($value, 8, -6));
                    $this->account_model->update_access($row[0]->{'accesos_id'}, $value);
                    $data_user = $this->account_model->get_email($value, $row[0]->{'accesos_id'});
                    
                    array_push($access,$row[0]->{'accesos_usuario'});
                    array_push($access,$row[0]->{'accesos_pass'});
                    //array_push($access, $data_user);
                    array_push($access, $data_user[0]->{'cliente_nombres'});                    
                    array_push($access, $data_user[0]->{'cliente_apellidos'});
                    array_push($access, $data_user[0]->{'cliente_correo'});

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
            $not_found['access'] = $access;
            //$not_found['mail_debug'] = $this->email->print_debugger();
            echo json_encode($not_found);
        }else{
            $not_found['error'] = true;
            $not_found['num_alerts'] = count($not_found)-1;
            $not_found['access'] = $access;
            echo json_encode($not_found);
        }
    }

    function upload_access(){
        date_default_timezone_set('America/El_Salvador');
        
        $format = 'DATE_RFC822';
        $time = time();

        $config['upload_path'] = './uploads/access';
        $config['allowed_types'] = 'gif|jpg|png|csv|xl';
        $config['max_size'] = '0';
        $config['file_name'] = standard_date($format, $time);

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

            $count = count($element)-2;
            for($i=0; $i< $count; $i= $i+3){
                //echo $element[$i].'-'. $element[$i+1].'-'. $element[$i+2].' ';
                $this->account_model->insert_access($element[$i], $element[$i+1], $element[$i+2]);
            }

            $response = array('error' => false);
            echo json_encode($response);
        }

    }

    function send_mail(){
        $this->load->library('email');
        $data = json_decode(file_get_contents("php://input"));

            $name = $data[2];
            $last_name = $data[3];
            //$email_to = "xscharliexs@gmail.com";
            $email_to = $data[4];
            $email_from = "info@favooru.com"; 
            $subject = "Confirmación de solicitud";

            $text = "

            <div>
            <table id='Table_01' width='600' height='auto' border='0' cellpadding='0' cellspacing='0' style='margin-top:5px;'>
                    <tr>
                    <td style='padding:15px;'>
                        <h2 style='font-family:Helvetica, ‘Helvetica Neue’, Arial;'>GRACIAS POR PARTICIPAR, ".$name." ,".$last_name."</h2>
                        <p style='font-family:Helvetica, ‘Helvetica Neue’, Arial; font-size:14px;'>
                            usuario: ".$data[0]."
                        </p>
                        <p style='font-family:Helvetica, ‘Helvetica Neue’, Arial; font-size:14px;'>
                            contraseña: ".$data[1]."
                        </p>
                    </td>
                </tr>
                            
            </table>
            </div>";


            //configuracion para gmail
            $configGmail = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.gmail.com',
                'smtp_port' => 465,
                'smtp_user' => 'testingbsolutions@gmail.com',
                'smtp_pass' => 'pajarito12',
                'mailtype' => 'html',
                'charset' => 'utf-8',
                'newline' => "\r\n"
            );    
     
            //cargamos la configuración para enviar con gmail
            $this->email->initialize($configGmail);
            
            $this->email->from($email_from, "Ventas");
            $this->email->to($email_to); 
            $this->email->subject($subject);
            //$this->email->message('Usuario: '. $row[0]->{'accesos_usuario'} .', contraseña: '.$row[0]->{'accesos_pass'});  
            $this->email->message($text);  
            $this->email->send();

            //echo $this->email->print_debugger();
           //print_r($data);
    }
}
?>

