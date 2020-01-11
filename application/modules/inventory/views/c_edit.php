<div class="modal-header">
    <h4 class="modal-title">Edit Cylinder</h4>
    <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">×</span>
        <span class="sr-only">close</span>
    </button>
</div>
<form action="<?php echo base_url('inventory/cylinder_edit/'.$id);?>" id="edit_cylinder_form">
    <div class="modal-body px-5">
        <div class="form-group row d-flex align-items-center mb-5">
            <label class="col-lg-3 form-control-label">Cylinder Name</label>
            <div class="col-lg-9">
                <?php echo form_input(['type'=>'text','placeholder'=>'Cylinder Name','class'=>'form-control','name'=>'cylinder_name','value'=>$name]);?>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Save">
    </div>
</form>