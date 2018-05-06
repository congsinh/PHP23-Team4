<div class="animated fadeIn">
    <table id="dataTable" class="table table-bordered table-hover text-center" style="width:100%;background-color: white">
        <thead>
        <tr style="background-color: #3c8dbc;color:white;">
            <th style="width: 20px">STT</th>
            <th style="width: 80px">Tên khách hàng</th>
            <th style="width: 50px">Phone</th>
            <th style="width: 50px">Địa chỉ</th>
            <th style="width: 40px">Tiền thanh toán</th>
            <th style="width: 80px">Ngày tạo</th>
            <th style="width: 80px">Ngày thanh toán</th>
            <th style="width: 40px">Trạng thái</th>
            <th style="width: 50px">Thao tác</th>
        </tr>
        </thead>
        <tbody>
        @forelse($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->name}}</td>
                <td>{{$order->phone}}</td>
                <td>{{$order->address}}</td>
                <td>{{ number_format($order->total_pay) }}&nbsp;VNĐ</td>
                <td>{{$order->created_at}}</td>
                <td>{{ ( $order->status == 4 ) ? $order->updated_at : '' }}</td>
                <td>{!! $listStatusWithLabels[$order->status] !!}</td>
                <td>
                    <a href="{{ route('orders.edit',['id'=>$order->id]) }}" class="btn btn-info btn-xs" style="margin:2px !important">
                        <i class="fa fa-eye fa-fw"></i><span>Xem</span>
                    </a>
                    {{--<a href="" class="btn btn-danger btn-xs  del" style="margin:2px !important" data-toggle="modal" data-target="#modal-del">--}}
                        {{--<i class="glyphicon glyphicon-trash fa-fw"></i><span>Xóa</span>--}}
                        {{--<form method="post" action="{{route('orders.destroy',['id'=>$order->id]) }}">--}}
                            {{--{{ csrf_field() }}--}}
                            {{--<input type="hidden" name="_method" value="DELETE">--}}
                        {{--</form>--}}
                    {{--</a>--}}
                </td>
            </tr>
        @empty
            <p>Notthing to show!</p>
        @endforelse
        </tbody>
    </table>
    <div class="pull-right">
        {!! $orders->links()  !!}
    </div>
</div>