<div class="default-sidebar">
    <!-- Begin Side Navbar -->
    <nav class="side-navbar box-scroll sidebar-scroll">
        <!-- Begin Main Navigation -->
        <ul class="list-unstyled">
            <li><a href="<?php echo base_url('welcome');?>"><i class="la la-columns"></i><span>Dashboard</span></a></li>
        </ul>
        <span class="heading">Sales Management</span>
        <ul class="list-unstyled">
            <li class=""><a href="<?php echo base_url('sales');?>"><i class="la la-fire"></i><span>Gas Sales</span></a></li>
            <li class=""><a href="<?php echo base_url('sales/products');?>"><i class="la la-shopping-cart"></i><span>Product Sales</span></a></li>
        </ul>
        <span class="heading">Customer Management</span>
        <ul class="list-unstyled">
            <li class=""><a href="<?php echo base_url('customer');?>"><i class="la la-users"></i><span>All Customers</span></a></li>
            <li class=""><a href="<?php echo base_url('customer/due');?>"><i class="la la-user-secret"></i><span>Due Customers</span></a></li>
        </ul>
        <span class="heading">Inventory Management</span>
        <ul class="list-unstyled">
            <li class=""><a href="<?php echo base_url('inventory');?>"><i class="la la-bars"></i><span>Categories</span></a></li>
            <li class=""><a href="<?php echo base_url('inventory/products');?>"><i class="la la-shopping-cart"></i><span>Products</span></a></li>
            <li class=""><a href="<?php echo base_url('inventory/cylinders');?>"><i class="la la-fire-extinguisher"></i><span>Cylinders</span></a></li>
        </ul>
        <span class="heading">Account Management</span>
        <ul class="list-unstyled">
            <li class=""><a href="<?php echo base_url('accounts');?>"><i class="la la-user-md"></i><span>Accounts</span></a></li>
        </ul>
        
        <!-- End Main Navigation -->
    </nav>
    <!-- End Side Navbar -->
</div>
<!-- End Left Sidebar -->