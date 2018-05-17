<?php $__env->startSection('style'); ?>
    <style>
        .button-hidden{
            background: transparent;
            border: none !important;
            font-size:0;
        }
    </style>
    <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="slider-area">
        <!-- Slider -->
        <div class="block-slider block-slider4">
            <ul class="" id="bxslider-home4">
                <li>
                    <img src="<?php echo e(asset("img/h4-slide.png")); ?>" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                             <span class="primary">iPhone 6 <strong>Plus</strong></span>
                        </h2>
                        <h4 class="caption subtitle">Dual SIM</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                </li>
                <li><img src="<?php echo e(asset("img/h4-slide2.png")); ?>" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            by one, get one <span class="primary">50% <strong>off</strong></span>
                        </h2>
                        <h4 class="caption subtitle">school supplies & backpacks.*</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                </li>
                <li><img src="<?php echo e(asset("img/h4-slide3.png")); ?>" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            Apple <span class="primary">Store <strong>Ipod</strong></span>
                        </h2>
                        <h4 class="caption subtitle">Select Item</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                </li>
                <li><img src="<?php echo e(asset("img/h4-slide4.png")); ?>" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            Apple <span class="primary">Store <strong>Ipod</strong></span>
                        </h2>
                        <h4 class="caption subtitle">& Phone</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- ./Slider -->
    </div> <!-- End slider area -->

    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 ngày đổi trả</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Miễn phí giao hàng</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Thanh toán bảo mật</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>Khuyến mãi hấp dẫn</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->

    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">ĐIỆN THOẠI HOT</h2>
                        <div class="product-carousel">
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $items): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="single-product">
                                        <div class="product-f-image mb-5">
                                            <img class='img-product' src="<?php if(!empty($item->imageDetail()->first())): ?> <?php echo e(asset('uploads/images/products/'.$item->imageDetail->first()->image_detail)); ?> <?php endif; ?>" alt="">
                                            <div class="product-hover">
                                                <button type="button" value="<?php echo e($item->id); ?>" class="tryMe button-hidden"><a class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a></button>
                                                <a href="<?php echo e(route('product-detail',[ 'id' => $item->id ])); ?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                            </div>
                                        </div>
                                        <h5><a href="<?php echo e(route('product-detail',[ 'id' => $item->id ])); ?>"><?php echo e($item->name); ?></a></h5>
                                        <div class="product-carousel-price">
                                            <ins class="price"><?php echo e(number_format($item->price)); ?>đ</ins>
                                            <div class="pull-right">
                                                <?php if($item->quantity_store == 0): ?>
                                                    <?php echo trans('labels.status-product.2' ); ?>

                                                <?php else: ?>
                                                    <?php echo trans('labels.status-product.1' ); ?>

                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End main content area -->

    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="<?php echo e(asset("img/brand1.png")); ?>" alt="">
                            <img src="<?php echo e(asset("img/brand2.png")); ?>" alt="">
                            <img src="<?php echo e(asset("img/brand3.png")); ?>" alt="">
                            <img src="<?php echo e(asset("img/brand4.png")); ?>" alt="">
                            <img src="<?php echo e(asset("img/brand5.png")); ?>" alt="">
                            <img src="<?php echo e(asset("img/brand6.png")); ?>" alt="">
                            <img src="<?php echo e(asset("img/brand1.png")); ?>" alt="">
                            <img src="<?php echo e(asset("img/brand2.png")); ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->

    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <?php
                            $new_products = \App\Models\Product::all()->sortByDesc('sales')->take(3);
                        ?>
                        <?php $__currentLoopData = $new_products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single-wid-product">
                                <a href="single_product.blade.php"><img src="<?php if(!empty($new->imageDetail->first())): ?> <?php echo e(asset('uploads/images/products/'.$new->imageDetail->first())); ?> <?php endif; ?>" alt="" class="product-thumb"></a>
                                <h2><a href="single_product.blade.php"><?php echo e($new->name); ?></a></h2>
                                <div class="product-wid-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <div class="product-wid-price">
                                    <ins>$400.00</ins> <del>$425.00</del>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single_product.blade.php"><img src="<?php echo e(asset("img/product-thumb-4.jpg")); ?>" alt="" class="product-thumb"></a>
                            <h2><a href="single_product.blade.php">Sony playstation microsoft</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="single_product.blade.php"><img src="<?php echo e(asset("img/product-thumb-1.jpg")); ?>" alt="" class="product-thumb"></a>
                            <h2><a href="single_product.blade.php">Sony Smart Air Condtion</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <div class="single-wid-product">
                            <a href="single_product.blade.php"><img src="<?php echo e(asset("img/product-thumb-2.jpg")); ?>" alt="" class="product-thumb"></a>
                            <h2><a href="single_product.blade.php">Samsung gallaxy note 4</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="#" class="wid-view-more">View All</a>

                        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="single-wid-product">
                            <a href="single_product.blade.php"><img src="<?php if(!empty($new->imageDetail->first())): ?> <?php echo e(asset('uploads/images/products/'.$new->imageDetail->first())); ?> <?php endif; ?>" alt="" class="product-thumb"></a>
                            <h2><a href="single_product.blade.php"><?php echo e($new->name); ?></a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('pages.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>