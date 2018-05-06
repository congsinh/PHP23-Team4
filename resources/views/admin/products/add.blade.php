@extends('admin.layouts.master')
@section('title')
    Sản phẩm
@endsection
@section('action')
    Thêm mới
@endsection
@section('content')

    <div class="col-lg-12" style="padding-bottom:120px">
            @include('admin.layouts.notify')
            <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data" >
                {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Danh mục</label>
                                <select class="form-control" name="category_id" id="category" >
                                    <option value="">Xin chọn danh mục sản phẩm..</option>
                                    @foreach($categories as $cate)
                                        <optgroup label="----{{$cate->name}}----">
                                            @forelse($cate->subcate as $sub)
                                                <option value="{{$sub->id}}" @if(Input::old('category_id') == $sub->id) selected @endif>{{$sub->name}} </option>
                                            @empty
                                            @endforelse
                                        </optgroup>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nhà cung cấp</label>
                                <select class="form-control" name="manufacture_id" id="manufacturer">
                                    <option value="">Xin chọn nhà cung cấp...</option>
                                    @foreach($manufacturers as $manu)
                                        <option value="{{$manu->id}}" @if(Input::old('manufacture_id') == $manu->id) selected @endif>{{$manu->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" type="text" name="name" placeholder="Xin nhập tên sản phẩm" value="{{ old('name')}}"/>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-8">
                                        <label>Giá (VNĐ)</label>
                                        <input class="form-control" type="text"  name="price" id="price" placeholder="Xin nhập giá" min="1000" max="999999999999" value="{{ old('price')}}"/>
                                    </div>
                                    <div class="col-xs-4">
                                        <label>Số lượng</label>
                                        <input class="form-control" type="number" name="quantity_store"  min="1" max="100"  value="{{ old('quantity_store')}}"/>
                                    </div>

                                </div>
                            </div>
                            <div class="form-group">
                                <label>Thông số kỹ thuật</label>
                                <table class="table configuration">
                                    @if(Input::old('category_id'))
                                        <?php
                                        $configurations = array_combine(Input::old('configuration')['key'],Input::old('configuration')['value']);
                                        ?>
                                        {!! view('admin.ajax.components.config',compact('configurations'))->render()  !!}
                                    @endif
                                </table>
                                <button id="btn-add" type="button" class="btn btn-sm btn-primary pull-left">
                                    <span class="glyphicon glyphicon-plus"></span>&nbsp;Thêm
                                </button>
                            </div>

                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" style="display:none" id="upload-input" multiple="multiple" name="image_detail[]" accept="image/*">
                                <div id="upload" class="form-control drop-area">
                                    <h3>Kéo & thả ảnh vào đây ! </h3>
                                    <button type="button" class="btn btn-primary btn-sm " id="btn_select">hoặc click vào đây để chọn ảnh !</button>
                                    <div id="thumbnail" ></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea class="form-control"  name="description"> {{ old('description')}} </textarea>

                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Lưu</button>
                        <button type="reset" class="btn btn-default">Làm lại</button>
                    </div>
            </form>
        </div>
<!-- Your code to create an instance of Fine Uploader and bind to the DOM/template
====================================================================== -->

@endsection
@section('script')
    <script>
        $(document).ready(function(){
            $('#category').on('change',function(){
                 var id = this.value;
                $.ajax({
                    url:"{{route('configuration')}}",
                    type:'GET',
                    data: {
                        id:id
                    },
                    success:function(data){
                        $('table.configuration').html(data.view)
                    }
                });
            })
            $('#btn-add').on('click',function(){
                $('table.configuration').append(
                    '    <tr>' +
                    '        <td width="120px"><input class="form-control" name=\'configuration[key][]\' type=\'text\' /></td>\n' +
                    '        <td><input class="form-control" name=\'configuration[value][]\' type=\'text\' /></td>\n' +
                    '    </tr>'
                );
            });

            CKEDITOR.replace( 'description', {
                filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
            });

        jQuery(function($){
            var fileDiv = document.getElementById("upload");
            var fileInput = document.getElementById("upload-input");
            var btnSelect = document.getElementById('btn_select');
            fileInput.addEventListener("change",function(e){
                var files = this.files
                console.log(files);
                showThumbnail(files)
            },false)

            btnSelect.addEventListener("click",function(e){
                $(fileInput).show().focus().click().hide();
                e.preventDefault();
            },false)


            fileDiv.addEventListener("dragenter",function(e){
                e.stopPropagation();
                e.preventDefault();
            },false);

            fileDiv.addEventListener("dragover",function(e){
                e.stopPropagation();
                e.preventDefault();
            },false);

            fileDiv.addEventListener("drop",function(e){
                e.stopPropagation();
                e.preventDefault();
                var dt = e.dataTransfer;
                var files = dt.files;
                console.log(files);
                fileInput.files = files;
                showThumbnail(files)
            },false);

            function showThumbnail(files){
                $('.box-image').remove();
                for(var i=0;i<files.length;i++){
                    var file = files[i]

                    var container = document.createElement('div');
                    container.classList.add('box-image');

                    var image = document.createElement("img");
                    image.classList.add("img-thumbnail");
                    image.file = file;
                    container.appendChild(image);

                    var thumbnail = document.getElementById("thumbnail");
                    thumbnail.appendChild(container);

                    var reader = new FileReader()
                    reader.onload = (function(aImg){
                        return function(e){
                            aImg.src = e.target.result;
                        };
                    }(image))
                    var ret = reader.readAsDataURL(file);
                    var canvas = document.createElement("canvas");
                    ctx = canvas.getContext("2d");
                    image.onload= function(){
                        ctx.drawImage(image,100,100)
                    }
                }
            };
        });
        });
    </script>

@endsection




