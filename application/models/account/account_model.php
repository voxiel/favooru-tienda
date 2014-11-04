<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_model extends CI_Model {	
	
	/**
	 * Get all accounts
	 *
	 * @access public
	 * @return object all accounts
	 */
	function get(){
		return $this->db->get('a3m_account')->result();
	}

	/**
	 * Get details for products
	 *
	 * @access public
	 * @return object products object
	 */

	public function get_productos(){
	    return $this->db->get('favooru_producto')->result();
	}

	// --------------------------------------------------------------------

	/**
	 * Get product by id
	 *
	 * @access public
	 * @param string $product_id
	 * @return object account object
	 */
	function get_product_by_id($product_id){
		return $this->db->get_where('favooru_producto', array('producto_id' => $product_id))->row();
	}

	// --------------------------------------------------------------------

	/**
	 * Get product by id
	 *
	 * @access public
	 * @return object account object
	 */
	function get_clientes(){
		return $this->db->get('favooru_clientes')->result();
	}

	// --------------------------------------------------------------------

	/**
	 * Get afiliado by id
	 *
	 * @access public
	 * @return object afiliados object
	 */
	function get_afiliados(){
		return $this->db->get('favooru_afiliados')->result();
	}

	// --------------------------------------------------------------------

	/**
	 * Get afiliado by id
	 *
	 * @access public
	 * @return object pedidos object
	 */
	function get_pedidos(){
		$this->db->select('favooru_pedidos.pedidos_id, favooru_clientes.cliente_nombres, favooru_clientes.cliente_apellidos, favooru_producto.producto_descripcion, favooru_producto.producto_precio, favooru_pedidos.pedidos_codigo, favooru_pedidos.pedido_fecha, favooru_afiliados.afiliados_nombre, favooru_pedidos.pedido_estado,');
		$this->db->from('favooru_pedidos');
		$this->db->join('favooru_clientes', 'favooru_pedidos.pedidos_cliente_id = favooru_clientes.cliente_id');
		$this->db->join('favooru_producto', 'favooru_pedidos.pedidos_producto_id = favooru_producto.producto_id');
		$this->db->join('favooru_afiliados', 'favooru_pedidos.pedidos_afiliado_id = favooru_afiliados.afiliados_id');

		return $this->db->get()->result();
	}



	// --------------------------------------------------------------------


	/**
	 * Insert a new Customer
	 *
	 * @access public
	 * @param string $name
	 * @param string $email
	 * @return void
	 */
	function insert_customer($name, $email)
	{

		$this->db->insert('favooru_clientes', array('cliente_nombre' => $name, 'cliente_correo' => $email));

	}

	// --------------------------------------------------------------------

	/**
	 * Get account by id
	 *
	 * @access public
	 * @param string $account_id
	 * @return object account object
	 */
	function get_by_id($account_id)
	{
		return $this->db->get_where('a3m_account', array('id' => $account_id))->row();
	}

	// --------------------------------------------------------------------

	/**
	 * Get account by username
	 *
	 * @access public
	 * @param string $username
	 * @return object account object
	 */
	function get_by_username($username)
	{
		return $this->db->get_where('a3m_account', array('username' => $username))->row();
	}

	// --------------------------------------------------------------------

	/**
	 * Get account by email
	 *
	 * @access public
	 * @param string $email
	 * @return object account object
	 */
	function get_by_email($email)
	{
		return $this->db->get_where('a3m_account', array('email' => $email))->row();
	}

	// --------------------------------------------------------------------

	/**
	 * Get account by username or email
	 *
	 * @access public
	 * @param string $username_email
	 * @return object account object
	 */
	function get_by_username_email($username_email)
	{
		return $this->db->from('a3m_account')->where('username', $username_email)->or_where('email', $username_email)->get()->row();
	}

	// --------------------------------------------------------------------

	/**
	 * Create an account
	 *
	 * @access public
	 * @param string $username
	 * @param string $hashed_password
	 * @return int insert id
	 */
	function create($username, $email = NULL, $password = NULL)
	{
		// Create password hash using phpass
		if ($password !== NULL)
		{
			$this->load->helper('account/phpass');
			$hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);
			$hashed_password = $hasher->HashPassword($password);
		}

		$this->load->helper('date');
		$this->db->insert('a3m_account', array('username' => $username, 'email' => $email, 'password' => isset($hashed_password) ? $hashed_password : NULL, 'createdon' => mdate('%Y-%m-%d %H:%i:%s', now())));

		return $this->db->insert_id();
	}

	// --------------------------------------------------------------------

	/**
	 * Change account username
	 *
	 * @access public
	 * @param int $account_id
	 * @param int $new_username
	 * @return void
	 */
	function update_username($account_id, $new_username)
	{
		$this->db->update('a3m_account', array('username' => $new_username), array('id' => $account_id));
	}

	// --------------------------------------------------------------------

	/**
	 * Change account email
	 *
	 * @access public
	 * @param int $account_id
	 * @param int $new_email
	 * @return void
	 */
	function update_email($account_id, $new_email)
	{
		$this->db->update('a3m_account', array('email' => $new_email), array('id' => $account_id));
	}

	// --------------------------------------------------------------------

	/**
	 * Change account password
	 *
	 * @access public
	 * @param int $account_id
	 * @param int $hashed_password
	 * @return void
	 */
	function update_password($account_id, $password_new)
	{
		$this->load->helper('account/phpass');
		$hasher = new PasswordHash(PHPASS_HASH_STRENGTH, PHPASS_HASH_PORTABLE);
		$new_hashed_password = $hasher->HashPassword($password_new);

		$this->db->update('a3m_account', array('password' => $new_hashed_password), array('id' => $account_id));
	}

	// --------------------------------------------------------------------

	/**
	 * Update account last signed in dateime
	 *
	 * @access public
	 * @param int $account_id
	 * @return void
	 */
	function update_last_signed_in_datetime($account_id)
	{
		$this->load->helper('date');

		$this->db->update('a3m_account', array('lastsignedinon' => mdate('%Y-%m-%d %H:%i:%s', now())), array('id' => $account_id));
	}

	// --------------------------------------------------------------------

	/**
	 * Update password reset sent datetime
	 *
	 * @access public
	 * @param int $account_id
	 * @return int password reset time
	 */
	function update_reset_sent_datetime($account_id)
	{
		$this->load->helper('date');

		$resetsenton = mdate('%Y-%m-%d %H:%i:%s', now());

		$this->db->update('a3m_account', array('resetsenton' => $resetsenton), array('id' => $account_id));

		return strtotime($resetsenton);
	}

	/**
	 * Remove password reset datetime
	 *
	 * @access public
	 * @param int $account_id
	 * @return void
	 */
	function remove_reset_sent_datetime($account_id)
	{
		$this->db->update('a3m_account', array('resetsenton' => NULL), array('id' => $account_id));
	}

	// --------------------------------------------------------------------

	/**
	 * Update account deleted datetime
	 *
	 * @access public
	 * @param int $account_id
	 * @return void
	 */
	function update_deleted_datetime($account_id)
	{
		$this->load->helper('date');

		$this->db->update('a3m_account', array('deletedon' => mdate('%Y-%m-%d %H:%i:%s', now())), array('id' => $account_id));
	}

	/**
	 * Remove account deleted datetime
	 *
	 * @access public
	 * @param int $account_id
	 * @return void
	 */
	function remove_deleted_datetime($account_id)
	{
		$this->db->update('a3m_account', array('deletedon' => NULL), array('id' => $account_id));
	}

	// --------------------------------------------------------------------

	/**
	 * Update account suspended datetime
	 *
	 * @access public
	 * @param int $account_id
	 * @return void
	 */
	function update_suspended_datetime($account_id)
	{
		$this->load->helper('date');

		$this->db->update('a3m_account', array('suspendedon' => mdate('%Y-%m-%d %H:%i:%s', now())), array('id' => $account_id));
	}

	/**
	 * Remove account suspended datetime
	 *
	 * @access public
	 * @param int $account_id
	 * @return void
	 */
	function remove_suspended_datetime($account_id)
	{
		$this->db->update('a3m_account', array('suspendedon' => NULL), array('id' => $account_id));
	}

	// --------------------------------------------------------------------

	/**
	 * count password available
	 *
	 * @access public
	 * @return object count password
	 */
	function count_passwords_available_by_product()
	{
		$passwords_available = array();
		$all_products = $this->get_productos();
		foreach ($all_products as $index => $product) {
			$this->db->where('accesos_producto_id', $product->producto_id); 
			$this->db->where('accesos_disponibilidad', 1); 
			$this->db->from('favooru_accesos');
		 	$count_password = $this->db->count_all_results();
		 	array_push($passwords_available, $count_password);
		 	array_push($passwords_available, $product->producto_descripcion);
		}
		//return an array with the amount passwords available by product
		return $passwords_available;

	}

	// --------------------------------------------------------------------

	/**
	 * return passwords available
	 *
	 * @access public
	 * @return object count password
	 */
	function pending_orders(){
		$this->db->select('ordenes_codigo_transaccion');
		$this->db->where('ordenes_disponibilidad', 1); //true
		$query = $this->db->get('favooru_ordenes');

		$pending_orders = array();
		foreach ($query->result() as $row)
		{
		    array_push($pending_orders, $row->ordenes_codigo_transaccion);
		}
		return $pending_orders;
	}

	// --------------------------------------------------------------------

	/**
	 * update orders
	 *
	 * @access public
	 * @return object count password
	 */
	function process_orders($codTransaccion){

		$data = array('ordenes_disponibilidad' => 0);
		$this->db->where('ordenes_codigo_transaccion', $codTransaccion); 
		$this->db->update('favooru_ordenes', $data);

		return ($this->db->affected_rows() > 0);
	}

}


/* End of file account_model.php */
/* Location: ./application/account/models/account_model.php */