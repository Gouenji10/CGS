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
		add_hook('where','due_customer_data',$this->customer_m,'due_customer_data',array($id));
		$due_data=$this->customer_m->getAll(config('tbl_sales_gas'));
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


