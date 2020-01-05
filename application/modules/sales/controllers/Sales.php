<?php
/**
 * For Sales Management
 */
class Sales extends Front_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('sales_m');
	}

	public function index(){

		if($this->input->post()){
			// echo "submitted";
			// exit;
		}
		$cylinders=$this->get_cylinder();

		$this->template
		->title('Sales')
		->set_layout('dashboard')
		->set('page','sales')
		->set('cylinders',$cylinders)
		->build('sales');
	}
	public function products(){
		$this->template
		->title('Sales')
		->set_layout('dashboard')
		->set('page','sales')
		->build('products');
	}
	public function search_customer(){
		$value=$this->input->post('query');
		add_hook('where','customer_search',$this->sales_m,'search_customer',array($value));
		$tbl_customer=$this->sales_m->getAll(config('tbl_customer'));
		remove_hook('where','customer_search');
		$result="";
		$result='<ul class="customer_list">';
		if($tbl_customer):
			foreach ($tbl_customer as $customer):
				$result.='<li data-customer_id="'.$customer->id.'" data-customer_address="'.$customer->address.'" data-customer_phone="'.$customer->phone.'">'.$customer->name.'</li>';
			endforeach;	
		else:
			$result .='<li>Please Add the Customer First.</li>'	;
		endif;
		$result.='</ul>';

		echo $result;
	}

	public function product_search(){
		$value=$this->input->post('query');

		add_hook('where','product_search',$this->sales_m,'search_product',array($value));
		
		$tbl_product=$this->sales_m->getAll(config('tbl_products'));
		
		remove_hook('where','product_search');
		
		$result="";
		
		$result='<ul class="product_list">';
		
		if($tbl_product):
		
			foreach ($tbl_product as $product):
				$result.='<li data-product_id="'.$product->id.'">'.$product->name.'</li>';
			endforeach;	
		else:
			$result .='<li>Please Add the Product First.</li>'	;
		endif;
		$result.='</ul>';

		echo $result;


	}
	public function get_cylinder(){
		$cylinders_data = $this->sales_m->select('id,name')->getAll(config('tbl_cylinder'),null,0,array());
    	$cylinder=array();
		foreach($cylinders_data as $cylinders){
			$cylinder[$cylinders->id] = $cylinders->name;
		}
    	return $cylinder;
	}
}