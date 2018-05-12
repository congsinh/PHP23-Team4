@extends('pages.layouts.master')
@section('style')
    <style>
        .button-huy{
            cursor: pointer;
        }
    </style>
    @stop
@section('content')
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Thông tin người dùng </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
            <div class="row">
                <div class="col-md-4">
                    <b> Tên </b>
                    <p> {{ ucfirst($user->name) }} </p>
                </div>

                <div class="col-md-4">
                    <b>  Email</b>
                    <p> {{$user->email}} </p>
                </div>

                <div class="col-md-4">
                    <b>  Số điện thoại </b>
                    <p> {{ $user->phone }} </p>
                </div>


                <div class="col-md-4">
                    <b>  Địa chỉ  </b>
                    <p> {{ $user->address }} </p>
                </div>

                <div class="col-md-4">
                    <b>  Thay đổi thông tin người dùng </b>
                    <p> <a href="{{ url('/info',Auth::user()->id) }}/edit" > Chỉnh sửa</a> </p>
                </div>

                <div class="col-md-4">
                    <b>  Thay đổi mật khẩu </b>
                    <p> <a href="{{ url('edit-password') }}" > Chỉnh sửa</a> </p>
                </div>

            </div>
            <br><br>
        </div>

        <div class="col-md-10 col-md-offset-1">
            <h2>Đơn hàng gần đây</h2>
            <table class="table table-hover">
                <tr>
                    <td> STT </td>
                    <td>Hình ảnh</td>
                    <td> Sản phẩm  </td>
                    <td>Ngày đặt hàng</td>
                    <td> Giá tiền  </td>
                    <td> Tình trạng  </td>
                    <td> Hủy đơn hàng  </td>
                </tr>
                @if($user->orders->count() > 0)
                @foreach($user->orders as $orders)
                    @foreach($orders->products as $Key => $product)
                            <tr>
                                <td> {{$index++}} </td>
                                <td>
                                    <img width="70px" src="{{ asset('uploads/images/products/'.$product->imageDetail()->first()->image_detail) }}" alt="">
                                </td>
                                <td>{{ $product->name }}</td>
                                <td> {{ Carbon\Carbon::createFromTimestamp(strtotime($product->created_at))->diffForHumans() }} </td>
                                <td>{{ number_format($product->price,0,',','.')}} VND</td>
                                <td>
                                    @if($orders->status === 1)
                                         <strong class="alert alert-info status-product">Chờ duyệt</strong>
                                        @elseif($orders->status === 2)
                                          <strong class="alert alert-warning status-product">Đang Ship</strong>
                                        @else
                                         <strong class="alert alert-success status-product">Chờ duyệt</strong>
                                        @endif
                                </td>
                                <td class="text-center">
                                    <a class="alert alert-danger status-product button-huy" href="{{ URL::route('delete-product-cart',[$orders->id,$product->id]) }}"> Hủy </a>
                                </td>
                            </tr>
                        @endforeach
                    @endforeach
                @else
                    <tr class="text-center">
                        <td colspan="4">Bạn chưa mua sản phẩm nào</td>
                    </tr>
                    @endif
            </table>
        </div>
    </div>
    <br>
    @stop