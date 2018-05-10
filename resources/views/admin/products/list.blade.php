@extends('admin.layouts.master')
@section('title')
    Quản lý sản phẩm
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
                    <label for="">Hãng:</label>
                    <select class="filter" id="manufacturer" class="form-control" style="width:100% !important;">
                        <option value="">------Hãng sản xuất------</option>
                        @forelse($manufacturers as $manu)
                            <option value="{{$manu->id}}"
                                    @if(Request::get('manu') == $manu->id) selected @endif>{{$manu->name}}</option>
                        @empty
                        @endforelse
                    </select>
                </div>
                <div class="col-sm-2 form-group">
                    <label for="">Danh mục:</label>
                    <select class="filter" id="category" class="form-control" style="width:100% !important;">
                        <option value="">----------Tất cả----------</option>
                        @forelse($categories as $category)
                            <optgroup label="--------{{$category->name}}--------"/>
                            @forelse($category->subcate as $sub )
                                <option value="{{$sub->id}}"
                                        @if(Request::get('cate') == $sub->id) selected @endif>{{$sub->name}}</option>
                            @empty
                            @endforelse
                        @empty
                        @endforelse
                    </select>
                </div>
                <div class="col-sm-2 form-group">
                    <label for="">Lọc theo:</label>
                    <select class="filter" id="status" class="form-control" style="width:100% !important;">
                        <option value="">Tất cả</option>
                        <option value="1" @if(Request::get('status') == 1) selected @endif>Bán chạy nhất</option>
                        <option value="2" @if(Request::get('status') == 2) selected @endif>Bán ít nhất</option>
                        <option value="3" @if(Request::get('status') == 3) selected @endif>Sắp hết hàng</option>
                        <option value="4" @if(Request::get('status') == 4) selected @endif>Hết hàng</option>
                    </select>
                </div>

                <div class="col-sm-3 form-group">
                    <div class="row">
                        <label for="" class="col-sm-3 plr-5">Giá:
                            <small>(VNĐ)</small>
                        </label>
                        <div class="col-sm-8 pt-5">
                            <div id="range-price" class="noUi-target noUi-ltr noUi-horizontal ">

                            </div>
                            <span id="lower-value" class="filter pull-left pt-5">
                                        @if(Request::get('min_price'))
                                    {{Request::get('min_price')}}
                                @else
                                    0
                                @endif
                                    </span>
                            <span id="upper-value" class="filter pull-right pt-5">
                                        @if(Request::get('max_price'))
                                    {{Request::get('max_price')}}
                                @else
                                    50000000
                                @endif
                                    </span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 form-group">
                    <label for="">Search:</label>
                    <input type="text" class="form-control" id="search" placeholder="Nhập từ khóa"
                           value="@if(Request::get('search')) {{ Request::get('search') }} @endif"/>
                </div>
            </div>
        </fieldset>

    </div>

    <div id="content">
        @if($products)
            {!! view('admin.ajax.components.products',compact(['products','status']))->render()  !!}
        @endif
    </div>

    @include('admin.layouts.modal-del')
@endsection
@section("script")
    <script>
        function callAjax() {
            var cate = $('#category').val();
            var manu = $('#manufacturer').val();
            var status = $('#status').val();
            var search = $('#search').val();
            // var orderBy = $('input[type=radio][name=orderBy]:checked').val();
            var min_price = $('#lower-value').text();
            var max_price = $('#upper-value').text();
            var Format = wNumb({
                decimals: 3,
                thousand: '.'
            });
            $.ajax({
                url: '{{route('products.index')}}',
                type: 'GET',
                data: {
                    cate: cate,
                    manu: manu,
                    status: status,
                    search: search,
                    // orderBy : orderBy
                    min_price: Format.from(min_price),
                    max_price: Format.from(max_price),
                },
                success: function (data) {
                    $('#content').html(data.view);
                }
            });
        };

        $(document).ready(function () {
            $('.filter').on('change', function () {
                callAjax();
            });
            var timeout = null;
            $('#search').on('keyup',function(){
                clearTimeout(timeout);
                timeout = setTimeout(function(){
                    callAjax();
                },500);
            });
            // range price
            var slider = document.getElementById('range-price');
            noUiSlider.create(slider, {
                start: [0, 50000000],
                connect: true,
                range: {
                    min: 0,
                    max: 50000000
                },
                format: wNumb({
                    decimals: 3,
                    thousand: '.'
                })
            });
            var nodes = [
                document.getElementById('lower-value'), // 0
                document.getElementById('upper-value')   // 1
            ];
            slider.noUiSlider.on('change', function (values, handle) {
                nodes[handle].innerHTML = values[handle];
                callAjax();
            });
        });
    </script>
@endsection
