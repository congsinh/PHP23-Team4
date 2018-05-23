@extends('pages.layouts.master')
@section('style')
    <style>
        .thubmnail-recent h4 a{
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }
    </style>
@stop
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
                                <a href="{{ route('subcate-products', ['slug' => $product->category->slug ]) }}">{{ $product->category->name  }}</a>
                                <a href="">{{$product->name}}</a>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="product-images">
                                        <div class="product-main-img">
                                            <img src="@if($product->imageDetail->first()){{asset("uploads/images/products/" . $product->imageDetail->first()->image_detail)}} @endif"
                                                 alt="">
                                        </div>

                                        <div class="product-gallery text-center">
                                            @foreach($product->imageDetail as $key => $image)
                                                @if($key > 0)
                                                    <img src="{{asset("uploads/images/products/" . $image->image_detail)}}"
                                                         alt="">
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
                                        <form class="cart">
                                            <button class="add_to_cart_button tryMe"  value="{{ $product->id }}"  type="button">Thêm giỏ hàng</button>
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
                            <div class='row' role="tabpanel" id="description">
                                <p>{!! $product->description  !!}</p>
                            </div>
                            <div id="fb-root"></div>
                            <div id='fb-comments' class="fb-comments"
                                 data-href="https://developers.facebook.com/docs/plugins/comments#configurator"
                                 data-width="100%" data-numposts="5"></div>
                            <script>
                                (function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id)) return;
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0';
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));
                            </script>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-sidebar">
                            <h2 class="sidebar-title">Sản phẩm khác</h2>
                            @foreach($related as $product)
                                <div class="thubmnail-recent">
                                    <img src="@if($product->imageDetail->first()) {{asset("uploads/images/products/" . $product->imageDetail->first()->image_detail )}} @endif"
                                         class="recent-thumb" alt="">
                                    <h5><a href="">{{ $product->name }}</a></h5>
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
                                    <img src="@if($product->imageDetail->first()) {{asset("uploads/images/products/" . $product->imageDetail->first()->image_detail )}} @endif"
                                         class="recent-thumb" alt="">
                                    <h5><a href="">{{ $product->name }}</a></h5>
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
@section('script')
    <script>
        $(document).ready(function () {
            document.getElementById("fb-comments").setAttribute("data-href", window.location.href);
        });
    </script>
@endsection