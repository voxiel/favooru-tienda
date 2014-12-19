<?php

class Tienda extends CI_Controller {

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



	function index()
	{			
	         $this->load->view('index', $data = NULL );
	}


	

}


/* End of file home.php */
/* Location: ./system/application/controllers/home.php */
