@extends('admin.layouts.master')
@section('title')
    Quản lý đơn đặt hàng
@endsection
@section('action')
    Danh sách
@endsection
@section('content')
        <div class="message">
            @include('admin.layouts.notify')
        </div>
        <div class="form-group">
            <fieldset class="scheduler-border">
                <legend class="scheduler-border">Bộ lọc:</legend>
                <div class="row control-group">
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
                        <label for="">Tìm kiếm:</label>
                        <input type="text" class="form-control" id="search" placeholder="Nhập từ khóa" value="@if(Request::get('search')) {{ Request::get('search') }} @endif"/>
                    </div>
                </div>
            </fieldset>
        </div>
        <div id="content">
            @include('admin.ajax.components.users')
        </div>
@include('admin.layouts.modal-del')
@endsection
@section("script")
    <script>
        function callAjax(){
            var date_start = $('input[name=daterangepicker_start]').val();
            var date_end = $('input[name=daterangepicker_end]').val();
            var search = $('#search').val();
            $.ajax({
                url : '{{route('users-index')}}',
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
            // $('.pw-reset').on('click',function(){
            //     alert('1');
            //     $(this).find('span.text-pw').text('Save');
            //     var password = $(this).closest('tr').find('input[type=password]')
            //             .removeAttr('readonly')
            //             .attr({'type' : 'text', 'autofocus' : true })
            //             .val('');
            //     $(this).removeClass('btn-warning').addClass('btn-success').attr('id','save');
            // });
            $(document).on('click','.pw-reset',function(){
                $(this).find('span.text-pw').text('Save');
                $(this).closest('tr').find('input[type=password]')
                        .removeAttr('readonly')
                        .attr({'type' : 'text', 'autofocus' : true })
                        .val('');
                $(this).removeClass('btn-warning').addClass('btn-success').attr('id','save');
            }).on('click','#save',function(){
                $(this).removeClass('btn-success').addClass('btn-warning').removeAttr('id');
                $(this).find('span.text-pw').text('Reset');
                var tr = $(this).closest('tr');
                var ipt_password = tr.find('input[name=password]');
                var id = tr.attr('data-id');
                var password = ipt_password.val();
                $.ajax({
                    url : '{{ route('users-password') }}',
                    type : 'POST',
                    data : {
                        id : id,
                        password : password
                    },
                    success : function(data){
                        if(data.success){

                            $('.message').html('<div class=" notify success"><div class="alert alert-success">' + data.success + '</div></div>');
                        }else{
                            $('.message').html('<div class=" notify error"><div class="alert alert-danger">' + data.error + '</div></div>');
                        }
                    }
                });
                ipt_password.attr({'type' : 'password', 'readonly' : 'readonly'});
            })
        });
    </script>
@endsection
