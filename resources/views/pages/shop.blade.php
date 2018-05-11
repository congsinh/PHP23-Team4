@extends('pages.layouts.master')
@section('style')
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <style>
        #toast-container > .toast {
            background-image: none !important;
        }

        #toast-container > .toast:before {
            position: fixed;
            font-family: FontAwesome;
            font-size: 24px;
            line-height: 18px;
            float: left;
            color: #FFF;
            padding-right: 0.5em;
            margin: auto 0.5em auto -1.5em;
        }
        #toast-container > .toast-warning:before {
            content: "\f003";
        }
        #toast-container > .toast-error:before {
            content: "\f001";
        }
        #toast-container > .toast-info:before {
            content: "\f005";
        }
        #toast-container > .toast-success:before {
            content: "\f002";
        }
        #toast-container{margin-top:60px}
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
                            <img class='image' src="@if($product->imageDetail()->first()) {{ asset('uploads/images/products/'.$product->imageDetail()->first()->image_detail) }} @endif" alt="">
                            <h4 class="pt-5 text-center"><a href="product/{{$product->id}}">{{$product->name}}</a></h4>
                            <div class="product-carousel-price pt-5">
                                <ins class="price">{{ number_format($product->price) }}đ</ins>
                            </div>
                            <div class="product-option-shop pt-5">
                                <button type="button" class="add_to_cart_button pull-left tryMe" value="{{$product->id}}">
                                    <i class="fa fa-shopping-cart"></i>&nbsp;Add cart
                                </button>
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
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $(function() {
                function Toast(type, css, msg) {
                    this.type = type;
                    this.css = css;
                    this.msg = msg;
                }
                var toasts = [
                    new Toast('info', 'toast-top-full-width', 'Bạn đã mua sản phẩm thành công'),
                ];

                toastr.options.positionClass = 'toast-top-full-width';
                toastr.options.extendedTimeOut = 0; //1000;
                toastr.options.timeOut = 1000;
                toastr.options.fadeOut = 250;
                toastr.options.fadeIn = 250;

                var i = 0;

                $('.tryMe').click(function () {
                    var id = $(this).val();
                    $.ajax({
                        type: 'GET',
                        url:'{{url('/buy-product')}}',
                        data: {id:id},
                        dataType:'json',
                        success:function(data){
                            var edit = '<div class="shopping-item" id="shopping-item">\n' +
                                '                    <a href="">Cart - <span class="cart-amunt">'+data[3]+' VND</span> <i class="fa fa-shopping-cart"></i> <span class="product-count"> '+data[2]+' </span></a>\n' +
                                '                </div>';


                            $("#shopping-item").replaceWith(edit);
                            // console.log(data);
                        },error: function (data) {
                            console.log('Error:', data);
                        }
                    })


                    delayToasts();
                });

                function delayToasts() {
                    if (i === toasts.length) { return; }
                    var delay = i === 0 ? 0 : 2100;
                    window.setTimeout(function () { showToast(); }, delay);

                    // re-enable the button
                    if (i === toasts.length-1) {
                        window.setTimeout(function () {
                            $('#tryMe').prop('disabled', false);
                            i = 0;
                        }, delay + 1000);
                    }
                }

                function showToast() {
                    var t = toasts[i];
                    toastr.options.positionClass = t.css;
                    toastr[t.type](t.msg);
                    i++;
                    delayToasts();
                }
            })
        });
    </script>
@endsection