<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Customer Management</h2>
                <div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                        <li class="breadcrumb-item">Customer Management</li>
                        <li class="breadcrumb-item active">All Customers</li>
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
                        <h4>All Customers</h4>    
                    </div>
                    <div class="col-lg-6">
                        <button type="button" class="btn btn-gradient-01 pull-right" data-toggle="modal" data-target="#customer"><i class="la la-plus-circle"></i>Add Customer</button>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>SN</th>
                                    <th>Customer Name</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th><span style="width:100px;">Status</span></th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;?>
                                <?php foreach($customers as $customer):?>
                                <tr>
                                    <td><span class="text-primary"><?php echo $i;?></span></td>
                                    <td><a href="<?php echo base_url('customer/details/'.$customer->id);?>"><?php echo $customer->name;?></a></td>
                                    <td><?php echo $customer->address;?></td>
                                    <td><?php echo $customer->phone;?></td>
                                    <td>
                                        <span style="width:100px;">
                                            <?php 
                                            if($customer->status==1):
                                            echo '<span class="badge-text badge-text-small info">No Due</span>';
                                            elseif($customer->status==2):
                                                echo '<span class="badge-text badge-text-small danger">Due</span>';
                                            else:
                                                echo '<span class="badge-text badge-text-small info">new</span>';
                                            endif;
                                            ?>
                                            
                                        </span>
                                    </td>
                                    <td class="td-actions">
                                        <a href="#"><i class="la la-edit edit"></i></a>
                                        <a href="#"><i class="la la-close delete"></i></a>
                                    </td>
                                </tr>
                                <?php $i++;?>
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
<div id="customer" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Customer</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <?php echo form_open('',array('id'=>'add_customer'));?>
                <div class="modal-body mx-5">
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Customer Name</label>
                        <div class="col-lg-9">
                            <?php echo form_input(['type'=>'text','placeholder'=>'Customer Name','class'=>'form-control','name'=>'customer_name']);?>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Customer Address</label>
                        <div class="col-lg-9">
                            <?php echo form_input(['type'=>'text','placeholder'=>'Customer Address','class'=>'form-control','name'=>'customer_address']);?>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">CustomerPhone</label>
                        <div class="col-lg-9">
                            <?php echo form_input(['type'=>'text','placeholder'=>'Customer Phone Number','class'=>'form-control','name'=>'customer_phone']);?>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Status</label>
                        <div class="col-lg-9">
                            <?php $status=array('Select Status','No Due','Due');?>
                            <?php echo form_dropdown('status',$status,'',array('class'=>'form-control'));?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
<!-- End Large Modal -->