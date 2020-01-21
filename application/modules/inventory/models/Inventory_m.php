<?php 

/**
 * 
 */
class Inventory_m extends My_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function get_all_product($id){
		$this->db->where('category',$id);
	}
}