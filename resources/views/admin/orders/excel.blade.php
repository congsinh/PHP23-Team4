<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<style>
    tr th, tfoot td{
        background-color: #0b58a2;
        color: #fdfdfe;
        text-align: center;
    }
    tr > td {
        border-bottom: 1px solid #000000;
        text-align: center;
    }

</style>
<body>

    <table>
        <thead>
        <tr>
            <th>Mã đơn hàng</th>
            <th>Sản phẩm</th>
            <th>Tình trạng</th>
            <th>Ngày mua hàng</th>
            <th>Tổng thanh toán</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $total = 0;
        ?>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>
                    @foreach($order->products as $product)
                        <a href="{{ route('product-detail', ['id' => $product->id ]) }}">{{ $product->name }}</a><br/>
                    @endforeach
                </td>
                <td>
                    <option>{{ trans('labels.orders.'.$order->status) }}</option>
                </td>
                <td>{{ $order->created_at }}</td>
                <td>{{ number_format($order->total_pay) }}</td>
            </tr>
            <?php $total = $total + $order->total_pay?>
        @endforeach

        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">Tổng tiền</td>
                <td>{{ number_format($total) }}</td>
            </tr>
        </tfoot>
    </table>
</body>
</html>