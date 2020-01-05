<?php 
/**
 * 
 */
class Sales_m extends My_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function search_customer($value){
		$this->db->like('name',$value);
	}

	public function search_product($value){
		$this->db->like('name',$value);	
	}
}