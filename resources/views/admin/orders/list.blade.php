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
                        <label for="">Trạng thái:</label>
                        <select class="filter form-control select2 select2-hidden-accessible" id="status" class="form-control" style="width:100% !important;">
                            <option value="" >Tất cả</option>
                            @forelse($listStatus as $key => $status)
                                <option value="{{ $key }}" @if(Request::get('status') == $key) selected @endif>{{ $status }}</option>
                            @empty
                            @endforelse
                        </select>
                    </div>
                    <div class="col-sm-4 form-group">
                        <label for="">Thời gian:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="daterange" name="datarange">
                        </div>
                        {{--<label for="">Thời gian:</label>--}}
                        {{--<select class="filter" id="ago" class="form-control" style="width:100% !important;">--}}
                            {{--<option value="" >Tất cả</option>--}}
                            {{--<option value="hour" @if(Request::get('ago') == 'hour') selected @endif>Cách đây 1 giờ</option>--}}
                            {{--<option value="day" @if(Request::get('ago') == 'day') selected @endif>Cách đây 1 ngày</option>--}}
                            {{--<option value="week" @if(Request::get('ago') == 'week') selected @endif>Cách đây 1 tuần</option>--}}
                            {{--<option value="month" @if(Request::get('ago') == 'month') selected @endif>Cách đây 1 tháng</option>--}}
                        {{--</select>--}}
                    </div>
                    <div class="col-sm-4 form-group">
                        <label for="">Search:</label>
                        <input type="text" class="form-control" id="search" placeholder="Nhập từ khóa" value="@if(Request::get('search')) {{ Request::get('search') }} @endif"/>
                    </div>
                </div>
            </fieldset>
        </div>
        <div id="content">
            @if($orders)
                {!! view('admin.ajax.components.orders',compact(['orders','listStatusWithLabels']))->render()  !!}
            @endif
        </div>
@include('admin.layouts.modal-del')
@endsection
@section("script")
    <script>
        function callAjax(){
            var date_start = $('input[name=daterangepicker_start]').val();
            var date_end = $('input[name=daterangepicker_end]').val();
            var status = $('#status').val();
            var search = $('#search').val();
            $.ajax({
                url : '{{route('orders.index')}}',
                type : 'GET',
                data : {
                    date_start : date_start,
                    date_end : date_end,
                    status : status,
                    search : search
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
            var timeout = null;
            $('#search').on('keyup',function(){
                clearTimeout(timeout);
                timeout = setTimeout(function(){
                    callAjax();
                },500);
            });
            //datetime range picker
            $('#daterange').daterangepicker({
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(0, 'hour'),
                locale: {
                    format: 'YYYY/MM/DD hh:mm A'
                }
            });

            $('#daterange').on('apply.daterangepicker', function(ev, picker) {
                $('input[name=daterangepicker_start]').val(picker.startDate.format('YYYY-MM-DD hh:mm:ss'));
                $('input[name=daterangepicker_end]').val(picker.endDate.format('YYYY-MM-DD hh:mm:ss'));
                callAjax();
            });

            $('#daterange').on('cancel.daterangepicker', function(ev, picker) {
                $('input[name=daterangepicker_start]').val('');
                $('input[name=daterangepicker_end]').val('');
                callAjax();
            });
        });
    </script>
@endsection
