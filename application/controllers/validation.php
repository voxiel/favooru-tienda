<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class validation extends CI_Controller{

    function __construct()
    {
        parent::__construct();

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }

function index()
    {
        $this->load->view('validation', $data = NULL);       
    }
    
    
    function jquery_save()
    {
                
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]');
        $this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        
        if ($this->form_validation->run() == FALSE)
        {
                        
            echo json_encode(array('st'=>0, 'msg' => validation_errors()));
        }
        else
        {
            
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $email = $this->input->post('email');
            
            //...save values to database 
            
            echo json_encode(array('st'=>0, 'errors' => '0'));
        }
        
    }
}