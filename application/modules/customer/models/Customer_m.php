<?php 

/**
 * 
 */
class Customer_m extends My_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function due_customer(){
		$this->db->where('status','2');
	}
	public function due_customer_data($id){
		$this->db->where('customer_id',$id);
	}
}
 ?>