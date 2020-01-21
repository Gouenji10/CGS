<?php 
/**
 * 
 */
class Customer extends Front_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('customer_m');
	}

	public function index(){
		if($this->input->post()):
			$this->form_validation->set_rules('customer_name','Customer Name','required');
			$this->form_validation->set_rules('customer_address','Customer Address','required');
			$this->form_validation->set_rules('customer_phone','Customer Phone','required');

			if($this->form_validation->run()==true):
				$data=array(
					'name'=>$this->input->post('customer_name'),
					'address'=>$this->input->post('customer_address'),
					'phone'=>$this->input->post('customer_phone'),
					'status'=>$this->input->post('status'),
					'balance'=>'0'
				);
				if($this->customer_m->insert(config('tbl_customer'),$data)):
					echo "ok";
					exit();
				else:
					echo"Failed To Add Customer Successfully.";
					exit();
				endif;
			else:
				echo validation_errors();
				exit();
			endif;

		endif;
		$tbl_data=$this->customer_m->getAll(config('tbl_customer'));		
		$this->template
		->title('Customer')
		->set_layout('dashboard')
		->set('page','Customer')
		->set('customers',$tbl_data)
		->build('index');
	}

	public function customer_modal($id){
		if($this->input->is_ajax_request()):
			$tbl_data=$this->customer_m->get(config('tbl_customer'),array('id'=>$id));
			echo $this->load->view('edit',$tbl_data,true);
			exit;
		endif;
	}
	public function customer_edit($id){
		if($this->input->post()):
			$this->form_validation->set_rules('customer_name','Customer Name','required');
			$this->form_validation->set_rules('customer_address','Customer Address','required');
			$this->form_validation->set_rules('customer_phone','Customer Phone','required');

			if($this->form_validation->run()==true):
				$data=array(
					'name'=>$this->input->post('customer_name'),
					'address'=>$this->input->post('customer_address'),
					'phone'=>$this->input->post('customer_phone'),
					'status'=>$this->input->post('status'),
				);
				if($this->customer_m->update(config('tbl_customer'),$data,array('id'=>$id))):
					echo "ok";
					exit();
				else:
					echo"Failed To Update Customer Successfully.";
					exit();
				endif;
			else:
				echo validation_errors();
				exit();
			endif;

		endif;
	}

	public function due(){
		add_hook('where','due_customer',$this->customer_m,'due_customer',array());
		$tbl_data=$this->customer_m->getAll(config('tbl_customer'));
		remove_hook('where','due_customer');
		$this->template
		->title('Customer')
		->set_layout('dashboard')
		->set('page','Customer')
		->set('customers',$tbl_data)
		->build('due');	
	}

	public function details($id){
		$tbl_customer=$this->customer_m->getOne(config('tbl_customer'),array('id'=>$id));
		$this->template
			->title('Customer')
			->set_layout('dashboard')
			->set('page','Customer')
			->set('customer',$tbl_customer)
			->build('details');		
	}

	public function due_details($id){
		$tbl_customer=$this->customer_m->getOne(config('tbl_customer'),array('id'=>$id));
		if($this->input->post()){
			$this->form_validation->set_rules('transaction_details','Transaction Details','required');
			$this->form_validation->set_rules('amount','Transaction Amount','required');

			if($this->form_validation->run()==true){
				$date=$this->input->post('date');
				$date=Modules::load('sales')->convert_date($date);
				$balance=$tbl_customer['balance']-$this->input->post('amount');
				$tbl_data=array(
					'date'=>$date,
					'customer_id'=>$id,
					'sales_type'=>'cash_received',
					'cash_amount'=>$this->input->post('amount'),
					'credit_amount'=>'',
					'balance'=>$balance,
					'comments'=>$this->input->post('transaction_details'),
				);
				if($balance=='0'){
					$status='1';
				}else{
					$status='2';
				}
				if($this->customer_m->insert(config('tbl_customer_transactions'),$tbl_data)){
					$tbl_balance=array(
						'balance'=>$balance,
						'status'=>$status
					);
					$this->customer_m->update(config('tbl_customer'),$tbl_balance,array('id'=>$id));
					echo "ok";
				}else{
					echo "Failed To Add Transaction.";
				}
			}else{
				echo validation_errors();
				exit();
			}
			exit;
		}
		add_hook('where','due_customer_data',$this->customer_m,'due_customer_data',array($id));
		$due_data=$this->customer_m->getAll(config('tbl_customer_transactions'));
		remove_hook('where','due_customer_data');
		
		$cylinders=Modules::load('sales')->get_cylinder();
		$this->template
			->title('Customer')
			->set_layout('dashboard')
			->set('page','Customer')
			->set('customer',$tbl_customer)
			->set('due_data',$due_data)
			->set('cylinders',$cylinders)
			->build('due_customer');	
	}

	
}


