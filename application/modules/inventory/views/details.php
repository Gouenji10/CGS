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
                        <li class="breadcrumb-item">Categories</li>
                        <li class="breadcrumb-item active"><?php echo $categories['name'];?></li>
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
                        <h4>All <?php echo $categories['name'];?> Product List</h4>    
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
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i=1;?>
                                <?php foreach($products as $product):?>
                                    <tr>
                                        <td><span class="text-primary"><?php echo $i;?></span></td>
                                        <td><?php echo $product->name;?></td>
                                        <td><?php echo $product->code;?></td>
                                        <td>
                                            <?php foreach ($categories as $key => $value):
                                               if($key==$product->category):
                                                    echo $value;
                                               endif;
                                            endforeach;?>
                                        </td>
                                        <td>Rs: <?php echo $product->cost;?></td>
                                        <td>Rs: <?php echo $product->selling;?></td>
                                        <td><?php echo $product->stock;?></td>
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

