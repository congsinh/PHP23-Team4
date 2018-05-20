@extends('admin.layouts.master')
@section('style')
    <style>
        .error{color:red;font-weight:normal}
    </style>
@endsection
@section('title')
    Danh mục sản phẩm
@endsection
@section('action')
    Danh sách
@endsection
@section('content')

    <section class="content container-fluid">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Danh mục</h3>
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
                                    <th width="30%" class="text-center"><button id="add-category" class="btn btn-primary btn-xs">Thêm</button></th>
                                </tr>
                                </thead>
                                <tbody id="add-row-category">
                                <?php $i = 1; $j =1 ?>
                                @foreach($categories_parent as $category)
                                    <tr id="delete-coloum-{{$category->id}}">
                                        <td>{!! $i++ !!}</td>
                                        <td>{{$category->name}}</td>
                                        <td class="text-center">
                                            <button class="btn btn-warning btn-xs edit-category" value="{{$category->id}}">Sửa</button> &ensp;
                                            <button class="btn btn-danger btn-xs" id="delete-category" value="{{$category->id}}">Xóa</button>
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

        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Danh mục con</h3>
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
                                    <th>Danh mục</th>
                                    <th width="30%" class="text-center"><button id="add-category-children" class="btn btn-primary btn-xs" >Thêm</button></th>
                                </tr>
                                </thead>
                                <tbody id="add-row-category-children">
                                @foreach($categories_children as $chilren)
                                    <tr id="delete-coloum-children-{{$chilren->id}}">
                                        <td>{{$j++}}</td>
                                        <td>{{$chilren->name}}</td>
                                        <td>{{$chilren->category['name']}}</td>
                                        <td class="text-center">
                                            <button value="{{$chilren->id}}" class="btn btn-warning btn-xs edit-category-children" >Sửa</button> &ensp;
                                            <button class="btn btn-danger btn-xs" id="delete-category-children" value="{{$chilren->id}}">Xóa</button>
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


        {{--MODEL CATEGORY CHA --}}

        <div class="modal modal-info fade" id="modal-info">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="title-modal">Info Modal</h4>
                    </div>
                    <form id="categoryForm">
                        <div class="modal-body">
                            <div class="form-group" id="after-category">
                                <label for="name">Tên</label>
                                <input type="text" id="name-category" class="form-control" name="name" >
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Đóng</button>
                            <button type="button" class="btn btn-outline" id="btn-save" data-id="">Lưu thay đổi</button>
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
                        <h4 class="modal-title">Bạn có muốn xóa category này không ? </h4>
                    </div>
                    <div class="modal-footer" id="add-body">
                        <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Đóng</button>
                        <button type="button" class="btn btn-outline" id="delete-save" data-id="">Xóa</button>
                    </div>
                </div>
            </div>
        </div>

        {{--END MODAL CATEGORY CHA--}}

        <div class="modal modal-info fade" id="modal-category-children">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="title-modal-category-children">Info Modal</h4>
                    </div>
                    <form id="categoryChildrenForm">
                        <div class="modal-body">
                            <div class="form-group" id="after-category">
                                <label for="name">Tên</label>
                                <input type="text" id="name-category-children" class="form-control" name="name_category_children" >
                            </div>
                            <div class="form-group">
                                <label for="select-category">Danh mục</label>
                                <select class="form-control" name="parent_id" id="parent-id" >
                                    @foreach($categories_parent as $value)
                                        <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-outline" id="btn-save-category-children" data-id="">Lưu</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </section>

@endsection


