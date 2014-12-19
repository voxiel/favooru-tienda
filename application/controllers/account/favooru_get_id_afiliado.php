<?php
/*
 * Manage_users Controller
 */
class favooru_get_id_afiliado extends CI_Controller {

  /**
   * Constructor
   */
  function __construct()
  {
    parent::__construct();

    // Load the necessary stuff...
    $this->load->config('account/account');
    $this->load->helper(array('date', 'language', 'account/ssl', 'url'));
    $this->load->library(array('account/authentication', 'account/authorization', 'form_validation'));
    $this->load->model(array('account/account_model', 'account/account_details_model', 'account/acl_permission_model', 'account/acl_role_model', 'account/rel_account_permission_model', 'account/rel_account_role_model', 'account/rel_role_permission_model'));
    $this->load->language(array('general', 'account/manage_users', 'account/account_settings', 'account/account_profile', 'account/sign_up', 'account/account_password'));
  }

  /**
   * Manage Users
   */
  function index()
  {
    // Enable SSL?
    maintain_ssl($this->config->item("ssl_enabled"));

    // Redirect unauthenticated users to signin page
    if ( ! $this->authentication->is_signed_in())
    {
      redirect('account/sign_in/?continue='.urlencode(base_url().'account/manage_users'));
    }

    // Redirect unauthorized users to account profile page
    if ( ! $this->authorization->is_permitted('retrieve_users'))
    {
      redirect('account/account_profile');
    }

    // Retrieve sign in user
    $data['account'] = $this->account_model->get_by_id($this->session->userdata('account_id'));

    // Get all user information
    $all_accounts = $this->account_model->get_clientes();


    /******************************************************************************************/

      $url = parse_url($_SERVER['REQUEST_URI']);
      parse_str($url['query'], $params); //recibe todos los parametros de la url incluyendo la clave y el valor
                                         // array(1) { ["id_afiliado"]=> string(1) "2" }

      $data['id_afiliado'] = $params['id_afiliado'];

    /******************************************************************************************/






    // Load manage users view
    $this->load->view('account/favooru_get_id_afiliado', $data);



    
  }

  
}

/* End of file manage_users.php */
/* Location: ./application/account/controllers/manage_users.php */
