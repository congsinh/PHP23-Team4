@extends('pages.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <img class="banner" src="{{asset('img/banner1.png')}}" width="50%"/>
                <img class="banner" src="{{asset('img/banner2.png')}}" width="50%"/>
            </div>
        </div>
        <div class="single-product-area">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="product-content-right">
                            <div class="product-breadcroumb">
                                <a href="">Trang chủ</a>
                                <a href="">{{ $product->category->name  }}</a>
                                <a href="">{{$product->name}}</a>
                            </div>

                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="product-images">
                                        <div class="product-main-img">
                                            <img src="{{asset("uploads/images/products/" . $product->imageDetail->first()->image_detail)}}" alt="">
                                        </div>

                                        <div class="product-gallery text-center">
                                            @foreach($product->imageDetail as $key => $image)
                                                @if($key > 0)
                                                    <img src="{{asset("uploads/images/products/" . $image->image_detail)}}" alt="">
                                                @endif
                                            @endforeach


                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="product-inner">
                                        <h2 class="product-name">{{$product->name}}</h2>
                                        <div class="product-inner-price">
                                            <ins style="font-size:20px">{{ number_format($product->price) }}đ</ins>
                                            <div class="pull-right">
                                                @if($product->quantity_store == 0)
                                                    {!! trans('labels.status-product.2' ) !!}
                                                @else
                                                    {!! trans('labels.status-product.1' ) !!}
                                                @endif
                                            </div>
                                        </div>

                                        <form action="" class="cart">
                                            <button class="add_to_cart_button" type="submit">Add to cart</button>
                                        </form>
                                        <div class="config">
                                            <h3 class="">Thông số kỹ thuật</h3>
                                            <ul class="parameter">
                                                @foreach($product->configuration as $key => $value)
                                                    <li class="g92_94_93">
                                                        <span>{{ $key }}</span>
                                                        <div>
                                                            {{ $value }}
                                                        </div>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class='row' role="tabpanel">
                                <p>{!! $product->description  !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-sidebar">
                            <h2 class="sidebar-title">Sản phẩm khác</h2>
                            @foreach($related as $product)
                                <div class="thubmnail-recent">
                                    <img src="{{asset("uploads/images/products/" . $product->imageDetail->first()->image_detail )}}" class="recent-thumb" alt="">
                                    <h2><a href="">{{ $product->name }}</a></h2>
                                    <div class="product-sidebar-price">
                                        <ins>{{ number_format( $product->price ) }}đ</ins>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="single-sidebar">
                            <h2 class="sidebar-title">Top mua nhiều nhất</h2>
                            @foreach($topsales as $product)
                                <div class="thubmnail-recent">
                                    <img src="{{asset("uploads/images/products/" . $product->imageDetail->first()->image_detail )}}" class="recent-thumb" alt="">
                                    <h2><a href="">{{ $product->name }}</a></h2>
                                    <div class="product-sidebar-price">
                                        <ins>{{ number_format( $product->price ) }}đ</ins>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection