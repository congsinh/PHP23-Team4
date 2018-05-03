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
                <div class="col-sm-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thông tin khách hàng</h3>
                        </div>
                            <div class="box-body">
                                <div class="col-sm-4">
                                    <label for="name" class="col-sm-3 ">Tên</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="name" >
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="phone" class="col-sm-3 ">Số điện thoại</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="phone">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="address" class="col-sm-3 ">Địa chỉ</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="address">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="box box-success">
                        <div class="box-header with-border">
                            <h3 class="box-title">Thông tin đơn hàng</h3>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <label for="date" class="col-sm-3">Ngày đặt</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="date" >
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="status" class="col-sm-3">Tình trạng</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="status">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label for="note" class="col-sm-3 ">Ghi chú</label>
                                    <div class="col-sm-9">
                                        <textarea  class="form-control" id="note"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Lưu</button>
                <a href="{{redirect()->back()}}" class="btn btn-default">Quay lai</a>
            </div>
        </form>
    </div>
    <!-- Your code to create an instance of Fine Uploader and bind to the DOM/template
    ====================================================================== -->

@endsection
@section('script')
    <script>
        $(document).ready(function(){

        });
    </script>

@endsection




