<div class="animated fadeIn">
    <table id="dataTable" class="table table-bordered table-hover text-center" style="width:100%;background-color: white">
        <thead>
        <tr style="background-color: #3c8dbc;color:white;">
            <th style="width: 20px">STT</th>
            <th style="width: 50px">Tên sản phẩm</th>
            <th style="width: 50px">Hình ảnh</th>
            <th style="width: 50px">Số lượng</th>
            <th style="width: 50px">Danh mục</th>
            <th style="width: 50px">Hãng</th>
            <th style="width: 100px">Giá</th>
            <th style="width: 50px">Đã bán</th>
            <th style="width: 50px">
                <a href="{{route('products.create')}}"  class="btn btn-sm btn-success">
                    <span class="glyphicon glyphicon-plus"></span>&nbsp;Thêm
                </a>
            </th>
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
                <td>

                    @if($product->quantity_store == 0)
                        {!! $status[2] !!}
                    @elseif($product->quantity_store > 0 && $product->quantity_store <= 5)
                        {!! $status[3] !!}
                    @else
                        {!! $status[1] !!}
                    @endif
                    ({{$product->quantity_store}})
                </td>
                <td>{{$product->category->name}}</td>
                <td>{{$product->manufacturer->name}}</td>
                <td>{{number_format($product->price)}}VND</td>
                <td>{{$product->sales}}</td>
                <td>
                    <a href="{{ route('products.show',['id'=>$product->id]) }}" class="btn btn-info btn-xs" style="margin:2px !important">
                        <i class="fa fa-eye fa-fw"></i><span>Sửa</span>
                    </a>
                    <a href="" class="btn btn-danger btn-xs  del" style="margin:2px !important" data-toggle="modal" data-target="#modal-del">
                        <i class="glyphicon glyphicon-trash fa-fw"></i><span>Xóa</span>
                        <form method="post" action="{{route('products.destroy',['id'=>$product->id]) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                        </form>
                    </a>
                </td>
            </tr>
        @empty
            <p>Không có sản phẩm nào!</p>
        @endforelse
        </tbody>
    </table>
    <div class="pull-right">
        {!! $products->links()  !!}
    </div>
</div>