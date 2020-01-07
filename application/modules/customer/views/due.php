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
                        <li class="breadcrumb-item active">Due Customers</li>
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
                    <h4>Due Customers</h4>    
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
                                    <td><a href="<?php echo base_url('customer/due_details/'.$customer->id);?>"><?php echo $customer->name;?></a></td>
                                    <td><?php echo $customer->address;?></td>
                                    <td><?php echo $customer->phone;?></td>
                                    <td><span style="width:100px;"><?php echo $customer->status==1?'<span class="badge-text badge-text-small info">No Due</span>':'<span class="badge-text badge-text-small danger">Due</span>';?></span></td>
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