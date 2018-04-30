@extends('admin.layouts.master')
@section('title')
    Sản phẩm
@endsection
@section('action')
    Danh sách
@endsection
@section('content')
    @include('admin.layouts.notify')
        <div class="form-group">
            <div class="row">
                <div class="col-sm-3 form-group">
                    <select id="filter-cate" class="form-control" style="width:100% !important;"><option value="">Category</option></select>
                </div>
            </div>
        </div>
        <table id="dataTable" class="table table-bordered table-hover text-center" style="width:100%;background-color: white">
            <thead>
            <tr style="background-color: #3c8dbc;color:white;">
                <th style="width: 20px">STT</th>
                <th style="width: 50px">Tên sản phẩm</th>
                <th style="width: 200px">Hình ảnh</th>
                <th style="width: 50px">Số lượng</th>
                <th style="width: 100px">Giá</th>
                <th style="width: 50px">Đã bán</th>
                <th style="width: 50px">Thao tác</th>
            </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>{{$product->id}}</td>
                        <td>{{$product->name}}</td>
                        <td>
                            <?php
                            $image = $product->imageDetail()->first();
                            ?>
                            @if($image)
                                <img width="100px" height="100px" class="img img-thumbnail" src="{{asset('uploads/images/products/'.$image->image_detail)}}" alt="{{$image->image_detail}}"/>
                            @endif
                        </td>
                        <td>{{$product->quantity_store}}</td>
                        <td>{{$product->price}}VND</td>
                        <td>{{$product->sales}}</td>
                        <td>
                            <a href="{{ route('products.show',['id'=>$product->id]) }}"
                               class="btn btn-info btn-xs" style="margin:2px !important"><i class="fa fa-eye fa-fw"></i><span>View</span></a>
                            <a href="" class="btn btn-danger btn-xs  del" style="margin:2px !important" data-toggle="modal"
                               data-target="#modal-del"><i class="glyphicon glyphicon-trash fa-fw"></i><span>Delete</span>
                                <form method="post" action="{{route('products.destroy',['id'=>$product->id]) }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">
                                </form>
                            </a>
                        </td>
                    </tr>
                @empty
                    <p>Notthing to show!</p>
                @endforelse
            </tbody>
        </table>
        <div class="row pull-right">
            {{ $products->links() }}
        </div>
@include('admin.layouts.modal-del')
@endsection
@section("script")
@endsection