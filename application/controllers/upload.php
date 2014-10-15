<?php

class Upload extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    function index()
    {
        //$this->load->view('account_favooru_upload', array('error' => ' ' ));
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
            //$this->load->view('upload_fail', $error);
            //echo "fail";
            echo json_encode($error) . json_encode($_FILES) . json_encode($this->input->post());
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());

            //$this->load->view('account/favooru_upload', $data);
            //$this->load->view('upload_success', $data);
            //redirect('account/favooru_upload', 'refresh');
        
            echo json_encode($data) . json_encode($_POST) . json_encode($_FILES);
        }
    }
}
?>