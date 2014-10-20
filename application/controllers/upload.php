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
            $data = array('upload_data' => $this->upload->data());
            //Proceso de lectura del archivo
            $content = read_file($data['upload_data']['full_path']);
            echo 'contenido del archivo: ' . json_encode($content);

            //echo $data['upload_data']['full_path'] . json_encode($_POST) . json_encode($_FILES);
        }
    }
}
?>