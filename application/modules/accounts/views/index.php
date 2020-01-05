<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Account Management</h2>
                <div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                        <li class="breadcrumb-item">Account Management</li>
                        <li class="breadcrumb-item active">Stores</li>
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
                        <h4>All Stores</h4>    
                    </div>
                    <div class="col-lg-6">
                        <button type="button" class="btn btn-gradient-01 pull-right" data-toggle="modal" data-target="#account"><i class="la la-plus-circle"></i>Add Store</button>
                    </div>
                </div>
                <div class="widget-body row">

                    <?php foreach($accounts as $account):?>
                    <div class="col-xl-4 col-md-4 col-sm-6 col-remove">
                        <!-- Begin Card -->
                        <div class="widget-image has-shadow">
                            <div class="group-card">
                                <!-- Begin Widget Body -->
                                <div class="widget-body">
                                    <div class="quick-actions">
                                        <div class="dropdown">
                                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                                <i class="la la-circle-o-notch"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a href="#" class="dropdown-item remove"> 
                                                    <i class="la la-trash"></i>Delete
                                                </a>
                                                <a href="#" class="dropdown-item"> 
                                                    <i class="la la-edit"></i>Edit
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="cover-image mx-auto">
                                        <img src="<?php echo img('group/01.jpg',true);?>" alt="..." class="rounded-circle mx-auto">
                                    </div>
                                    <h4 class="name"><a href="<?php echo base_url('accounts/details/'.$account->id);?>"><?php echo $account->name;?></a></h4>
                                    <div class="category"><?php echo $account->address;?></div>
                                    <div class="category"><?php echo $account->phone;?></div>
                                </div>
                                <!-- End Widget Body -->
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                <?php endforeach;?>
                </div>
            </div>
            <!-- End Hover -->
        </div>
    </div>
    <!-- End Row -->
</div>

<!-- Begin Large Modal -->
<div id="account" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Party</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <form action="<?php echo base_url('accounts');?>" id="add_accounts">
                <div class="modal-body px-5">
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Party Name</label>
                        <div class="col-lg-9">
                            <?php echo form_input(['type'=>'text','placeholder'=>'Party Name','class'=>'form-control','name'=>'party_name']);?>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Party Address</label>
                        <div class="col-lg-9">
                            <?php echo form_input(['type'=>'text','placeholder'=>'Party Address','class'=>'form-control','name'=>'party_address']);?>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Party Phone</label>
                        <div class="col-lg-9">
                            <?php echo form_input(['type'=>'text','placeholder'=>'Party Phone Number','class'=>'form-control','name'=>'party_phone']);?>
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