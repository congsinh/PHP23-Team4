<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
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
            <li class="header"><h4>Menu</h4></li>
            <li class="{{ Request::path() == 'admin/dashboard' ? 'active' : '' }}">
                <a href="{{route('dashboard')}}"> <i class="fa fa-dashboard"></i> <span>Thống kê</span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
            </li>
            <li  class="{{ Request::path() == 'admin/category' ? 'active' : '' }}" >
                <a href="{{route('category.index')}}"><i class="fa fa-th"></i> <span>Danh mục</span></a>
            </li>
            <li  class="{{ Request::path() == 'admin/products' ? 'active' : '' }}" >
                <a href="{{route('products.index')}}"><i class="fa fa-product-hunt"></i> <span>Sản phẩm</span></a>
            </li>
            <li class="{{ Request::path() == 'admin/orders' ? 'active' : '' }}" >
                <a href="{{route('orders.index')}}"><i class="fa fa-shopping-cart"></i> <span>Đơn hàng</span></a>
            </li>
            <li  class="{{ Request::path() == 'admin/manufacturer' ? 'active' : '' }}" >
                <a href="{{route('manufacturer.index')}}"><i class="fa fa-link"></i> <span>Nhà cung cấp</span></a>
            </li>
            <li  class="{{ Request::path() == 'admin/users' ? 'active' : '' }}" >
                <a href="{{route('users-index')}}"><i class="fa fa-user"></i> <span>Thành viên</span></a>
            </li>

            {{--<li class="treeview">--}}
                {{--<a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>--}}
                    {{--<span class="pull-right-container">--}}
                {{--<i class="fa fa-angle-left pull-right"></i>--}}
              {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="#">Link in level 2</a></li>--}}
                    {{--<li><a href="#">Link in level 2</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
