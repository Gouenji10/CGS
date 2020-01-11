<div class="modal-header">
    <h4 class="modal-title">Edit Product</h4>
    <button type="button" class="close" data-dismiss="modal">
        <span aria-hidden="true">×</span>
        <span class="sr-only">close</span>
    </button>
</div>
<form action="<?php echo base_url('inventory/product_edit/'.$id);?>" id="add_product">
    <div class="modal-body px-5">
        <div class="form-group row d-flex align-items-center mb-5">
            <label class="col-lg-3 form-control-label">Product Name</label>
            <div class="col-lg-9">
                <?php echo form_input(['type'=>'text','placeholder'=>'Product Name','class'=>'form-control','name'=>'product_name','value'=>$name]);?>
            </div>
        </div>
        <div class="form-group row d-flex align-items-center mb-5">
            <label class="col-lg-3 form-control-label">Product Code</label>
            <div class="col-lg-9">
                <?php echo form_input(['type'=>'text','placeholder'=>'Product Name','class'=>'form-control','name'=>'product_code','value'=>$code]);?>
            </div>
        </div>
        <div class="form-group row mb-5">
            <label class="col-lg-3 form-control-label">Product Category</label>
            <div class="col-lg-9 select mb-3">
                <?php array_unshift($categories,"Select Category");?>
                <?php echo form_dropdown('category',$categories,$category,array('class'=>'custom-select form-control'));?>
            </div>
        </div>
        <div class="form-group row d-flex align-items-center mb-5">
            <label class="col-lg-3 form-control-label">Purchase Price</label>
            <div class="col-lg-9">
                <?php echo form_input(['type'=>'text','placeholder'=>'Product Purchase Price','class'=>'form-control','name'=>'product_purchase','value'=>$cost]);?>
            </div>
        </div>
        <div class="form-group row d-flex align-items-center mb-5">
            <label class="col-lg-3 form-control-label">Selling Price</label>
            <div class="col-lg-9">
                <?php echo form_input(['type'=>'text','placeholder'=>'Product Selling Price','class'=>'form-control','name'=>'product_selling','value'=>$selling]);?>
            </div>
        </div>
        <div class="form-group row d-flex align-items-center mb-5">
            <label class="col-lg-3 form-control-label">Product Stock</label>
            <div class="col-lg-9">
                <?php echo form_input(['type'=>'text','placeholder'=>'Product Selling Price','class'=>'form-control','name'=>'product_stock','value'=>$stock]);?>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Save">
    </div>
</form>