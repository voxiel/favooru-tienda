<?php

class Afiliados extends CI_Controller {

	/**
	 * Constructor
	 */
	function __construct()
	{
		parent::__construct();

		$this->load->helper(array('form', 'url'));
		$this->load->model(array('account/account_model'));
		$this->load->library('form_validation');
	}



	function index(){			
	         $this->load->view('afiliados', $data = NULL );
	}


	function save_affiliate_data(){

		$this->form_validation->set_rules('buy_name', 'Nombre', 'required|min_length[5]');
		$this->form_validation->set_rules('buy_email', 'Correo', 'required|valid_email');
		$this->form_validation->set_rules('buy_address', 'Dirección', 'required|min_length[10]');
		$this->form_validation->set_rules('buy_phone', 'Teléfono', 'required');
		$this->form_validation->set_rules('buy_dui', 'DUI', 'required');
		$this->form_validation->set_rules('buy_birth_date', 'Fecha de Nacimiento', 'required');

		if ($this->form_validation->run() == FALSE)
        {
                        
            echo json_encode(array('st'=>0, 'msg' => validation_errors()));
        }
        else
        {
        	//Calculate();
        	$id = $this->account_model->insert_affiliate($this->input->post());

            
            echo json_encode(array('st'=>0, 'errors' => '0', 'datos' => $this->input->post(), 'id' => $id));
        }
		
        
        
	}
	


	

}


/* End of file home.php */
/* Location: ./system/application/controllers/home.php */