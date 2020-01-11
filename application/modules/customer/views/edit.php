<div class="modal-header">
    <h4 class="modal-title">Edit Customer</h4>
    <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">×</span>
        <span class="sr-only">close</span>
    </button>
</div>
<?php echo form_open('customer/customer_edit/'.$id,array('id'=>'edit_customer'));?>
    <div class="modal-body mx-5">
        <div class="form-group row d-flex align-items-center mb-5">
            <label class="col-lg-3 form-control-label">Customer Name</label>
            <div class="col-lg-9">
                <?php echo form_input(['type'=>'text','placeholder'=>'Customer Name','class'=>'form-control','name'=>'customer_name','value'=>$name]);?>
            </div>
        </div>
        <div class="form-group row d-flex align-items-center mb-5">
            <label class="col-lg-3 form-control-label">Customer Address</label>
            <div class="col-lg-9">
                <?php echo form_input(['type'=>'text','placeholder'=>'Customer Address','class'=>'form-control','name'=>'customer_address','value'=>$address]);?>
            </div>
        </div>
        <div class="form-group row d-flex align-items-center mb-5">
            <label class="col-lg-3 form-control-label">CustomerPhone</label>
            <div class="col-lg-9">
                <?php echo form_input(['type'=>'text','placeholder'=>'Customer Phone Number','class'=>'form-control','name'=>'customer_phone','value'=>$phone]);?>
            </div>
        </div>
        <div class="form-group row d-flex align-items-center mb-5">
            <label class="col-lg-3 form-control-label">Status</label>
            <div class="col-lg-9">
                <?php $statuss=array('Select Status','No Due','Due');?>
                <?php echo form_dropdown('status',$statuss,$status,array('class'=>'form-control'));?>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Save">
    </div>
<?php echo form_close(); ?>