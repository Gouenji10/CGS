<div class="container-fluid">
    <!-- Begin Page Header-->
    <div class="row">
        <div class="page-header">
            <div class="d-flex align-items-center">
                <h2 class="page-header-title">Account Management</h2>
                <div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="db-default.html"><i class="ti ti-home"></i></a></li>
                        <li class="breadcrumb-item">Customer Management</li>
                        <li class="breadcrumb-item active"><?php echo $customer['name'];?></li>
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
                        <h4><?php echo $customer['name'];?></h4>    
                    </div>
                    <div class="col-lg-6">
                        <button type="button" class="btn btn-gradient-02 pull-right ml-2" data-toggle="modal" data-target="#credit"><i class="la la-plus-circle"></i>Add Received Amount</button>
                    </div>
                </div>
                <div class="widget-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Details</th>
                                    <th>In Cylinder</th>
                                    <th>Out Cylinder</th>
                                    <th>Cash Amount</th>
                                    <th>Credit Amount</th>
                                    <th>Credit Balance</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($due_data as $due):?>
                                    <tr>
                                        <td><?php echo $due->sales_date;?></td>
                                        <td>
                                            <?php 
                                                if($due->sales_type=='gas_sales'){
                                                    echo 'Gas Refill';
                                                }elseif($due->sales_type=='cash_received'){
                                                    echo 'Cash Received';
                                                }else{
                                                    echo 'Product Details here';
                                                }
                                                ?>
                                                
                                        </td>
                                        <td>
                                            <?php
                                                if($due->incoming==''){
                                                    echo'--';
                                                }elseif($due->incoming=='0'){
                                                    echo "Not Received";
                                                } 
                                                
                                                foreach ($cylinders as $key => $value) {
                                                    if($key==$due->incoming){
                                                        echo $value;
                                                    }
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                if($due->outgoing==''){
                                                    echo "--";
                                                }elseif($due->outgoing=='0'){
                                                    echo "Not Sent";
                                                }
                                                foreach ($cylinders as $key => $value) {
                                                    if($key==$due->outgoing){
                                                        echo $value;
                                                    }
                                                }
                                            ?>
                                        </td>
                                        <td><?php echo $due->cash=='0'?'--':'Rs: '.$due->cash;?></td>
                                        <td><?php echo $due->credit=='0'?'--':'Rs: '.$due->credit;?></td>
                                        <td><?php echo $due->balance=='0'?'--':'Rs: '.$due->balance;?></td>
                                        <td>
                                            <?php 
                                                if($due->sales_type=='gas_sales'){
                                                     if($due->incoming=='0'){
                                                        echo '<span class="badge-text badge-text-small danger">Pending</span>';
                                                    }else{
                                                        echo'<span class="badge-text badge-text-small info">Received</span>';
                                                    }   
                                                }
                                            ?>
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
<div id="credit" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Received Amount</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">close</span>
                </button>
            </div>
            <?php echo form_open('customer/due_details/'.$customer['id'],array('id'=>'amt_received'));?>
                <div class="modal-body mx-5">
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Transaction Date</label>
                        <div class="col-lg-9">
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="date" name="date" placeholder="Select value">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Transaction Details</label>
                        <div class="col-lg-9">
                            <?php echo form_input(['type'=>'text','placeholder'=>'Transaction Details','class'=>'form-control','name'=>'transaction_details']);?>
                        </div>
                    </div>
                    <div class="form-group row d-flex align-items-center mb-5">
                        <label class="col-lg-3 form-control-label">Amount Received</label>
                        <div class="col-lg-9">
                            <?php echo form_input(['type'=>'text','placeholder'=>'Amount','class'=>'form-control','name'=>'amount']);?>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="Save">
                </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>
<!-- End Large Modal -->