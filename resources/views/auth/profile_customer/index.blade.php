@extends('pages.layouts.master')

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

        <div class="col-md-8 col-md-offset-2">
            <h2>Đơn hàng gần đây</h2>
            <table class="table table-hover">
                <tr>
                    <td>Đơn đặt hàng</td>
                    <td>Ngày đặt hàng</td>
                    <td> Sản phẩm  </td>
                    <td> Giá tiền  </td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    @stop