@section('script')
    <script>

        $(document).ready(function(){
            // Validator Form
            $("#categoryForm").validate({
                rules: {
                    name: {
                        required: true,
                    }
                },
                messages: {
                    name: {
                        required: "Tên danh mục không được để trống"
                    }
                }
            });
            //Thêm category
            $("body").on('click','#add-category',function(){
                $('#title-modal').html("Thêm danh mục");
                $('#categoryForm').trigger("reset");
                $('#modal-info').modal('show');
                $('#btn-save').val('add-category');
                $('#select-category').remove();
                $('#name-category-error').remove();
            });
            $('#btn-save').on('click',function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });

                $.get('{{url('/admin/category/create')}}',function (data) {
                    $.each(data, function( index, value ) {
                        var name_category = $('#name-category').val();
                        if(value.name === name_category){
                            var add = '<label id="name-category-error" class="error" for="name-category">Tên danh mục đã bị trùng </label>';
                            $("#name-category").after(add);
                        }
                    });
                });

                var form = $("#categoryForm");
                if(form.valid() === false){
                    console.log('loi');
                }else{
                    var name = $('#name-category').val();
                    var state = $(this).val();
                    if(state === 'add-category'){
                        $.ajax({
                            type: 'POST',
                            url:'{{url('admin/category')}}',
                            data: {name:name},
                            dataType:'json',
                            success:function(data){
                                console.log(data);
                                var col = '<tr id="delete-coloum-'+data[0].id+'">\n' +
                                    '    <td>'+data[1]+'</td>\n' +
                                    '    <td>'+data[0].name+'</td>\n' +
                                    '    <td class="text-center">\n' +
                                    '    <button class="btn btn-warning btn-xs edit-category" value="'+data[0].id+'">Sửa</button> &ensp;\n' +
                                    '    <button class="btn btn-danger btn-xs" id="delete-category" value="'+data[0].id+'">Xóa</button>\n' +
                                    '     </td>\n' +
                                    '      </tr>'
                                $("#add-row-category").append(col);
                                $('#modal-info').modal('hide');
                            },error: function (data) {
                                console.log('Error:', data);
                            }
                        })
                    }
                }
            });
            // Xóa Category
            $("body").on('click','#delete-category',function(){
                $('#modal-danger').modal('show');
                $('#delete-save').val('del-category');
                var value = $(this).val();
                $('#delete-save').attr('data-id',value);
                $('#modal-body-delete').remove();
            });
            $('#delete-save').on('click',function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                var id = $(this).attr('data-id');
                var state = $(this).val();
                if(state === 'del-category'){
                    $.ajax({
                        type : 'DELETE',
                        url : '{{url('admin/category')}}/'+id,
                        success:function(data){
                            if(data === 'NoRequest'){
                                var error = '<div class="modal-body" id="modal-body-delete">\n' +
                                    '                <p>Không thể xóa được Xin Xem lại Danh Mục con &hellip;</p>\n' +
                                    '              </div>';
                                $("#add-body").before(error);
                            }else{
                                $('#delete-coloum-'+id).remove();
                                $('#modal-danger').modal('hide');
                            }
                        },
                    })
                }
            })
            //Sửa Category
            $("body").on('click','.edit-category',function(){
                $('#title-modal').html("Sửa danh mục");
                $('#categoryForm').trigger("reset");
                $('#modal-info').modal('show');
                $('#btn-save').val('edit-category');
                var id = $(this).val();
                $('#btn-save').attr('data-id',id);
                $('#name-category-error').remove();
                $.get('{{url('/admin/category')}}/'+id+'/edit',function (data) {
                    $('#name-category').val(data.name);
                })
            });

            $('#btn-save').on('click',function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                var form = $("#categoryForm");
                if(form.valid() === false){
                    console.log('loi');
                }else{
                    var state = $(this).val();
                    if(state === 'edit-category'){
                        var id = $(this).attr('data-id');
                        var name = $('#name-category').val();
                        $.ajax({
                            url: '{{url('/admin/category')}}/'+id,
                            type:'PUT',
                            data:{name:name},
                            dataType:'json',
                            success:function (data) {
                                console.log(data);
                                var edit = '<tr id="delete-coloum-'+data.id+'">\n' +
                                    '       <td>Đã Sửa</td>\n' +
                                    '       <td>'+data.name+'</td>\n' +
                                    '       <td class="text-center">\n' +
                                    '       <button class="btn btn-warning btn-xs edit-category" value="'+data.id+'">Sửa</button> &ensp;\n' +
                                    '       <button class="btn btn-danger btn-xs" id="delete-category" value="'+data.id+'">Xóa</button>\n' +
                                    '       </td>\n' +
                                    '        </tr>';
                                $("#delete-coloum-"+data.id).replaceWith(edit);
                                $('#modal-info').modal('hide');
                            }
                        })
                    }
                }
            })


            //    CATEGORY CHILDREN


            // Thêm Category children
            $("#categoryChildrenForm").validate({
                rules: {
                    name_category_children: {
                        required: true
                    }
                },
                messages: {
                    name_category_children: {
                        required: "Tên danh mục không được để trống"
                    }
                }
            });
            $('body').on('click','#add-category-children',function(){
                $('#title-modal-category-children').html("Tạo Danh Mục Con");
                $('#categoryChildrenForm').trigger("reset");
                $('#modal-category-children').modal('show');
                $('#btn-save-category-children').val('add-category-children');
                $('#name-category-children-error').remove();
            })

            $('#btn-save-category-children').on('click',function(e){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.get('{{url('/admin/category/create')}}',function (data) {
                    $.each(data, function( index, value ) {
                        var name_category = $('#name-category-children').val();
                        if(value.name === name_category){
                            var add_1 = '<label id="name-category-children-error" class="error" for="name-category-children">Tên danh mục đã có </label>';
                            $("#name-category-children").after(add_1);
                        }
                    });
                });

                e.preventDefault();
                var form = $("#categoryChildrenForm");
                if(form.valid() === false){
                    console.log('loi');
                }else{
                    var name = $('#name-category-children').val();
                    var parent_id = $('#parent-id').val();
                    var state = $(this).val();
                    if(state === 'add-category-children'){
                        $.ajax({
                            type: 'POST',
                            url:'{{url('admin/category')}}',
                            data: {name:name,parent_id:parent_id},
                            success:function(data){
                                console.log(data);
                                var col = '<tr id="delete-coloum-children-'+data[0].id+'">\n' +
                                    '<td>Đã thêm</td>\n' +
                                    '<td>'+data[0].name+'</td>\n' +
                                    '<td>'+data[2].name+'</td>\n' +
                                    '<td class="text-center">\n' +
                                    '<button class="btn btn-warning btn-xs edit-category-children" value="'+data[0].id+'">Sửa</button> &ensp;\n' +
                                    '<button class="btn btn-danger btn-xs" id="delete-category-children" value="'+data[0].id+'">Xóa</button>\n' +
                                    ' </td>\n' +
                                    '  </tr>'
                                $("#add-row-category-children").append(col);
                                $('#modal-category-children').modal('hide');
                            }
                        })
                    }
                }
            });
            //    Xóa category children
            $("body").on('click','#delete-category-children',function(){
                $('#modal-danger').modal('show');
                $('#delete-save').val('del-category-children');
                var value = $(this).val();
                $('#delete-save').attr('data-id',value);
                $('#modal-body-delete').remove();
            });
            $('#delete-save').on('click',function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                var id = $(this).attr('data-id');
                var state = $(this).val();
                if(state === 'del-category-children'){
                    $.ajax({
                        type : 'DELETE',
                        url : '{{url('admin/category')}}/'+id,
                        success:function(data){
                            $('#delete-coloum-children-'+id).remove();
                            $('#modal-danger').modal('hide');
                        },
                    })
                }
            })
            //     Sửa category children
            $("body").on('click','.edit-category-children',function(){
                $('#title-modal-category-children').html("Sửa danh mục con");
                $('#modal-category-children').modal('show');
                $('#categoryChildrenForm').trigger("reset");
                $('#btn-save-category-children').val('edit-category-children');
                $('#name-category-children-error').remove();
                var id = $(this).val();
                $('#btn-save-category-children').attr('data-id',id);
                $.get('{{url('/admin/category')}}/'+id+'/edit',function (data) {
                    $('#name-category-children').val(data.name);
                    $('#parent-id').val(data.parent_id);
                })
            });
            $('#btn-save-category-children').on('click',function(){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                var form = $("#categoryChildrenForm");
                if(form.valid() === false){
                    console.log('loi');
                }else{
                    var state = $(this).val();
                    if(state === 'edit-category-children'){
                        var id = $(this).attr('data-id');
                        var name = $('#name-category-children').val();
                        var parent_id = $('#parent-id').val();
                        $.ajax({
                            url: '{{url('/admin/category')}}/'+id,
                            type:'PUT',
                            data:{name:name,parent_id:parent_id},
                            dataType:'json',
                            success:function (data) {
                                console.log(data);
                                var edit = '<tr id="delete-coloum-children-'+data[0].id+'">\n' +
                                    ' <td>Đã sửa</td>\n' +
                                    '<td>'+data[0].name+'</td>\n' +
                                    ' <td>'+data[1].name+'</td>\n' +
                                    ' <td class="text-center">\n' +
                                    ' <button value="'+data[0].id+'" class="btn btn-warning btn-xs edit-category-children" >Sửa</button> &ensp;\n' +
                                    ' <button class="btn btn-danger btn-xs" id="delete-category-children" value="'+data[0].id+'">Xóa</button>\n' +
                                    '  </td>\n' +
                                    ' </tr>';
                                $("#delete-coloum-children-"+data[0].id).replaceWith(edit);
                                $('#modal-category-children').modal('hide');
                            }
                        })
                    }
                }
            })
        })
    </script>
@endsection