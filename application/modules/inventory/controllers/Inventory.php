<?php 
/**
 * 
 */
class Inventory extends Front_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('inventory_m');
	}
	public function index(){
		if($this->input->post()){
			$this->form_validation->set_rules('category_name','Category','required');
			if($this->form_validation->run()==true):
				$data=array(
					'name'=>$this->input->post('category_name')
				);
				if($this->inventory_m->insert(config('tbl_categories'),$data)):
					echo "ok";
					exit();
				else:
					echo "Failed To Add Category Successfully.";
					exit();
				endif;

			else:
				echo validation_errors();
				exit();
			endif;
		}
		$tbl_data=$this->inventory_m->getAll(config('tbl_categories'));
		$this->template
		->title('Inventory')
		->set_layout('dashboard')
		->set('page','Inventory')
		->set('categories',$tbl_data)
		->build('index');
	}

	public function products(){
		if($this->input->post()){
			$this->form_validation->set_rules('product_name','Product Name','required');
			$this->form_validation->set_rules('product_code','Product Code','required');
			$this->form_validation->set_rules('category','Product Category','required|is_natural_no_zero',array('is_natural_no_zero' => 'Please Select Product Category Field'));
			$this->form_validation->set_rules('product_purchase','Product Purchase Price','required');
			$this->form_validation->set_rules('product_selling','Product Selling Price','required');
			$this->form_validation->set_rules('product_stock','Product Stock','required');

			if($this->form_validation->run()==true):
				$data=array(
					'name'=>$this->input->post('product_name'),
					'code'=>$this->input->post('product_code'),
					'category'=>$this->input->post('category'),
					'cost'=>$this->input->post('product_purchase'),	
					'selling'=>$this->input->post('product_selling'),
					'stock'=>$this->input->post('product_stock')
				);
				if($this->inventory_m->insert(config('tbl_products'),$data)):
					echo 'ok';
					exit();
				else:
					echo "Failed To Add Product Successfully.";
					exit();
				endif;
			else:
				echo validation_errors();
				exit();
			endif;
		}
		$tbl_products=$this->inventory_m->getAll(config('tbl_products'));

		$tbl_category=$this->getAllCategories();
		$this->template
		->title('Inventory')
		->set_layout('dashboard')
		->set('categories',$tbl_category)
		->set('products',$tbl_products)
		->set('page','Products')
		->build('products');
	}

	public function p_edit_modal($id){
		if($this->input->is_ajax_request()):
			$tbl_data=$this->inventory_m->get(config('tbl_products'),array('id'=>$id));
			$tbl_data->categories=$this->getAllCategories();
			echo $this->load->view('p_edit',$tbl_data,true);
			exit;
		endif;
	}
	public function product_edit($id){
		if($this->input->post()){
			$this->form_validation->set_rules('product_name','Product Name','required');
			$this->form_validation->set_rules('product_code','Product Code','required');
			$this->form_validation->set_rules('category','Product Category','required|is_natural_no_zero',array('is_natural_no_zero' => 'Please Select Product Category Field'));
			$this->form_validation->set_rules('product_purchase','Product Purchase Price','required');
			$this->form_validation->set_rules('product_selling','Product Selling Price','required');
			$this->form_validation->set_rules('product_stock','Product Stock','required');

			if($this->form_validation->run()==true):
				$data=array(
					'name'=>$this->input->post('product_name'),
					'code'=>$this->input->post('product_code'),
					'category'=>$this->input->post('category'),
					'cost'=>$this->input->post('product_purchase'),	
					'selling'=>$this->input->post('product_selling'),
					'stock'=>$this->input->post('product_stock')
				);
				if($this->inventory_m->update(config('tbl_products'),$data,array('id'=>$id))):
					echo 'ok';
					exit();
				else:
					echo "Failed To Update Product Successfully.";
					exit();
				endif;
			else:
				echo validation_errors();
				exit();
			endif;
		}
	}
	public function cylinders(){
		if($this->input->post()){
			$this->form_validation->set_rules('cylinder_name','Cylinder','required');
			if($this->form_validation->run()==true):
				$data=array(
					'name'=>$this->input->post('cylinder_name')
				);
				if($this->inventory_m->insert(config('tbl_cylinders'),$data)):
					echo "ok";
					exit();
				else:
					echo "Failed To Add Cylinder Successfully.";
					exit();
				endif;

			else:
				echo validation_errors();
				exit();
			endif;
		}
		$tbl_data=$this->inventory_m->getAll(config('tbl_cylinders'));

		$this->template
		->title('Inventory')
		->set_layout('dashboard')
		->set('page','Cylinder')
		->set('cylinders',$tbl_data)
		->build('cylinders');
	}
	public function c_edit_modal($id){
		if($this->input->is_ajax_request()):
			$tbl_data=$this->inventory_m->get(config('tbl_cylinders'),array('id'=>$id));
			echo $this->load->view('c_edit',$tbl_data,true);
			exit;
		endif;
	}
	public function cylinder_edit($id){
		if($this->input->post()){
			$this->form_validation->set_rules('cylinder_name','Cylinder','required');
			if($this->form_validation->run()==true):
				$data=array(
					'name'=>$this->input->post('cylinder_name')
				);
				if($this->inventory_m->update(config('tbl_cylinders'),$data,array('id'=>$id))):
					echo "ok";
					exit();
				else:
					echo "Failed To Update Cylinder Successfully.";
					exit();
				endif;

			else:
				echo validation_errors();
				exit();
			endif;
		}
	}
	public function getAllCategories(){
		$getCategories = $this->inventory_m->select('id,name')->getAll(config('tbl_categories'),null,0,array());
    	$category=array();
		foreach($getCategories as $categories){
			$category[$categories->id] = $categories->name;
		}
    	return $category;
	}
}



 ?>