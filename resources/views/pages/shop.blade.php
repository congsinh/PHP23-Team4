@extends('pages.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <img class="banner" src="{{asset('img/banner1.png')}}" width="50%"/>
                <img class="banner" src="{{asset('img/banner2.png')}}" width="50%"/>
            </div>
        </div>
        <div class="pt-10">
            <ul class="filter">
                <li class="fmanu pull-left">
                    @foreach($cate->subcate as $subcates )
                        <a href="" class="prevent">{{ $subcates->name }}</a>
                    @endforeach

                </li>
                <li class="frange pull-right">
                    <a href="" class="prevent" data-id="7">
                        Dưới 1 triệu
                    </a>
                    <a href="" class="prevent" data-id="9">
                        Từ 1 - 3 triệu
                    </a>
                    <a href="" class="prevent" data-id="289">
                        Từ 3 - 5 triệu
                    </a>
                    <a href="" class="prevent" data-id="562">
                        Từ 5 - 10 triệu
                    </a>
                    <a href="" class="prevent" data-id="253">
                        Trên 10 triệu
                    </a>
                </li>
                <!--#endregion-->
            </ul>
        </div>
        <div class="pt-10">
            @foreach($products as $product)
                <div class="wp_product">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img class='image' src="{{asset("img/product-2.jpg")}}" alt="">
                            <h4 class="pt-5 text-center"><a href="">{{$product->name}}</a></h4>
                            <div class="product-carousel-price">
                                <ins style="color: #e10c00">{{ number_format($product->price) }}đ</ins>
                            </div>
                            <div class="product-option-shop pt-5">
                                <a class="add_to_cart_button pull-left" data-quantity="1" data-product_sku=""
                                   data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">
                                    <i class="fa fa-shopping-cart"></i>&nbsp;Add cart
                                </a>
                                <span class="pull-right"
                                      style="padding:15px 5px 0px 0px">Sales: {{ $product->sales }}</span>
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        <div class="row text-center">
            {{ $products->links() }}
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(document).ready(function () {

        });
    </script>
@endsection