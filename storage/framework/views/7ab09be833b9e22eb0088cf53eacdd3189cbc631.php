<div class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="user-menu">
                    <ul>
                        <?php if(Auth::check() && Auth::user()->is_admin === 0 ): ?>
                            <li><a href="<?php echo e(url('/info',Auth::user()->id)); ?>"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>
                            <li><a href="<?php echo e(asset("page/cart.blade.php")); ?>"><i class="fa fa-user"></i> My Cart</a></li>
                            <li> <a>Xin chào <?php echo e(ucfirst(Auth::user()->name)); ?></a> </li>
                            <?php endif; ?>

                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="header-right">
                    <ul class="list-unstyled list-inline">
                        <?php if(Auth::check() && Auth::user()->is_admin === 0 ): ?>
                        <li class="dropdown dropdown-small">
                            <a class="dropdown-toggle" href="<?php echo e(URL::route('logout')); ?>"><span class="key  "> <i class="fa fa-power-off"></i> Đăng xuất</span></a>
                        </li>
                            <?php else: ?>
                            <li><a href="<?php echo e(url('/register')); ?>"><i class="fa fa-user"></i> Đăng kí </a></li>
                            <li><a href="<?php echo e(URL::route('get-login-user')); ?>"><i class="fa fa-user"></i> Login</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div> <!-- End header area -->

<div class="site-branding-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="logo">
                    <h1><a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset("img/logo.png")); ?>"></a></h1>
                </div>
            </div>
            <?php if(Auth::check() && Auth::user()->is_admin === 0 ): ?>
            <div class="col-sm-6">
                <div class="shopping-item">
                    <a href="">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                </div>
            </div>
                <?php endif; ?>
        </div>
    </div>
</div> <!-- End site branding area -->

<?php echo $__env->make('pages.layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>