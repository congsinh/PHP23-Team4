@extends('pages.layouts.master')
@section('style')
    <style>
        .plus{background:#5a88ca;border:none;width:23px}
        .button-delete{
            border:0;
            outline:none;
        }
    </style>
    <style href="{{asset('css/bootstrap-confirm-delete.css')}}"></style>
    @stop
@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
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
                                            <tr class="cart_item">
                                                <td class="product-remove">
                                                    <button title="Remove this item" class="demo button-delete" value="{{$cart->rowId}}">×</button>
                                                </td>

                                                <td class="product-thumbnail">
                                                    <a href="single_product.blade.php"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="{{asset('uploads/images/products/'.$cart->options['image']->image_detail)}}"></a>
                                                </td>

                                                <td class="product-name">
                                                    <a href="single_product.blade.php">{{$cart->name}}</a>
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
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="name"> Họ tên Khách hàng</label>
                                                    <input type="text" class="form-control" name="name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name"> Số điện thoại </label>
                                                    <input type="text" class="form-control" name="phone">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name"> Địa chỉ </label>
                                                    <input type="text" class="form-control" name="address">
                                                </div>
                                                <div class="form-group">
                                                    <label for="name"> Lời nhắn khách hàng </label>
                                                    <textarea class="form-control" name="note" id="" cols="30" rows="5"></textarea>
                                                </div>
                                                <input type="submit" value="Checkout" name="proceed" class="checkout-button button alt wc-forward">
                                            </form>
                                        </div>
                                    </div>

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

@endsection


@section('script')
    <script src="{{asset('js/number.js')}}"></script>
    <script src="{{asset('js/bootstrap-confirm-delete.js')}}"></script>
    <script>
        $(document).ready(function(){
            $("body").on('click','.cart-tang',function(e){
                // e.preventDefault();
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



            $('.demo').bootstrap_confirm_delete({
                heading: 'Delete',
                message: 'Are you sure you want to delete this item?'

            }).on('click','.demo',function () {
                console.log('dsadas')
            })
            {{--$('body').on('click','.demo',function () {--}}
                {{--var id = $(this).val();--}}
                {{--$.ajax({--}}
                    {{--type: 'DELETE',--}}
                    {{--url:'{{url('remove-cart')}}',--}}
                    {{--data: {id:id},--}}
                    {{--dataType:'json',--}}
                    {{--success:function(data){--}}
                        {{--console.log(data);--}}

                    {{--},error: function (data) {--}}
                        {{--console.log('Error:', data);--}}
                    {{--}--}}
                {{--})--}}
            {{--})--}}
        })
    </script>
    @stop