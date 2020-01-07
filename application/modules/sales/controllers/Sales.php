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
			$this->form_validation->set_rules('customer_name','Customer Name','required');
			$this->form_validation->set_rules('customer_address','Customer Address','required');
			$this->form_validation->set_rules('customer_phone','Customer Phone','required');
			$this->form_validation->set_rules('transaction_type','Transaction Type','required');

			if($this->form_validation->run()==true){
				$customer_id=$this->input->post('customer_id');
				$customer_name=$this->input->post('customer_name');
				$customer_address=$this->input->post('customer_phone');
				$cusomer_phone=$this->input->post('customer_phone');
				$incoming=$this->input->post('incoming');
				$outgoing=$this->input->post('outgoing');
				$transaction_type=$this->input->post('transaction_type');

				if($transaction_type=='cash'){
					$cash_amt=$this->input->post('cash_amt');
					$credit_amt='0';
					$status='1';
				}elseif ($transaction_type=='credit') {
					$credit_amt=$this->input->post('credit_amt');
					$cash_amt='0';
					$status='2';
				}elseif($transaction_type=='both'){
					$cash_amt=$this->input->post('cash_amt');
					$credit_amt=$this->input->post('credit_amt');
					$status='2';
				}

				if($incoming=='0'){
					$incoming='Not Received';
				}
				if(empty($customer_id)){
					$data=array(
						'name'=>$customer_name,
						'address'=>$customer_phone,
						'phone'=>$customer_address,
						'status'=>$sataus
					);
					$balance='0';
					// insert into customer database
				}else{

				}
			}
			exit();
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