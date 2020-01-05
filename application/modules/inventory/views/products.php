<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Inventory Management</h2>
                <div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                        <li class="breadcrumb-item">Inventory Management</li>
                        <li class="breadcrumb-item active">All Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Header -->
    <div class="row">
        <div class="col-xl-12">
            <!-- Hover -->
            <div class="widget has-shadow">
                <div class="widget-header bordered no-actions d-flex align-items-center">
                    <div class="col-lg-6">
                        <h4>All Products</h4>    
                    </div>
                    <div class="col-lg-6">
                        <button type="button" class="btn btn-gradient-01 pull-right" data-toggle="modal" data-target="#product"><i class="la la-plus-circle"></i>Add Products</button>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Product Name</th>
                                    <th>Product Code</th>
                                    <th>Category</th>
                                    <th>Cost Price</th>
                                    <th>Selling Price</th>
                                    <th>Stock</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($products as $product):?>
                                    <tr>
                                        <td><span class="text-primary"><?php echo $product->id;?></span></td>
                                        <td><?php echo $product->name;?></td>
                                        <td><?php echo $product->code;?></td>
                                        <td>
                                            <?php foreach ($categories as $key => $value):
                                               if($key==$product->category):
                                                    echo $value;
                                               endif;
                                            endforeach;?>
                                        </td>
                                        <td>रू <?php echo $product->cost;?></td>
                                        <td>रू <?php echo $product->selling;?></td>
                                        <td><?php echo $product->stock;?></td>
                                        <td class="td-actions">
                                            <a href="#"><i class="la la-edit edit"></i></a>
                                            <a href="#"><i class="la la-close delete"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- End Hover -->
        </div>
    </div>
    <!-- End Row -->
</div>

<!-- Begin Large Modal -->
<div id="product" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Product</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <form action="<?php echo base_url('inventory/products');?>" id="add_product">
                <div class="modal-body px-5">
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Product Name</label>
                        <div class="col-lg-9">
                            <?php echo form_input(['type'=>'text','placeholder'=>'Product Name','class'=>'form-control','name'=>'product_name']);?>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Product Code</label>
                        <div class="col-lg-9">
                            <?php echo form_input(['type'=>'text','placeholder'=>'Product Name','class'=>'form-control','name'=>'product_code']);?>
                        </div>
                    </div>
                    <div class="form-group row mb-5">
                        <label class="col-lg-3 form-control-label">Product Category</label>
                        <div class="col-lg-9 select mb-3">
                            <?php array_unshift($categories,"Select Category");?>
                            <?php echo form_dropdown('category',$categories,'',array('class'=>'custom-select form-control'));?>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Purchase Price</label>
                        <div class="col-lg-9">
                            <?php echo form_input(['type'=>'text','placeholder'=>'Product Purchase Price','class'=>'form-control','name'=>'product_purchase']);?>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Selling Price</label>
                        <div class="col-lg-9">
                            <?php echo form_input(['type'=>'text','placeholder'=>'Product Selling Price','class'=>'form-control','name'=>'product_selling']);?>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Product Stock</label>
                        <div class="col-lg-9">
                            <?php echo form_input(['type'=>'text','placeholder'=>'Product Selling Price','class'=>'form-control','name'=>'product_stock']);?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>
            </form>
            
        </div>
    </div>
</div>
<!-- End Large Modal -->