<?php

class Cart extends CI_Controller {

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
	         $this->load->view('cart', $data );
	}

	// public function condiciones()
	// {
	//          $this->load->view('conditions', $data = NULL);
	// }


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
        	Calculate();
        	$id = $this->account_model->insert_customer(
            $this->input->post('buy_name'),
            $this->input->post('buy_email'));

            
            echo json_encode(array('st'=>0, 'errors' => '0'));
        }
	}

	function Calculate($code){
	        $sum = 0;
	        for ($i=0;$i < strlen($code);$i++)
	        {
	        	$sum += (int)$code[$i];
	        }
	        $delta = array(0,1,2,3,4,-4,-3,-2,-1);

	        for ($i = strlen($code)-1; $i>=0; $i-=2)
	        {	
	        	$deltaIndex = (int)$code[$i];
	        	$deltaValue = $delta[$deltaIndex];
	        	$sum += $deltaValue;
	        }

	        $mod10 = $sum % 10;
	        $mod10 = 10 - $mod10;

	        if($mod10 == 10)
	        {
	        	$mod10 = 0;	
	        }
	        return $code.$mod10;

	}

	function Validate($codeV){
		$codeVDigit = substr($codeV, -1);
		$codeVLess = substr($codeV, 0, -1);
		if (Calculate($codeVLess) == (int)$codeVDigit) {
			return true;
		}
		else{
			return false;
		}
	    
	}

}


/* End of file home.php */
/* Location: ./system/application/controllers/home.php */