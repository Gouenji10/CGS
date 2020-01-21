var site_url='http://localhost/cgs/';
$(document).ready(function(){

	// Global jQuery
		// date picker
		$('input[name="date"]').daterangepicker({
			singleDatePicker: true,
		});
	// end of Global jQuery


	/*
	*jQuery For Party accounts
	*/ 
		
		// to add new party
		$('form#add_accounts').on('submit',function(){
			var action=$(this).attr('action');
			$.post(action,$(this).serialize(),function(response){
				if (response=='ok') {
					new Noty({
					    text:'Account Added Successfully.',
					    type: 'success',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :2000,
					}).show();
					setTimeout(function(){location.reload();} , 2500);   
				}
				else{
					new Noty({
					    text: response,
					    type: 'error',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :3000,
					}).show();
				}
			});
			return false;
		});

		//to add debit transaction
		$('form#debit_transaction').on('submit',function(){
			var action=$(this).attr('action');
			$.post(action,$(this).serialize(),function(response){
				if (response=='ok') {
					new Noty({
					    text:'Transaction Added Successfully.',
					    type: 'success',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :2000,
					}).show();
					setTimeout(function(){location.reload();} , 2500);   
				}
				else{
					new Noty({
					    text: response,
					    type: 'error',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :3000,
					}).show();
				}
			});
			return false;
		});

		// to add new Credit transaction
		$('form#credit_transaction').on('submit',function(){
			var action=$(this).attr('action');
			$.post(action,$(this).serialize(),function(response){
				if (response=='ok') {
					new Noty({
					    text:'Transaction Added Successfully.',
					    type: 'success',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :2000,
					}).show();
					setTimeout(function(){location.reload();} , 2500);   
				}
				else{
					new Noty({
					    text: response,
					    type: 'error',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :3000,
					}).show();
				}
			});
			return false;
		});

		// to edit the party details 
		$('#edit').on('submit', 'form', function(event) {
			var action=$(this).attr('action');
			$.post(action,$(this).serialize(),function(response){
				if (response=='ok') {
					new Noty({
					    text:'Account Updated Successfully.',
					    type: 'success',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :2000,
					}).show();
					setTimeout(function(){location.reload();} , 2500);   
				}
				else{
					new Noty({
					    text: response,
					    type: 'error',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :3000,
					}).show();
				}
			});
			return false;
		});

		// to delete party account
		$('.Accounts').find('.dropdown-item.remove').on('click',function(){
			var id =$(this).data('id');
			
			$.post(site_url+'accounts/delete',{id:id},function(response){
				if(response=='ok'){
					new Noty({
					    text:'Party Account Deleted Successfully.',
					    type: 'success',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :2000,
					}).show();
					setTimeout(function(){location.reload();} , 2500);   
				}
				else{
					new Noty({
					    text: response,
					    type: 'error',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :3000,
					}).show();
				}
			});
		});
		// for account edit modal
		$('.Accounts').find('.dropdown-item.edit').on('click',function(){
			var id=$(this).data('id');
			$.get(site_url+'accounts/edit_modal/'+id,{},function(response){
				$('#edit').find('.modal-content').html(response);
				$('#edit').modal();
			});
		});
	/*
	*End of jQuery for Accounts 
	*/ 

	/*
	*jQuery for Categories
	*/ 

		// for adding categories
		$('form#add_category').on('submit',function(){
			var action=$(this).attr('action');
			$.post(action,$(this).serialize(),function(response){
				if (response=='ok') {
					new Noty({
					    text:'Category Added Successfully.',
					    type: 'success',
						layout: 'topRight',
						closeWith   : ['click','timeout'],
		                timeout     :2000,
					}).show();
					setTimeout(function(){location.href=site_url+'inventory'} , 2500);   
				}
				else{
					new Noty({
					    text: response,
					    type: 'error',
						layout: 'topRight',
						closeWith   : ['click','timeout'],
		                timeout     :3000,
					}).show();
				}
			});
			return false;
		});

	/*
	*End of jQuery For Categories
	*/ 



	/*
	*jQuery For Cylinders
	*/ 
		
		// to add new Cylinder list 
		$('form#add_cylinder').on('submit',function(){
			var action=$(this).attr('action');
			$.post(action,$(this).serialize(),function(response){
				if (response=='ok') {
					new Noty({
					    text:'Cylinder Added Successfully.',
					    type: 'success',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :2000,
					}).show();
					setTimeout(function(){location.reload();} , 2500);   
				}
				else{
					new Noty({
					    text: response,
					    type: 'error',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :3000,
					}).show();
				}
			});
			return false;
		});

		// to open edit model for cylinder
		$('.Cylinder').find('.widget-body').find('.edit').on('click',function(){
			var id=$(this).data('id');
			$.get(site_url+'/inventory/c_edit_modal/'+id,{},function(response){
				$('#edit_cylinder_modal').find('.modal-content').html(response);
				$('#edit_cylinder_modal').modal();
			});
		});

		// Cylinder Edit Form Submit
		$('#edit_cylinder_modal').on('submit','form',function(){
			var action=$(this).attr('action');
			$.post(action,$(this).serialize(),function(response){
				if (response=='ok') {
					new Noty({
					    text:'Cylinder Updated Successfully.',
					    type: 'success',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :2000,
					}).show();
					setTimeout(function(){location.reload();} , 2500);   
				}
				else{
					new Noty({
					    text: response,
					    type: 'error',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :3000,
					}).show();
				}
			});
			return false;
		});

		// to delete cylinder
		$('.Cylinder').find('a.delete').on('click',function(){
			var id =$(this).data('id');
			
			$.post(site_url+'inventory/delete_cylinder',{id:id},function(response){
				if(response=='ok'){
					new Noty({
					    text:'Cylinder Deleted Successfully.',
					    type: 'success',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :2000,
					}).show();
					setTimeout(function(){location.reload();} , 2500);   
				}
				else{
					new Noty({
					    text: response,
					    type: 'error',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :3000,
					}).show();
				}
			});
		});

		// to open cylinder edit modal
		$('.Cylinder').find('.widget-body').find('.edit').on('click',function(){
			var id=$(this).data('id');
			$.get(site_url+'/inventory/c_edit_modal/'+id,{},function(response){
				$('#edit_cylinder_modal').find('.modal-content').html(response);
				$('#edit_cylinder_modal').modal();
			});
		});

		// to submit cylinder edit modal
		$('#edit_cylinder_modal').on('submit','form',function(){
			var action=$(this).attr('action');
			$.post(action,$(this).serialize(),function(response){
				if (response=='ok') {
					new Noty({
					    text:'Cylinder Updated Successfully.',
					    type: 'success',
						layout: 'topRight',
						closeWith   : ['click','timeout'],
		                timeout     :2000,
					}).show();
					setTimeout(function(){location.reload();} , 2500);   
				}
				else{
					new Noty({
					    text: response,
					    type: 'error',
						layout: 'topRight',
						closeWith   : ['click','timeout'],
		                timeout     :3000,
					}).show();
				}
			});
			return false;
		});
	/*
	*End of jQuery for Cylinders
	*/ 

	/*
	*jQuery for Products
	*/
		// to add products
		$('form#add_product').on('submit',function(){
			var action=$(this).attr('action');
			$.post(action,$(this).serialize(),function(response){
				if (response=='ok') {
					new Noty({
					    text:'Product Added Successfully.',
					    type: 'success',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :2000,
					}).show();
					setTimeout(function(){location.href=site_url+'inventory/products'} , 2500);   
				}
				else{
					new Noty({
					    text: response,
					    type: 'error',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :3000,
					}).show();
				}
			});
			return false;
		});

		// to open product edit Modal
		$('.Products').find('.widget-body').find('.edit').on('click',function(){
			var id=$(this).data('id');
			$.get(site_url+'/inventory/p_edit_modal/'+id,{},function(response){
				$('#edit_product_modal').find('.modal-content').html(response);
				$('#edit_product_modal').modal();
			});
		});
		//to submit product edit modal
		$('#edit_product_modal').on('submit','form',function(){
			var action=$(this).attr('action');
			$.post(action,$(this).serialize(),function(response){
				if (response=='ok') {
					new Noty({
					    text:'Product Updated Successfully.',
					    type: 'success',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :2000,
					}).show();
					setTimeout(function(){location.reload();} , 2500);   
				}
				else{
					new Noty({
					    text: response,
					    type: 'error',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :3000,
					}).show();
				}
			});
			return false;
		});
	/*
	*End of jQuery for Products
	*/









	/*
	*jQuery for Customers
	*/ 
		// to add new customer
		$('form#add_customer').on('submit',function(){
			var action=$(this).attr('action');
			$.post(action,$(this).serialize(),function(response){
				if (response=='ok') {
					new Noty({
					    text:'Customer Added Successfully.',
					    type: 'success',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :2000,
					}).show();
					setTimeout(function(){location.reload();} , 2500);   
				}
				else{
					new Noty({
					    text: response,
					    type: 'error',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :3000,
					}).show();
				}
			});
			return false;
		});

		//to open modal to edit customer details
		$('.Customer').find('.widget-body').find('.edit').on('click',function(){
			var id=$(this).data('id');
			$.get(site_url+'/customer/customer_modal/'+id,{},function(response){
				$('#edit_customer_modal').find('.modal-content').html(response);
				$('#edit_customer_modal').modal();
			});
		});

		// to edit customer details
		$('#edit_customer_modal').on('submit','form',function(){
			var action=$(this).attr('action');
			$.post(action,$(this).serialize(),function(response){
				if (response=='ok') {
					new Noty({
					    text:'Customer Updated Successfully.',
					    type: 'success',
						layout: 'topRight',
						closeWith   : ['click','timeout'],
		                timeout     :2000,
					}).show();
					setTimeout(function(){location.reload();} , 2500);   
				}
				else{
					new Noty({
					    text: response,
					    type: 'error',
						layout: 'topRight',
						closeWith   : ['click','timeout'],
		                timeout     :3000,
					}).show();
				}
			});
			return false;
		});
	/*
	*End of jQuery for customers
	*/ 

	/*
	*jQuery for Sales
	*/ 
		$('.sales').find('#transaction_type').find('input[type=radio]').on('click',function(){
			var value=$(this).val();
			if(value=='cash'){
				$(this).closest('.form-horizontal').find('#cash').show(500);
				$(this).closest('.form-horizontal').find('#credit').hide(500);
			}else if( value=='credit'){
				$(this).closest('.form-horizontal').find('#cash').hide(500);
				$(this).closest('.form-horizontal').find('#credit').show(500);
			}else if(value=='both'){
				$(this).closest('.form-horizontal').find('#cash').show(500);
				$(this).closest('.form-horizontal').find('#credit').show(500);
			}
		});

		//to show the customer name as autocomplete
		$('#gas_sales,#product_sales').find('input[name="customer_name"]').on('keyup',function(){
			var value=$(this).val();
			if(value !=''){
				$.ajax({
					url:site_url+'sales/search_customer',
					method:"POST",
					data:{query:value},
					success:function(data){
						$('#customer_results').fadeIn();
						$('#customer_results').html(data);
					}
				})
			}else{
				var data='';
				$('#customer_results').fadeOut();
				$('#customer_results').html(data);
			}
			
		});

		//to insert selected customer details  in input fields 
		$('#customer_results').on('click','li',function(){
			var address=$(this).data('customer_address');
			var phone=$(this).data('customer_phone');
			var customer_id=$(this).data('customer_id');
			$('#gas_sales,#product_sales').find('input[name="customer_name"]').val($(this).text());
			$('#gas_sales,#product_sales').find('input[name="customer_address"]').val(address);
			$('#gas_sales,#product_sales').find('input[name="customer_phone"]').val(phone);
			$('#gas_sales,#product_sales').find('input[name="customer_id"]').val(customer_id);
			$('#customer_results').fadeOut();
		});

		//to show the product name as autocomplete
		$('#product_sales').find('input[name="product_name"]').on('keyup',function(){
			var value=$(this).val();
			if(value !=''){
				$.ajax({
					url:site_url+'sales/product_search',
					method:'POST',
					data:{query:value},
					success:function(data){
						$('#product_result').fadeIn();
						$('#product_result').html(data);
					}
				});
			}else{
				var data='';
				$('#product_result').fadeOut();
				$('#product_result').html(data);
			}
		});

		//to insert selected product details  in input fields 
		$('#product_result').on('click','li',function(){
			var product_id=$(this).data('product_id');
			$('#product_sales').find('input[name="product_name"]').val($(this).text());
			$('#product_sales').find('input[name="product_id"]').val(product_id);
			$('#product_result').fadeOut();
		});



		// for Adding Gas Sales ajaxs  
		$('form#gas_sales').on('submit',function(){
			var action=$(this).attr('action');
			$.post(action,$(this).serialize(),function(response){
				if (response=='ok') {
					new Noty({
					    text:'Sales Transaction Added Successfully.',
					    type: 'success',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :2000,
					}).show();
					setTimeout(function(){location.href=site_url+'sales'} , 2500);   
				}
				else{
					new Noty({
					    text: response,
					    type: 'error',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :3000,
					}).show();
				}
			});
			return false;
		});

		// for Adding Product Sales ajaxs  
		$('form#product_sales').on('submit',function(){
			var action=$(this).attr('action');
			$.post(action,$(this).serialize(),function(response){
				if (response=='ok') {
					new Noty({
					    text:'Product Sale Transaction Added Successfully.',
					    type: 'success',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :2000,
					}).show();
					setTimeout(function(){location.reload();} , 2500);   
				}
				else{
					new Noty({
					    text: response,
					    type: 'error',
	    				layout: 'topRight',
	    				closeWith   : ['click','timeout'],
	                    timeout     :3000,
					}).show();
				}
			});
			return false;
		});
	/*
	*End of jQuery for Sales
	*/ 


	// for Adding Due Customer Amount Received  
	$('form#amt_received').on('submit',function(){
		var action=$(this).attr('action');
		$.post(action,$(this).serialize(),function(response){
			if (response=='ok') {
				new Noty({
				    text:'Transaction Added Successfully.',
				    type: 'success',
    				layout: 'topRight',
    				closeWith   : ['click','timeout'],
                    timeout     :2000,
				}).show();
				setTimeout(function(){location.reload();} , 2500);
			}
			else{
				new Noty({
				    text: response,
				    type: 'error',
    				layout: 'topRight',
    				closeWith   : ['click','timeout'],
                    timeout     :3000,
				}).show();
			}
		});
		return false;
	});


});