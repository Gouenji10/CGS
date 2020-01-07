<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Sales Management</h2>
                <div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">Sales Management</a></li>
                        <li class="breadcrumb-item active">Gas Sales</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <div class="row flex-row">
        <div class="col-12">
            <!-- Form -->
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <h4>Add Gas Sale</h4>
                </div>
                <div class="widget-body">
                	<?php echo form_open('sales','class="form-horizontal" id="gas_sales"');?>
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label">Customer Name</label>
                            <div class="col-lg-9">
                            	<?php echo form_input(['type'=>'text','placeholder'=>'Customer Name','class'=>'form-control','name'=>'customer_name','autocomplete'=>'off']);?>
                                <div id="customer_results"></div>
                            </div>
                        </div>
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label">Customer Address</label>
                            <div class="col-lg-9">
                                <?php echo form_input(['type'=>'text','placeholder'=>'Customer Address','class'=>'form-control','name'=>'customer_address','autocomplete'=>'off']);?>
                            </div>
                        </div>
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label">CustomerPhone</label>
                            <div class="col-lg-9">
                                <?php echo form_input(['type'=>'text','placeholder'=>'Customer Phone Number','class'=>'form-control','name'=>'customer_phone','autocomplete'=>'off']);?>
                            </div>
                        </div>
                        
                        <div class="form-group row mb-5">
                            <label class="col-lg-3 form-control-label">Incoming Cylinder</label>
                            <div class="col-lg-9 select mb-3">
                                <?php array_unshift($cylinders,"Select Cylinder");?>
                                <?php echo form_dropdown('incoming',$cylinders,'',array('class'=>'custom-select form-control'));?>
                            </div>
                        </div>
                        <div class="form-group row mb-5">
                            <label class="col-lg-3 form-control-label">Outgoing Cylinder</label>
                            <div class="col-lg-9 select mb-3">
                                <?php echo form_dropdown('outgoing',$cylinders,'',array('class'=>'custom-select form-control'));?>
                            </div>
                        </div>
                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label">Transaction Type</label>
                            <div class="col-sm-9" id="transaction_type">
                                <div class="mb-3">
                                    <div class="styled-radio">
                                        <input type="radio" name="transaction_type" id="rad-1" value="cash">
                                        <label for="rad-1">Cash</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="styled-radio">
                                        <input type="radio" name="transaction_type" id="rad-2" value="credit">
                                        <label for="rad-2">Credit</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="styled-radio">
                                        <input type="radio" name="transaction_type" id="rad-3" value="both">
                                        <label for="rad-3">Cash & Credit</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row align-items-center mb-5" id="cash"style="display: none">
                            <label class="col-lg-3 form-control-label">Cash Amount</label>
                            <div class="col-lg-9">
                                <?php echo form_input(['type'=>'text','placeholder'=>'Cash Amount','class'=>'form-control','name'=>'cash_amt']);?>
                            </div>
                        </div>
                        <div class="form-group row align-items-center mb-5" id="credit" style="display:none;">
                            <label class="col-lg-3 form-control-label">Credit Amount</label>
                            <div class="col-lg-9">
                                <?php echo form_input(['type'=>'text','placeholder'=>'Credit Amount','class'=>'form-control','name'=>'credit_amt']);?>
                            </div>
                        </div>

                        <div class="form-group row d-flex align-items-center mb-5">
                            <label class="col-lg-3 form-control-label"></label>
                            <div class="col-lg-9">
                                <?php echo form_input(['type'=>'hidden','name'=>'customer_id']);?>
                                <?php echo form_input(['type'=>'hidden','name'=>'sales_type','value'=>'gas_sales']);?>
                                <?php echo form_input(['type'=>'hidden','name'=>'date']);?>
                            	<?php echo form_input(['type'=>'submit','class'=>'btn c-btn btn-danger mr-1 mb-2 pull-right','value'=>'Submit']);?>
                            </div>
                        </div>
                    <?php echo form_close();?>
                </div>
            </div>
            <!-- End Form -->
        </div>
    </div>
    <!-- End Row -->
</div>