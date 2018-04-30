<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Admin</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header active"><h4>Menu</h4></li>
            <li  class="" >
                <a href="<?php echo e(route('category.index')); ?>"><i class="fa fa-link"></i> <span>Danh mục</span></a>
            </li>
            <li  class="" >
                <a href="<?php echo e(route('products.index')); ?>"><i class="fa fa-link"></i> <span>Sản phẩm</span></a>
            </li>
            <li  class="" >
                <a href="#"><i class="fa fa-link"></i> <span>Đơn hàng</span></a>
            </li>
            <li  class="" >
                <a href="<?php echo e(route('manufacturer.index')); ?>"><i class="fa fa-link"></i> <span>Đối tác</span></a>
            </li>
            
                
                    
                
              
                
                
                    
                    
                
            
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
