@extends('admin.layouts.master')
@section('title')
    Đơn đặt hàng
@endsection
@section('action')
    Chi tiết
@endsection
@section('content')

    <div class="col-lg-12" style="padding-bottom:120px">
        @include('admin.layouts.notify')
        <form action="{{route('orders.store')}}" method="POST" class="form-horizontal">
            {{csrf_field()}}
            <div class="row">

                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Thông tin đơn hàng</h3>
                    </div>
                    <div class="box-body">
                        <div class="col-sm-5">
                            <div class=" form-group">
                                <label for="name" class="col-sm-3 pr-0 pt-5 ">Tên</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control none-style pl-0" id="name" value="{{$order->user->name}}">
                                </div>
                            </div>
                            <div class=" form-group">
                                <label for="phone" class="col-sm-3 pr-0 pt-5">Số điện thoại</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control none-style pl-0" id="phone" value="{{$order->user->phone}}">
                                </div>
                            </div>
                            <div class=" form-group">
                                <label for="address" class="col-sm-3 pr-0 pt-5">Địa chỉ</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control none-style pl-0" id="address" value="{{$order->user->address}}">
                                </div>
                            </div>
                            <div class=" form-group">
                                <label for="date" class="col-sm-3 pr-0 pt-5 ">Ngày đặt</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control none-style pl-0" id="date" value="{{$order->created_at}}">
                                </div>
                            </div>
                            <div class=" form-group">
                                <label for="status" class="col-sm-3 pr-0 ">Tình trạng</label>
                                <div class="col-sm-9">  
                                    <select name="status" id="status">
                                        @foreach($listStatus as $key => $status)
                                            <option value="{{ $key }}">{{ $status }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class=" form-group">
                                <label for="note" class="col-sm-3 pr-0 ">Ghi chú</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control none-style pl-0 " style="resize: none;" id="note">value="{!! $order->note  !!}"</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <table class="table table-bordered table-hover text-center">
                                <thead>
                                    <tr>
                                        <td>STT</td>
                                        <td>Sản phẩm</td>
                                        <td>Số lượng</td>
                                        <td>Giá</td>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($order->products as $key => $product)
                                    <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{$product->name}}</td>
                                        <td><input type="number" name="quantity" id="quantity" class='none-style' value="{{$product->pivot->quantity}}"/></td>
                                        <td>{{number_format($product->price)}} &nbsp;VNĐ</td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="3">Tổng tiền</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Lưu</button>
                <a href="{{ url()->previous() }}" class="btn btn-default">Quay lai</a>
            </div>
        </form>
    </div>
    <!-- Your code to create an instance of Fine Uploader and bind to the DOM/template
    ====================================================================== -->

@endsection
@section('script')
    <script>

        $(document).ready(function () {
            jQuery.fn.extend({
                autoHeight: function () {
                    function autoHeight_(element) {
                        return jQuery(element)
                            .css({ 'height': 'auto', 'overflow-y': 'hidden' })
                            .height(element.scrollHeight);
                    }
                    return this.each(function() {
                        autoHeight_(this).on('input', function() {
                            autoHeight_(this);
                        });
                    });
                }
            });
            $('textarea#note').autoHeight();
        });

    </script>

@endsection




