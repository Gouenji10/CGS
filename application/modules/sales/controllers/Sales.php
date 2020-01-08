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

			if($this->form_validation->run()==true)
			{
				$customer_id=$this->input->post('customer_id');
				$customer_name=$this->input->post('customer_name');
				$customer_address=$this->input->post('customer_address');
				$customer_phone=$this->input->post('customer_phone');
				$incoming=$this->input->post('incoming');
				$outgoing=$this->input->post('outgoing');
				$transaction_type=$this->input->post('transaction_type');
				$date=$this->input->post('date');

				if($transaction_type=='cash'){
					$cash_amt=$this->input->post('cash_amt');
					$credit_amt='0';
					$status='';
				}elseif ($transaction_type=='credit') {
					$credit_amt=$this->input->post('credit_amt');
					$cash_amt='0';
					$status='2';
				}elseif($transaction_type=='both'){
					$cash_amt=$this->input->post('cash_amt');
					$credit_amt=$this->input->post('credit_amt');
					$status='2';
				}
				if(empty($customer_id)){
					if($transaction_type=='cash'){
						$balance='0';
					}elseif ($transaction_type=='credit') {
						$balance=$credit_amt;						
					}elseif($transaction_type=='both'){
						$balance=$credit_amt;
					}
					$data=array(
						'name'=>$customer_name,
						'address'=>$customer_address,
						'phone'=>$customer_phone,
						'status'=>$status,
						'balance'=>$balance
					);
					$this->sales_m->insert(config('tbl_customer'),$data);
					$customer_id = $this->db->insert_id();

				}else{

					$customer_data=$this->sales_m->getOne(config('tbl_customer'),array('id'=>$customer_id));
					if($transaction_type=='cash'){
						$balance=$customer_data['balance'];
					}elseif ($transaction_type=='credit') {
						$balance=$customer_data['balance'];
						if($balance==''){
							$balance='0';
						}
						$balance=$balance + $credit_amt;						
					}elseif($transaction_type=='both'){
						$balance=$customer_data['balance'];
						if($balance==''){
							$balance='0';
						}
						$balance=$balance + $credit_amt;
					}
					$update_data=array(
						'status'=>$status,
						'balance'=>$balance
					);
					$this->sales_m->update(config('tbl_customer'),$update_data,array('id'=>$customer_id));
				}
				$sales_data=array(
					'sales_date'=>$date,
					'customer_id'=>$customer_id,
					'incoming'=>$incoming,
					'outgoing'=>$outgoing,
					'transaction_type'=>$transaction_type,
					'cash'=>$cash_amt,
					'credit'=>$credit_amt,
					'balance'=>$balance,
					'status'=>'',
					'sales_type'=>$this->input->post('sales_type'),
				);
				if($this->sales_m->insert(config('tbl_sales_gas'),$sales_data)){
					echo "ok";
					exit();
				}else{
					echo "Failed To Add Sales.";
					exit();
				}

			}else{
				echo validation_errors();
				exit();	
			}
			
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
		if($this->input->post()){
			$this->form_validation->set_rules('customer_name','Customer Name','required');
			$this->form_validation->set_rules('customer_address','Customer Address','required');
			$this->form_validation->set_rules('customer_phone','Customer Phone','required');
			$this->form_validation->set_rules('transaction_type','Transaction Type','required');

			if($this->form_validation->run()==true)
			{
				$customer_id=$this->input->post('customer_id');

				$customer_name=$this->input->post('customer_name');
				
				$customer_address=$this->input->post('customer_address');
				
				$customer_phone=$this->input->post('customer_phone');
				
				$transaction_type=$this->input->post('transaction_type');
				
				$date=$this->input->post('date');

				if($transaction_type=='cash'){

					$cash_amt=$this->input->post('cash_amt');
					
					$credit_amt='0';
					
					$status='';
				
				}elseif ($transaction_type=='credit') {
				
					$credit_amt=$this->input->post('credit_amt');
				
					$cash_amt='0';
				
					$status='2';
				
				}elseif($transaction_type=='both'){
				
					$cash_amt=$this->input->post('cash_amt');
				
					$credit_amt=$this->input->post('credit_amt');
				
					$status='2';
				}
				
				if(empty($customer_id)){
				
					if($transaction_type=='cash'){
				
						$balance='0';
				
					}elseif ($transaction_type=='credit') {
				
						$balance=$credit_amt;						
				
					}elseif($transaction_type=='both'){
				
						$balance=$credit_amt;
					}
				
					$data=array(
						'name'=>$customer_name,
						'address'=>$customer_address,
						'phone'=>$customer_phone,
						'status'=>$status,
						'balance'=>$balance
					);
					$this->sales_m->insert(config('tbl_customer'),$data);
				
					$customer_id = $this->db->insert_id();

				}else{

					$customer_data=$this->sales_m->getOne(config('tbl_customer'),array('id'=>$customer_id));
				
					if($transaction_type=='cash'){
				
						$balance=$customer_data['balance'];
				
					}elseif ($transaction_type=='credit') {
				
						$balance=$customer_data['balance'];
				
						if($balance==''){
				
							$balance='0';
						}
				
						$balance=$balance + $credit_amt;						
				
					}elseif($transaction_type=='both'){
				
						$balance=$customer_data['balance'];
				
						if($balance==''){
				
							$balance='0';
						}
				
						$balance=$balance + $credit_amt;
					}
					$update_data=array(
						'status'=>$status,
						'balance'=>$balance
					);
					$this->sales_m->update(config('tbl_customer'),$update_data,array('id'=>$customer_id));
				}
				$sales_data=array(
					'sales_date'=>$date,
					'customer_id'=>$customer_id,
					'incoming'=>'--',
					'outgoing'=>'--',
					'transaction_type'=>$transaction_type,
					'cash'=>$cash_amt,
					'credit'=>$credit_amt,
					'balance'=>$balance,
					'status'=>'',
					'sales_type'=>$this->input->post('sales_type'),
					'product_id'=>$this->input->post('product_id'),
				);
				if($this->sales_m->insert(config('tbl_sales_gas'),$sales_data)){
					echo "ok";
					exit();
				}else{
					echo "Failed To Add Product Sales.";
					exit();
				}

			}else{
				echo validation_errors();
				exit();	
			}
			
		}

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