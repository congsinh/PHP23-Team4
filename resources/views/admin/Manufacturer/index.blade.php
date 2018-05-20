@extends('admin.layouts.master')
@section('title')
    Đối tác
@endsection
@section('action')
    Danh sách
@endsection
@section('style')
    <style>
        .error{color:red;font-weight:normal}
    </style>
@endsection
@section('content')
    <section class="content container-fluid">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Hãng sản xuất</h3>
            </div>

            <div class="box-body">
                <div class="dataTables_wrapper form-inline dt-bootstrap">
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered table-hover dataTable">
                                <thead>
                                <tr>
                                    <th width="10%">STT</th>
                                    <th>Tên</th>
                                    <th width="30%" class="text-center"><button id="add-manufacturer" class="btn btn-primary btn-xs">Thêm</button></th>
                                </tr>
                                </thead>
                                <tbody id="add-row-manufacturer">
                                @php $i = 1 @endphp
                                @foreach($manufacturers as $manufacturer)
                                    <tr id="delete-coloum-{{$manufacturer->id}}">
                                        <td>{{$i++}}</td>
                                        <td>{{$manufacturer->name}}</td>
                                        <td class="text-center">
                                            <button class="btn btn-warning btn-xs edit-manufacturer" value="{{$manufacturer->id}}">Sửa</button> &ensp;
                                            <button class="btn btn-danger btn-xs" id="delete-manufacturer" value="{{$manufacturer->id}}">Xóa</button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="modal modal-success fade" id="modal-manufacturer">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="title-modal">Thêm hãng sản xuất</h4>
                </div>
                <form id="manufacturerForm">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Tên</label>
                            <input type="text" class="form-control" name="name" id="name-manufacturer">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-outline" id="save-manufacturer" data-id="">Lưu </button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div class="modal modal-danger fade" id="modal-danger">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Xóa hãng sản xuất</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Đóng</button>
                    <button type="button" class="btn btn-outline" id="save-delete-manufacturer" data-id="">Xóa</button>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $("#manufacturerForm").validate({
                rules: {
                    name: {
                        required: true,
                    }
                },
                messages: {
                    name: {
                        required: "Tên nhà sản xuất không được để trống"
                    }
                }
            });
            $("body").on('click','#add-manufacturer',function(){
                $('#title-modal').html("Thêm hãng sản xuất");
                $('#manufacturerForm').trigger("reset");
                $('#modal-manufacturer').modal('show');
                $('#save-manufacturer').val('add-manufacturer');
                $('#name-manufacturer-error').remove();
            });
            $('#save-manufacturer').on('click',function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $.get('{{url('/admin/manufacturer/create')}}',function (data) {
                    $.each(data, function( index, value ) {
                        var name_category = $('#name-manufacturer').val();
                        if(value.name === name_category){
                            var add = '<label id="name-manufacturer-error" class="error" for="name-manufacturer">Tên nhà sản xuất đã tồn tại </label>';
                            $("#name-manufacturer").after(add);
                        }
                    });
                });

                var form = $("#manufacturerForm");
                if(form.valid() === false){
                    console.log('loi');
                }
                else{
                    var name = $('#name-manufacturer').val();
                    var state = $(this).val();
                    if(state === 'add-manufacturer'){
                        $.ajax({
                            type: 'POST',
                            url:'{{url('admin/manufacturer')}}',
                            data: {name:name},
                            dataType:'json',
                            success:function(data){
                                console.log(data);
                                var col = '<tr id="delete-coloum-'+data[0].id+'">\n' +
                                    '<td>'+data[1]+'</td>\n' +
                                    '<td>'+data[0].name+'</td>\n' +
                                    '<td class="text-center">\n' +
                                    '<button class="btn btn-warning btn-xs edit-manufacturer" value="'+data[0].id+'">Sửa</button> &ensp;\n' +
                                    '<button class="btn btn-danger btn-xs" id="delete-manufacturer" value="'+data[0].id+'">Xóa</button>\n' +
                                    '</td>\n' +
                                    '</tr>'
                                $("#add-row-manufacturer").append(col);
                                $('#modal-manufacturer').modal('hide');
                            },error: function (data) {
                                console.log('Error:', data);
                            }
                        })
                    }
                }
            })

            $("body").on('click','#delete-manufacturer',function(){
                $('#modal-danger').modal('show');
                var value = $(this).val();
                $('#save-delete-manufacturer').attr('data-id',value);
            });
            $('#save-delete-manufacturer').on('click',function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                var id = $(this).attr('data-id');
                $.ajax({
                    type : 'DELETE',
                    url : '{{url('admin/manufacturer')}}/'+id,
                    success:function(data){
                        console.log(data);
                        $('#delete-coloum-'+id).remove();
                        $('#modal-danger').modal('hide');
                    },
                })
            })

            $("body").on('click','.edit-manufacturer',function(){
                $('#title-modal').html("Sửa hãng sản xuất");
                $('#manufacturerForm').trigger("reset");
                $('#modal-manufacturer').modal('show');
                $('#name-manufacturer-error').remove();
                $('#save-manufacturer').val('edit-manufacturer');
                var id = $(this).val();
                $('#save-manufacturer').attr('data-id',id);
                $.get('{{url('/admin/manufacturer')}}/'+id,function (data) {
                    $('#name-manufacturer').val(data.name);
                })
            });

            $('#save-manufacturer').on('click',function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                var form = $("#manufacturerForm");

                if(form.valid() === false){
                    console.log('loi');
                }else{
                    var state = $(this).val();
                    if(state === 'edit-manufacturer'){
                        var id = $(this).attr('data-id');
                        var name = $('#name-manufacturer').val();
                        $.ajax({
                            url: '{{url('/admin/manufacturer')}}/'+id,
                            type:'PUT',
                            data:{name:name},
                            dataType:'json',
                            success:function (data) {
                                var edit = '<tr id="delete-coloum-'+data.id+'">\n' +
                                    '<td>Đã Sửa</td>\n' +
                                    '<td>'+data.name+'</td>\n' +
                                    '<td class="text-center">\n' +
                                    '<button class="btn btn-warning btn-xs edit-manufacturer" value="'+data.id+'">Sửa</button> &ensp;\n' +
                                    '<button class="btn btn-danger btn-xs" id="delete-manufacturer" value="'+data.id+'">Xóa</button>\n' +
                                    '</td>\n' +
                                    '</tr>';
                                $("#delete-coloum-"+data.id).replaceWith(edit);
                                $('#modal-manufacturer').modal('hide');
                            }
                        })
                    }
                }
            })
        })
    </script>
@stop