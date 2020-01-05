<div class="modal-header">
    <h4 class="modal-title">Edit Party</h4>
    <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">×</span>
        <span class="sr-only">close</span>
    </button>
</div>
<?php echo form_open('accounts/edit/'.$id,array('id'=>'edit_accounts'));?>
    <div class="modal-body px-5">
        <div class="form-group row d-flex align-items-center mb-5">
            <label class="col-lg-3 form-control-label">Party Name</label>
            <div class="col-lg-9">
                <?php echo form_input(['type'=>'text','placeholder'=>'Party Name','class'=>'form-control','name'=>'party_name','value'=>$name]);?>
            </div>
        </div>
        <div class="form-group row d-flex align-items-center mb-5">
            <label class="col-lg-3 form-control-label">Party Address</label>
            <div class="col-lg-9">
                <?php echo form_input(['type'=>'text','placeholder'=>'Party Address','class'=>'form-control','name'=>'party_address','value'=>$address]);?>
            </div>
        </div>
        <div class="form-group row d-flex align-items-center mb-5">
            <label class="col-lg-3 form-control-label">Party Phone</label>
            <div class="col-lg-9">
                <?php echo form_input(['type'=>'text','placeholder'=>'Party Phone Number','class'=>'form-control','name'=>'party_phone','value'=>$phone]);?>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Save">
    </div>    
<?php echo form_close();?>