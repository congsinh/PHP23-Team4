@extends('pages.layouts.master')
@section('style')
    <style>
        .plus{background:#5a88ca;border:none;width:23px}
        .button-delete{
            border:0;
            outline:none;
        }
        .invalid-feedback{color:red}
        .shopping-item{
            position: relative;
        }
    </style>
    @stop
@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        @if(Session::has('flash_message'))
                            <h2>{{ Session::get('flash_message') }}</h2>
                        @else
                        <h2>Shopping Cart</h2>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <form method="post" action="#">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                    <tr>
                                        <th class="product-remove">&nbsp;</th>
                                        <th class="product-thumbnail">&nbsp;</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(Cart::count() > 0)
                                        @foreach($carts as $cart)
                                            <tr class="cart_item" id="delete-{{$cart->rowId}}">
                                                <td class="product-remove">
                                                    <button class="demo button-delete" value="{{$cart->rowId}}" >×</button>
                                                </td>

                                                <td class="product-thumbnail">
                                                    <a href="single_product.blade.php">
                                                        <img width="145" height="145"
                                                             alt="poster_1_up"
                                                             class="shop_thumbnail"
                                                             src="@if(!empty($cart->options['image'])){{asset('uploads/images/products/'.$cart->options['image']->image_detail)}} @endif">
                                                    </a>
                                                </td>

                                                <td class="product-name">
                                                    <a>{{$cart->name}}</a>
                                                </td>

                                                <td class="product-price">
                                                    <span class="amount">{{number_format($cart->price,0)}} VND</span>
                                                </td>

                                                <td class="product-quantity">
                                                    <div class="quantity buttons_added" id="change-{{$cart->rowId}}">
                                                        <button type="button" class="plus cart-giam"  value="{{$cart->rowId}}"> - </button>
                                                        <input type="number" size="4" class="input-text qty text" title="Qty" value="{{$cart->qty}}" min="1" step="1">
                                                        <button type="button" class="plus cart-tang" value="{{$cart->rowId}}" > + </button>
                                                    </div>
                                                </td>

                                                <td class="product-subtotal" id="total-{{$cart->rowId}}">
                                                    <span class="amount">{{ number_format($cart->qty * $cart->price,0) }} VND </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr class="text-center">
                                            <td colspan="6">  Bạn chưa mua sản phẩm nào </td>
                                        </tr>
                                    @endif
                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">

                                <div class="cross-sells woocommerce">
                                    <h2>Check Out</h2>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <form action="{{url('/check-out')}}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="name"> Họ tên Khách hàng</label>
                                                    <input type="text" class="form-control" name="name">
                                                    @if ($errors->has('name'))
                                                        <span>
                                                            <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label for="name"> Số điện thoại </label>
                                                    <input type="text" class="form-control" name="phone">
                                                    @if ($errors->has('phone'))
                                                        <span>
                                                            <strong class="invalid-feedback">{{ $errors->first('phone') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label for="name"> Địa chỉ </label>
                                                    <input type="text" class="form-control" name="address">
                                                    @if ($errors->has('address'))
                                                        <span>
                                                            <strong class="invalid-feedback">{{ $errors->first('address') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label for="name"> Lời nhắn khách hàng </label>
                                                    <textarea class="form-control" name="note" id="" cols="30" rows="5"></textarea>
                                                </div>
                                                <input type="submit" value="Checkout" name="proceed" class="checkout-button button alt wc-forward">
                                            </form>
                                        </div>
                                    </div>
                                    <br>
                                </div>


                                <div class="cart_totals ">
                                    <h2>Cart Totals</h2>

                                    <table cellspacing="0">
                                        <tbody>
                                        <tr class="cart-subtotal" id="cart-count">
                                            <th>Tổng số hàng </th>
                                            <td><span class="amount">{{Cart::count()}} sản phẩm</span></td>
                                        </tr>

                                        <tr class="shipping">
                                            <th>Shipping and Handling</th>
                                            <td>Free Shipping</td>
                                        </tr>

                                        <tr class="order-total" id="order-total">
                                            <th>Tổng tiền</th>
                                            <td><strong><span class="amount">{{Cart::subtotal(0)}} VND</span></strong> </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Bạn có muốn xóa sản phẩm này không ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Đóng </button>
                    <button type="button" class="btn btn-danger" id="saveDelete" data-id="">Xóa sản phẩm</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

@endsection


@section('script')
    <script src="{{asset('js/number.js')}}"></script>
    <script>
        $(document).ready(function(){
            $("body").on('click','.cart-tang',function(e){
                e.preventDefault();
                var id = $(this).val();
                $.ajax({
                    type: 'GET',
                    url:'{{url('cart-tang')}}',
                    data: {id:id},
                    dataType:'json',
                    success:function(data){
                        console.log(data);
                        var edit = '<div class="quantity buttons_added" id="change-'+data[0].rowId+'">\n' +
                            '   <button type="button" class="plus cart-giam"  value="'+data[0].rowId+'"> - </button>\n' +
                            ' <input type="number" size="4" class="input-text qty text" title="Qty" value="'+data[0].qty+'" min="1" step="1">\n' +
                            '   <button type="button" class="plus cart-tang" value="'+data[0].rowId+'" > + </button>\n' +
                            '     </div>';

                        var total = '<td class="product-subtotal" id="total-'+data[0].rowId+'">\n' +
                            '       <span class="amount">'+ $.number(data[0].qty * data[0].price)+' VND </span>\n' +
                            '   </td>';



                        var cart = '<div class="shopping-item" id="shopping-item">\n' +
                            '                    <a href="">Cart - <span class="cart-amunt">'+data[1]+' VND</span> <i class="fa fa-shopping-cart"></i> <span class="product-count"> '+data[2]+' </span></a>\n' +
                            '                </div>';

                        var id_total = '<tr class="order-total" id="order-total">\n' +
                            '  <th>Tổng tiền</th>\n' +
                            ' <td><strong><span class="amount">'+data[1]+' VND</span></strong> </td>\n' +
                            '    </tr>';

                        var cart_count = '<tr class="cart-subtotal" id="cart-count">\n' +
                            '     <th>Tổng số hàng </th>\n' +
                            '  <td><span class="amount"> '+data[2]+' sản phẩm</span></td>\n' +
                            '    /tr>';

                        $("#cart-count").replaceWith(cart_count);
                        $("#order-total").replaceWith(id_total);
                        $("#shopping-item").replaceWith(cart);
                        $("#change-"+data[0].rowId).replaceWith(edit);
                        $("#total-"+data[0].rowId).replaceWith(total);
                    },error: function (data) {
                        console.log('Error:', data);
                    }
                })
            })

            $("body").on('click','.cart-giam',function(e){
                // e.preventDefault();
                var id = $(this).val();
                $.ajax({
                    type: 'GET',
                    url:'{{url('cart-giam')}}',
                    data: {id:id},
                    dataType:'json',
                    success:function(data){
                        console.log(data);
                        var edit = '<div class="quantity buttons_added" id="change-'+data[0].rowId+'">\n' +
                            '   <button type="button" class="plus cart-giam"  value="'+data[0].rowId+'"> - </button>\n' +
                            ' <input type="number" size="4" class="input-text qty text" title="Qty" value="'+data[0].qty+'" min="1" step="1">\n' +
                            '   <button type="button" class="plus cart-tang" value="'+data[0].rowId+'" > + </button>\n' +
                            '     </div>';

                        var total = '<td class="product-subtotal" id="total-'+data[0].rowId+'">\n' +
                            '       <span class="amount">'+ $.number(data[0].qty * data[0].price)+' VND </span>\n' +
                            '   </td>';



                        var cart = '<div class="shopping-item" id="shopping-item">\n' +
                            '                    <a href="">Cart - <span class="cart-amunt">'+data[1]+' VND</span> <i class="fa fa-shopping-cart"></i> <span class="product-count"> '+data[2]+' </span></a>\n' +
                            '                </div>';

                        var id_total = '<tr class="order-total" id="order-total">\n' +
                            '  <th>Tổng tiền</th>\n' +
                            ' <td><strong><span class="amount">'+data[1]+' VND</span></strong> </td>\n' +
                            '    </tr>';

                        var cart_count = '<tr class="cart-subtotal" id="cart-count">\n' +
                            '     <th>Tổng số hàng </th>\n' +
                            '  <td><span class="amount"> '+data[2]+' sản phẩm</span></td>\n' +
                            '    /tr>';

                        $("#cart-count").replaceWith(cart_count);
                        $("#order-total").replaceWith(id_total);
                        $("#shopping-item").replaceWith(cart);
                        $("#change-"+data[0].rowId).replaceWith(edit);
                        $("#total-"+data[0].rowId).replaceWith(total);
                    },error: function (data) {
                        console.log('Error:', data);
                    }
                })
            })

            $('.button-delete').on('click',function(e){
                e.preventDefault();
                $('#myModal').modal('show');
                var id = $(this).val();
                $('#saveDelete').attr('data-id',id);
            })

            $('#saveDelete').on('click',function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                var id = $(this).attr('data-id');
                $.ajax({
                    url: '{{url('/remove-cart')}}',
                    type:'GET',
                    data:{id:id},
                    dataType:'json',
                    success:function (data) {
                        var cart_count = '<tr class="cart-subtotal" id="cart-count">\n' +
                            '     <th>Tổng số hàng </th>\n' +
                            '  <td><span class="amount"> '+data[2]+' sản phẩm</span></td>\n' +
                            '    /tr>';


                        var id_total = '<tr class="order-total" id="order-total">\n' +
                            '  <th>Tổng tiền</th>\n' +
                            ' <td><strong><span class="amount">'+data[1]+' VND</span></strong> </td>\n' +
                            '    </tr>';

                        var cart = '<div class="shopping-item" id="shopping-item">\n' +
                            '                    <a href="">Cart - <span class="cart-amunt">'+data[1]+' VND</span> <i class="fa fa-shopping-cart"></i> <span class="product-count"> '+data[2]+' </span></a>\n' +
                            '                </div>';

                        $("#shopping-item").replaceWith(cart);
                        $("#order-total").replaceWith(id_total);
                        $("#cart-count").replaceWith(cart_count);
                        $('#delete-'+id+'').remove();
                        $('#myModal').modal('hide');
                    }
                })
            })


        })
    </script>
    @stop