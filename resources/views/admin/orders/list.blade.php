@extends('admin.layouts.master')
@section('title')
    Quản lý đơn đặt hàng
@endsection
@section('action')
    Danh sách
@endsection
@section('content')
    @include('admin.layouts.notify')
        <div class="form-group">
            <fieldset class="scheduler-border">
                <legend class="scheduler-border">Bộ lọc:</legend>
                <div class="row control-group">
                        <div class="col-sm-2 form-group">
                            <label for="">Lọc theo:</label>
                            <select class="filter" id="status" class="form-control" style="width:100% !important;">
                                <option value="" >Tất cả</option>
                                {{--<option value="1" @if(Request::get('status') == 1) selected @endif>Bán chạy nhất</option>--}}
                                {{--<option value="2" @if(Request::get('status') == 2) selected @endif>Bán ít nhất</option>--}}
                                {{--<option value="3" @if(Request::get('status') == 3) selected @endif>Sắp hết hàng</option>--}}
                                {{--<option value="4" @if(Request::get('status') == 4) selected @endif>Hết hàng</option>--}}
                            </select>
                        </div>

                </div>
            </fieldset>

        </div>

        <div id="content">
            @if($orders)
                {!! view('admin.ajax.components.orders',compact(['orders']))->render()  !!}
            @endif
        </div>

@include('admin.layouts.modal-del')
@endsection
@section("script")
    <script>
        function callAjax(){
            $.ajax({
                url : '{{route('orders.index')}}',
                type : 'GET',
                data : {

                },
                success:function(data){
                    $('#content').html(data.view);
                }
            });
        };

        $(document).ready(function(){
            $('.filter').on('change',function(){
               callAjax();
            });

        });
    </script>
@endsection
