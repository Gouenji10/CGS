<?php 
	/**
	 * 
	 */
	class Accounts extends Front_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('accounts_m');
		}
		public function index(){
			if($this->input->post()):
				$this->form_validation->set_rules('party_name','Party Name','required');
				$this->form_validation->set_rules('party_address','Party Address','required');
				$this->form_validation->set_rules('party_phone','Party Phone','required');
				if($this->form_validation->run()==true):
					$data=array(
						'name'=>$this->input->post('party_name'),
						'address'=>$this->input->post('party_address'),
						'phone'=>$this->input->post('party_phone'),
					);
					if($this->accounts_m->insert(config('tbl_party'),$data)):
						echo 'ok';
						exit();
					else:
						echo "Failed To Added Party Successfully.";
						exit();
					endif;
				else:
					echo validation_errors();
					exit();
				endif;
			endif;
			$tbl_party=$this->accounts_m->getAll(config('tbl_party'));

			$this->template
			->title('Accounts')
			->set_layout('dashboard')
			->set('page','Accounts')
			->set('accounts',$tbl_party)
			->build('index');
		}
		public function details($id){
			$tbl_data=$this->accounts_m->getOne(config('tbl_party'),array('id'=>$id));
			$tbl_transaction=$this->accounts_m->get_by(config('tbl_transaction'),array('store_id'=>$id));
			$this->template
			->title('Accounts')
			->set_layout('dashboard')
			->set('page','Accounts')
			->set('store',$tbl_data)
			->set('transactions',$tbl_transaction)
			->build('details');
		}

		public function debit_transaction(){
			if($this->input->post()){
				$this->form_validation->set_rules('date','Transaction Date','required');
				$this->form_validation->set_rules('transaction_details','Transaction Details','required');
				$this->form_validation->set_rules('amount','Transaction Amount','required');
				if($this->form_validation->run()==true):
					$store_id=$this->input->post('store_id');
					$debit=$this->input->post('amount');
					$credit=0;

					if($tbl_data=$this->accounts_m->getLast(config('tbl_transaction'),array('store_id'=>$store_id))):
						$balance=$tbl_data->balance;
					else:
						$balance=0;
					endif;

					$balance=$balance + $debit - $credit;

					$data=array(
						'store_id'=>$store_id,
						'date'=>$this->input->post('date'),
						'details'=>$this->input->post('transaction_details'),
						'debit'=>$debit,
						'credit'=>$credit,
						'balance'=>$balance,
					);
					if($this->accounts_m->insert(config('tbl_transaction'),$data)):
						echo 'ok';
					else:
						echo "Failed to Add Transaction.";
					endif;

				else:
					echo validation_errors();
				endif;
			}
		}


		public function credit_transaction(){
			if($this->input->post()){
				$this->form_validation->set_rules('date','Transaction Date','required');
				$this->form_validation->set_rules('transaction_details','Transaction Details','required');
				$this->form_validation->set_rules('amount','Transaction Amount','required');
				if($this->form_validation->run()==true):
					$store_id=$this->input->post('store_id');
					$credit=$this->input->post('amount');
					$debit=0;

					if($tbl_data=$this->accounts_m->getLast(config('tbl_transaction'),array('store_id'=>$store_id))):
						$balance=$tbl_data->balance;
					else:
						$balance=0;
					endif;

					$balance=$balance + $debit - $credit;

					$data=array(
						'store_id'=>$store_id,
						'date'=>$this->input->post('date'),
						'details'=>$this->input->post('transaction_details'),
						'debit'=>$debit,
						'credit'=>$credit,
						'balance'=>$balance,
					);
					if($this->accounts_m->insert(config('tbl_transaction'),$data)):
						echo 'ok';
					else:
						echo "Failed to Add Transaction.";
					endif;

				else:
					echo validation_errors();
				endif;
			}
		}
	}
	
 ?>