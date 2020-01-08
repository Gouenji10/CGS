var site_url='http://localhost/cgs/';
$(document).ready(function(){
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
	
	// for Adding Cylinder ajax 
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
				setTimeout(function(){location.href=site_url+'inventory/cylinders'} , 2500);   
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

	// for adding Products
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

	// for adding Accounts
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
				setTimeout(function(){location.href=site_url+'accounts'} , 2500);   
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

	// date picker
	$('input[name="date"]').daterangepicker({
		singleDatePicker: true,
	});

	// for debit transaction
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

	// for Credit transaction
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

	// for Adding Customer
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

	//for Gas sales customer auto select
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

	// for product sales keyup ajax
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

	$('#product_result').on('click','li',function(){
		$('#product_sales').find('input[name="product_name"]').val($(this).text());
		$('#product_result').fadeOut();
	});

	// for Account Delete
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
	// for account edit ajax
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
				setTimeout(function(){location.href=site_url+'accounts'} , 2500);   
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

});