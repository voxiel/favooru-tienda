<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productos_model extends CI_Model {

	/**
	 * Get details for products
	 *
	 * @access public
	 * @param string $prod_id
	 * @return object products object
	 */

	public function get_productos() 
	{
	    return $this->db->get('favooru_producto')->result();
	}
 }
?>