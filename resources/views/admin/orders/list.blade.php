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
                    </div>
                    <div class="col-sm-4 form-group">
                        <label for="">Search:</label>
                        <input type="text" class="form-control" id="search" placeholder="Nhập từ khóa" value="@if(Request::get('search')) {{ Request::get('search') }} @endif"/>
                    </div>
                    <button class="btn btn-success btn-md pull-right mt-20" data-toggle="modal" data-target="#exportExc">
                        <i class="fa fa-download"><strong>&nbsp;Xuất excel</strong></i>
                    </button>
                </div>
            </fieldset>
        </div>
        <div id="content">
            @if($orders)
                {!! view('admin.ajax.components.orders',compact(['orders','listStatusWithLabels']))->render()  !!}
            @endif
        </div>
        <div id="exportExc" class="modal fade" role="dialog">
            <div class="modal-dialog modal-md">
                <!-- Modal content-->
                <div class="modal-content">
                    <form action="{{ route('export-excel') }}" method="POST">
                        @csrf
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Xuất excel</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group full-width">
                                <div class="input-group full-width">
                                    <label for="">Tên file:</label>
                                    <div class="input-group full-width">
                                        <input type="text" class="form-control "  name="excel_name" value="" placeholder="Ví dụ: Tháng 1">
                                    </div>
                                </div>
                                <div class=" input-group full-width">
                                    <label for="">Thời gian:</label>
                                    <div class="input-group ">
                                        <div class="input-group-addon">
                                            <i class="fa fa-clock-o"></i>
                                        </div>
                                        <input type="text" class="form-control" id="date-excel" >
                                        <input type="hidden"  id="excel_start" name="excel_start" >
                                        <input type="hidden"  id="excel_end" name="excel_end" >
                                    </div>
                                </div>
                                <div class=" input-group full-width">
                                    <label for="">Tình trạng:</label>
                                    <div class="input-group ">
                                        <input type="checkbox" id='checkAll' name="status[]" class="cb-status ml-20"  value="">&nbsp;Tất cả
                                        <input type="checkbox" name="status[]" class="cb-status ml-20"  value="1">&nbsp;Đã hủy
                                        <input type="checkbox" name="status[]" class="cb-status ml-20"  value="2" checked>&nbsp;Chờ duyệt
                                        <input type="checkbox" name="status[]" class="cb-status ml-20"  value="3" checked>&nbsp;Đang chuyển hàng
                                        <input type="checkbox" name="status[]" class="cb-status ml-20"  value="4" >&nbsp;Đã thanh toán
                                    </div>
                                </div>
                                <div class=" input-group full-width">
                                    <label for="">Định dạng:</label>
                                    <div class="input-group full-width">
                                        <select name="extension" id="extension" class="form-control">
                                            <option value="xls">*.xls</option>
                                            <option value="xlsx">*.xlsx</option>
                                            <option value="csv">.csv</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success" id="export">Xuất</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
                        </div>
                    </form>
                </div>
            </div>
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
            var search_date = $('#daterange').daterangepicker({
                timePicker: true,
                startDate: moment().startOf('hour'),
                endDate: moment().startOf('hour').add(0, 'hour'),
                locale: {
                    format: 'YYYY/MM/DD hh:mm A'
                }
            });

            search_date.on('apply.daterangepicker', function(ev, picker) {
                $('input[name=daterangepicker_start]').val(picker.startDate.format('YYYY-MM-DD hh:mm:ss'));
                $('input[name=daterangepicker_end]').val(picker.endDate.format('YYYY-MM-DD hh:mm:ss'));
                callAjax();
            });

            search_date.on('cancel.daterangepicker', function(ev, picker) {
                $('input[name=daterangepicker_start]').val('');
                $('input[name=daterangepicker_end]').val('');
                callAjax();
            });


        });
        // datetime range picker export excel
        var export_date = $('#date-excel').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(0, 'hour'),
            locale: {
                format: 'YYYY/MM/DD hh:mm A'
            }
        });
        export_date.on('apply.daterangepicker', function(ev, picker) {
            var start = picker.startDate.format('YYYY-MM-DD hh:mm:ss');
            var end = picker.endDate.format('YYYY-MM-DD hh:mm:ss');
            $('#excel_start').val(start);
            $('#excel_end').val(end);

        }).on('cancel.daterangepicker', function(ev, picker){
            $('#excel_start').val('');
            $('#excel_end').val('');
        });

        $('input#checkAll').on('click',function () {
            $('input:checkbox').prop('checked', this.checked);
        });
    </script>
@endsection
