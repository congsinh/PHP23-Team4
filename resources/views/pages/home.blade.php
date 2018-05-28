@extends('pages.layouts.master')
@section('style')
    <style>
        .button-hidden{
            background: transparent;
            border: none !important;
            font-size:0;
            outline:none;
        }
        .fix-font a{
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }
        .product-f-image{
            overflow: hidden;
        }
        .single-product-widget h2{
            font-family: "Times New Roman", serif;
        }
    </style>
@stop
@section('content')
    <div class="slider-area">
        <!-- Slider -->
        <div class="block-slider block-slider4">
            <ul class="" id="bxslider-home4">
                <li>
                    <img src="{{asset("img/h4-slide.png")}}" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            <span class="primary">iPhone 6 <strong>Plus</strong></span>
                        </h2>
                        <h4 class="caption subtitle">Dual SIM</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                </li>
                <li><img src="{{asset("img/h4-slide2.png")}}" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            by one, get one <span class="primary">50% <strong>off</strong></span>
                        </h2>
                        <h4 class="caption subtitle">school supplies & backpacks.*</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                </li>
                <li><img src="{{asset("img/h4-slide3.png")}}" alt="Slide">
                    <div class="caption-group">
                        <h2 class="caption title">
                            Apple <span class="primary">Store <strong>Ipod</strong></span>
                        </h2>
                        <h4 class="caption subtitle">Select Item</h4>
                        <a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
                    </div>
                </li>
                <li><img src="{{asset("img/h4-slide4.png")}}" alt="Slide">
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
                        <a  href="{{ route('category-products', ['category' => 'dien-thoai']) }}"><h2 class="section-title">ĐIỆN THOẠI HOT</h2></a>
                        <div class="product-carousel">
                            @foreach($products[0] as $item)
                                <div class="single-product">
                                    <div class="product-f-image mb-5">
                                        <img class='img-product' src="@if(!empty($item->imageDetail()->first())) {{ asset('uploads/images/products/'.$item->imageDetail->first()->image_detail)  }} @endif" alt="">
                                        <div class="product-hover">
                                            <button type="button" value="{{ $item->id }}" class="tryMe button-hidden"><a class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a></button>
                                            <a href="{{ route('product-detail',[ 'id' => $item->id ]) }}" class="view-details-link"><i class="fa fa-link"></i>Xem chi tiết</a>
                                        </div>
                                    </div>
                                    <h5 class="fix-font"><a href="{{ route('product-detail',[ 'id' => $item->id ]) }}" title="{{$item->name}}">{{$item->name}}</a></h5>
                                    <div class="product-carousel-price">
                                        <ins class="price">{{ number_format($item->price) }}đ</ins>
                                        <div class="pull-right">
                                            @if($item->quantity_store == 0)
                                                {!! trans('labels.status-product.2' ) !!}
                                            @else
                                                {!! trans('labels.status-product.1' ) !!}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="latest-product">
                        <a  href="{{ route('category-products', ['category' => 'laptop']) }}"><h2 class="section-title">Laptop HOT</h2></a>
                        <div class="product-carousel">
                            @foreach($products[1] as $item)
                                <div class="single-product">
                                    <div class="product-f-image mb-5">
                                        <img class='img-product' src="@if(!empty($item->imageDetail()->first())) {{ asset('uploads/images/products/'.$item->imageDetail->first()->image_detail)  }} @endif" alt="">
                                        <div class="product-hover">
                                            <button type="button" value="{{ $item->id }}" class="tryMe button-hidden"><a class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a></button>
                                            <a href="{{ route('product-detail',[ 'id' => $item->id ]) }}" class="view-details-link"><i class="fa fa-link"></i>Chi tiết</a>
                                        </div>
                                    </div>
                                    <h5 class="fix-font"><a href="{{ route('product-detail',[ 'id' => $item->id ]) }}" title="{{$item->name}}">{{$item->name}}</a></h5>
                                    <div class="product-carousel-price">
                                        <ins class="price">{{ number_format($item->price) }}đ</ins>
                                        <div class="pull-right">
                                            @if($item->quantity_store == 0)
                                                {!! trans('labels.status-product.2' ) !!}
                                            @else
                                                {!! trans('labels.status-product.1' ) !!}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="latest-product">
                        <a  href="{{ route('category-products', ['category' => 'phu-kien']) }}"><h2 class="section-title">Phụ Kiện HOT</h2></a>
                        <div class="product-carousel">
                            @foreach($products[2] as $item)
                                <div class="single-product">
                                    <div class="product-f-image mb-5">
                                        <img class='img-product' src="@if(!empty($item->imageDetail()->first())) {{ asset('uploads/images/products/'.$item->imageDetail->first()->image_detail)  }} @endif" alt="">
                                        <div class="product-hover">
                                            <button type="button" value="{{ $item->id }}" class="tryMe button-hidden"><a class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>Thêm giỏ hàng</a></button>
                                            <a href="{{ route('product-detail',[ 'id' => $item->id ]) }}" class="view-details-link"><i class="fa fa-link"></i>Chi tiết</a>
                                        </div>
                                    </div>
                                    <h5 class="fix-font"><a href="{{ route('product-detail',[ 'id' => $item->id ]) }}" title="{{$item->name}}">{{$item->name}}</a></h5>
                                    <div class="product-carousel-price">
                                        <ins class="price">{{ number_format($item->price) }}đ</ins>
                                        <div class="pull-right">
                                            @if($item->quantity_store == 0)
                                                {!! trans('labels.status-product.2' ) !!}
                                            @else
                                                {!! trans('labels.status-product.1' ) !!}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
                            <img src="{{asset("img/brand1.png")}}" alt="">
                            <img src="{{asset("img/brand2.png")}}" alt="">
                            <img src="{{asset("img/brand3.png")}}" alt="">
                            <img src="{{asset("img/brand4.png")}}" alt="">
                            <img src="{{asset("img/brand5.png")}}" alt="">
                            <img src="{{asset("img/brand6.png")}}" alt="">
                            <img src="{{asset("img/brand1.png")}}" alt="">
                            <img src="{{asset("img/brand2.png")}}" alt="">
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
                        <h2 class="product-wid-title">Bán chạy nhất</h2>
                        <a href="" class="wid-view-more">Xem tất cả</a>
                        @foreach($new_products as $new)
                            <div class="single-wid-product">
                                <a href="{{ route('product-detail',[ 'id' => $new->id ]) }}"><img src="@if(!empty($new->imageDetail()->first())) {{ asset('uploads/images/products/'.$new->imageDetail->first()->image_detail)  }} @endif" alt="" class="product-thumb"></a>
                                <h2 class="fix-font"><a href="{{ route('product-detail',[ 'id' => $new->id ]) }}" title="{{$new->name}}">{{$new->name}}</a></h2>
                                <div class="product-wid-price">
                                    <ins>{{number_format($new->price,0)}} VND</ins>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">Xem tất cả</a>
                        @foreach($recently as $value)
                        <div class="single-wid-product">
                            <a href="{{ route('product-detail',[ 'id' => $value->id ]) }}"><img src="@if(!empty($value->imageDetail()->first())) {{ asset('uploads/images/products/'.$value->imageDetail->first()->image_detail)  }} @endif" alt="" class="product-thumb"></a>
                            <h2 class="fix-font"><a href="{{ route('product-detail',[ 'id' => $value->id ]) }}">{{$value->name}}</a></h2>
                            <div class="product-wid-price">
                                <ins>{{number_format($value->price,0)}} VND</ins>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Sản phẩm mới</h2>
                        <a href="#" class="wid-view-more">Xem tất cả</a>

                        @foreach($news as $new)
                            <div class="single-wid-product">
                                <a href="{{ route('product-detail',[ 'id' => $new->id ]) }}"><img src="@if(!empty($new->imageDetail()->first())) {{ asset('uploads/images/products/'.$new->imageDetail->first()->image_detail)  }} @endif" alt="" class="product-thumb"></a>
                                <h2 class="fix-font"><a href="{{ route('product-detail',[ 'id' => $new->id ]) }}" title="{{$new->name}}">{{$new->name}}</a></h2>
                                <div class="product-wid-price">
                                    <ins>{{number_format($new->price,0)}} VND</ins>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
@endsection