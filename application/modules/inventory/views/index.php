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
                        <li class="breadcrumb-item active">All Categories</li>
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
                        <h4>All Categories</h4>    
                    </div>
                    <div class="col-lg-6">
                        <button type="button" class="btn btn-gradient-01 pull-right" data-toggle="modal" data-target="#category"><i class="la la-plus-circle"></i>Add Category</button>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Category Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($categories as $category):?>
                                    <tr>
                                        <td><span class="text-primary"><?php echo $category->id;?></span></td>
                                        <td><a href="<?php echo base_url('inventory/details/'.$category->id);?>"><?php echo $category->name;?></a></td>
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
<div id="category" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Customer</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <form action="<?php echo base_url('inventory');?>" id="add_category">
                <div class="modal-body px-5">
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Category Name</label>
                        <div class="col-lg-9">
                            <?php echo form_input(['type'=>'text','placeholder'=>'Category Name','class'=>'form-control','name'=>'category_name']);?>
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