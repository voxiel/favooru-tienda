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
			 $data['producto'] = $this->fillDropdown();
	         $this->load->view('index', $data );
	}

	public function condiciones()
	{
	         $this->load->view('conditions', $data = NULL);
	}


	function fillDropdown()
	{
	        $resultado = $this->account_model->get_productos();
	        $form = '<select class="form-control input-lg mmargin" name="producto"> ';
	        foreach($resultado as $row)
	        {                                
	            $form .= '<option value="'. $row->producto_id.'">'.$row->producto_descripcion.' - $ '.$row->producto_precio.'</option>';
	        }           
	        $form .= '</select>' . "\n";
	        return $form;
	}

	function save_client_data()
	{

		$this->form_validation->set_rules('buy_name', 'Nombre', 'required|min_length[5]');
		$this->form_validation->set_rules('buy_email', 'Correo', 'required|valid_email');

		if ($this->form_validation->run() == FALSE)
        {
                        
            echo json_encode(array('st'=>0, 'msg' => validation_errors()));
        }
        else
        {
        	$id = $this->account_model->insert_customer(
            $this->input->post('buy_name'),
            $this->input->post('buy_email'));

            
            echo json_encode(array('st'=>0, 'errors' => '0'));
        }
	}

}


/* End of file home.php */
/* Location: ./system/application/controllers/home.php */