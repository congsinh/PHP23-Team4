<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Hóa đơn thanh toán</title>
    <link rel="stylesheet" href="{{asset('admin/bower_components/print-order/style.css')}}" media="all" />
</head>
<body>
<header class="clearfix">
    <div id="logo">
        <img src="{{asset('img/logo.png')}}" width='180px' height="30px">
        <div id="company">
            <div>92 Quang Trung, Q. Hải Châu, TP. Đà Nẵng</div>
            <div>02363 888 279</div>
            <div><a href="mailto:phanvan91@gmail.com">phanvan91@gmail.com</a></div>
        </div>
    </div>
    <div  class="bill-no">
        <div class="notice">Mã hóa đơn: {{ $order->id }}</div>
        <div class="date">Ngày đặt hàng: <span class="pull-right">{{ date('Y-m-d', strtotime($order->created_at)) }}</span></div>
        <div class="date">Ngày xuất hóa đơn: <span class="pull-right">{{ date('Y-m-d') }}</span></div>
    </div>
</header>
<main>
    <div id="details" class="clearfix">
        <div id="client" class="">
            <div class="notice">Thông tin khách hàng:</div>
            <div>Họ tên: <span class="name">{{ $order->name }}</span> </div>
            <div>Số điện thoại: <span class="phone">{{ $order->phone }}</span></div>
            <div>Địa chỉ: <span class="address">{{ $order->address }}</span></div>
        </div>
        <div id="client" style="margin-left: 100px; max-width: 250px" class="">
            <div class="notice">Ghi chú:</div>
            <div >{{ $order->note }}</div>
        </div>
    </div>
    <table border="0" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th class="no">STT</th>
            <th class="desc">Sản phẩm</th>
            <th class="unit">Giá</th>
            <th class="qty">Số lượng</th>
            <th class="total">Tổng</th>
        </tr>
        </thead>
        <tbody>
        @forelse($order->products as $key => $product)
            <tr>
                <td class="no">01</td>
                <td class="desc">{{ $product->name }}</td>
                <td class="unit">{{ number_format($product->price) }} VNĐ</td>
                <td class="qty">{{ $product->pivot->quantity }}</td>
                <td class="total">{{ number_format( $product->price * $product->pivot->quantity) }} VNĐ</td>
            </tr>
        @empty
        @endforelse
        </tbody>
        <tfoot >
        <tr>
            <td colspan="2"></td>
            <td colspan="2">Tổng thanh toán</td>
            <td>{{ number_format($order->total_pay) }} VNĐ</td>
        </tr>
        </tfoot>
    </table>

</main>
</body>
</html>