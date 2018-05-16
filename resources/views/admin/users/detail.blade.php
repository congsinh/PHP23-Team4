@extends('admin.layouts.master')
@section('title')
    Đơn đặt hàng
@endsection
@section('action')
    Chi tiết
@endsection
@section('content')
    <div class="" style="padding-bottom:120px">
            <div class="row">
                <div class="box box-info col-sm-6">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin thành viên: ( Mã: {{  $user->id }})</h3>
                    </div>
                    <div class="box-body">
                            <div class="col-sm-6">
                                <div class="row">
                                    <label for="name" class="col-sm-3 pr-0 pt-5 ">Tên</label>
                                    <div class="col-sm-9">
                                        <div>{{ $user->name}}</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="name" class="col-sm-3 pr-0 pt-5 ">Email</label>
                                    <div class="col-sm-9">
                                        <div>{{$user->email}}</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="phone" class="col-sm-3 pr-0 pt-5">Số điện thoại</label>
                                    <div class="col-sm-9">
                                        <div> {{ $user->phone }} </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <label for="date" class="col-sm-3 pr-0 pt-5 ">Ngày đăng ký</label>
                                    <div class="col-sm-9">
                                        {{$user->created_at}}
                                    </div>
                                </div>
                                <div class="row">
                                    <label for="address" class="col-sm-3 pr-0 pt-5">Địa chỉ</label>
                                    <div class="col-sm-9">
                                        {{ $user->address }}
                                    </div>
                                </div>

                            </div>
                    </div>
                </div>
                <div class="box box-success col-sm-6">
                    <div class="box-header with-border">
                        <h3 class="box-title">Lịch sử mua hàng</h3>
                    </div>
                    <div class="box-body">
                            <table class="table table-bordered table-hover text-center">
                                <thead>
                                <tr>
                                    <td>STT</td>
                                    <td>Mã đơn hàng</td>
                                    <td>Tổng tiền</td>
                                    <td>Tình trạng</td>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($user->orders as $key => $order)
                                    <tr >
                                        <td>{{$key + 1 }}</td>
                                        <td>
                                            <a href="{{ route('orders.edit',['id' => $order->id]) }}">{{ $order->id }}</a>
                                        </td>
                                        <td>
                                            {{ number_format($order->total_pay) }}&nbsp;VNĐ
                                        </td>
                                        <td>
                                            {!!  trans('labels.status-order.'.$order->status)  !!}
                                        </td>
                                    </tr>
                                @empty
                                    Bạn chưa có đơn hàng nào !
                                @endforelse
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <a href="{{ url()->previous() }}" class="btn btn-default">Quay lai</a>
            </div>
    </div>
@endsection



