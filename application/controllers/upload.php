<?php

class Upload extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url', 'file'));
    }

    function index()
    {
        $this->load->view('account/favooru_upload', array('error' => ' ' ));
    }

    function do_upload()
    {
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
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        }
        else            
        {   
            //Proceso de subida del archivo
            $data = array('upload_data' => $this->upload->data());

            //Proceso de lectura del archivo
            $content_file = read_file($data['upload_data']['full_path']);

            $element = preg_split("/[\s,]+/", $content_file);  //obteniedo todos los elementos del archivo como elementos de un arreglo
            $json_content = '[{';
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
            echo $json_content;
            
            //Proceso guardado del archivo como json
            $metadata = array('name'=> $data['upload_data']['raw_name'], 'path' => $data['upload_data']['file_path'].'json/');
            $json_file = $metadata['path'].$metadata['name'].'.json';

            write_file($json_file, $json_content, 'w');
            //echo 'contenido del archivo: ' . json_encode($content_file);

            //echo $data['upload_data']['full_path'] . json_encode($_POST) . json_encode($_FILES);
        }
    }
}
?>