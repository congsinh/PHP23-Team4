@extends('admin.layouts.master')
@section('title')
    Đơn đặt hàng
@endsection
@section('action')
    Chi tiết
@endsection
@section('content')

    <div class="col-lg-12" style="padding-bottom:120px">
        @include('admin.layouts.notify')
        <form action="{{route('orders.update',['id' => $order->id])}}" method="POST" class="form-horizontal" id="form-update">
            @method('put')
            @csrf
            <div class="row">

                <div class="box box-info">
                    <div class="box-header with-border row">
                        <h3 class="box-title col-sm-7">Thông tin đơn hàng: ( Mã: {{  $order->id }})</h3>
                        <div class="row pull-right col-sm-5" >
                            <div class="col-sm-4 text-right">
                                <a href="{{ route('order-print',['id' => $order->id]) }}" class="pr-0" id="order-print" >
                                    <i class="fa fa-print" style="font-size:16px"></i>&nbsp;In hóa đơn
                                </a>
                            </div>
                            <div class="col-sm-8 row text-right">
                                <label for="status" class="col-sm-4 pr-0 ">Tình trạng</label>
                                <div class="col-sm-8">
                                        <select name="status" id="status">
                                            @foreach($listStatus as $key => $status)
                                                <option value="{{ $key }}" {{ ($order->status == $key) ? 'selected' : ""}}>{{ $status }}</option>
                                            @endforeach
                                        </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="col-sm-5">
                            <div class="">
                                <label for="name" class="col-sm-3 pr-0 pt-5 ">Tên</label>
                                <div class="col-sm-9">
                                    <input name='name' type="text" class="form-control none-style pl-2" id="name"
                                           value="{{ old('name') ? old('name') : $order->name}}">
                                </div>
                            </div>
                            <div class="">
                                <label for="phone" class="col-sm-3 pr-0 pt-5">Số điện thoại</label>
                                <div class="col-sm-9">
                                    <input name='phone' type="text" class="form-control none-style pl-2" id="phone"
                                           value="{{ old('phone') ? old('phone') : $order->phone}}">
                                </div>
                            </div>
                            <div class="">
                                <label for="address" class="col-sm-3 pr-0 pt-5">Địa chỉ</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control none-style pl-2 autosize" style="resize: none;"
                                              id="address" name="address">{!! old('address') ? old('address') : $order->address  !!}</textarea>
                                </div>
                            </div>
                            <div class="">
                                <label for="date" class="col-sm-3 pr-0 pt-5 ">Ngày đặt</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control none-style pl-2" id="date"
                                           value="{{$order->created_at}}" readonly>
                                </div>
                            </div>

                            <div class="">
                                <label for="note" class="col-sm-3 pr-0 ">Ghi chú</label>
                                <div class="col-sm-9">
                                    <textarea name='note' class="form-control none-style pl-2 autosize" style="resize: none;"
                                              id="note">{!! old('note') ? old('note') : $order->note  !!}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <table class="table table-bordered table-hover text-center">
                                <thead>
                                <tr>
                                    <td>Mã SP</td>
                                    <td>Sản phẩm</td>
                                    <td>Số lượng</td>
                                    <td>Giá</td>
                                    @if($order->status === 2)
                                    <td>Hủy</td>
                                    @endif
                                </tr>
                                </thead>
                                <tbody>
                                {{--lưu danh sách  xóa product --}}
                                <input type="hidden" name="del_products" id="del_product"/>
                                @forelse($order->products as $key => $product)
                                    <tr product-id="{{$product->id}}">
                                        <td>{{$product->id}}</td>
                                        <td>
                                            <a href=" {{ route('products.show', ['id' => $product->id ]) }}">{{ $product->name }}</a>
                                        </td>
                                        <td>
                                            <input type="number" name="product[{{$product->id}}][quantity]" class='quantity '
                                                   data-quantity="{{$key}}" min="1"
                                                   value="{{$product->pivot->quantity}}"/>
                                        </td>
                                        <td>
                                            <input type='text' class="price none-style "
                                                   data-price="{{$key}}"
                                                   price='{{$product->price}}'
                                                   value="{{number_format($product->price * $product->pivot->quantity)}}" readonly/>&nbsp;VNĐ
                                        </td>
                                        @if($order->status === 2)
                                        <td>
                                            <span class="glyphicon glyphicon-trash delete-product"
                                                  aria-hidden="true" data-del="{{$product->id}}"></span>

                                        </td>
                                        @endif
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="3"><strong>Tổng tiền</strong></td>
                                    <td colspan="2"><strong><span class="total_pay"></span></strong></td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                @if($order->status !== 1 && $order->status !== 4)
                    <a href="" class="btn btn-success" style="margin:2px !important" data-toggle="modal" id="show-confirm">
                        Cập nhật
                    </a>
                @endif

                <a href="{{ url()->previous() }}" class="btn btn-default">Quay lai</a>
            </div>
        </form>
    </div>
    <!-- Your code to create an instance of Fine Uploader and bind to the DOM/template
    ====================================================================== -->
@include('admin.orders.modal-confirm')
@endsection
@section('script')
    <script>

        $(document).ready(function () {

            const Format = wNumb({
                decimals: 3,
                thousand: ',',
                mark: '',
            });

            function total_pay() {
                var total_pay = 0;
                $('input.price').each(function (i, obj) {
                    var price = Format.from($(obj).val());
                    total_pay += +price;
                });
                $('.total_pay').text(Format.to(total_pay) + 'VND');
            }
            total_pay();

            //auto resize textarea
            jQuery.fn.extend({
                autoHeight: function () {
                    function autoHeight_(element) {
                        return jQuery(element)
                            .css({'height': 'auto', 'overflow-y': 'hidden'})
                            .height(element.scrollHeight);
                    }

                    return this.each(function () {
                        autoHeight_(this).on('input', function () {
                            autoHeight_(this);
                        });
                    });
                }
            });
            $('textarea.autosize').autoHeight();

            //event change quantity
            $('.quantity').on('change', function () {
                var index = $(this).attr('data-quantity');
                var ipt_price = $("input[data-price='" + index + "']");
                var quantity = $(this).val();
                var price = quantity * ipt_price.attr('price');
                ipt_price.val(Format.to(price));
                total_pay();
            });

            //event onclick trash
            var list_del = [];
            $('.delete-product').on('click',function(){
                var id_product = $(this).attr('data-del');
                list_del.push(id_product);
                $('input#del_product').val(list_del);
                $('tr[product-id="' + id_product + '"]').remove();
                total_pay();
            });
        });
        //confirm change status order
        $('#show-confirm').on('click',function(){
            $('#modal-confirm').modal('show');
            $('#status_confirm').text($('#status option:selected').text());
            $("#btnConfirm").on("click", function () {
                $('#form-update').submit();
            });
        });

        //print order
        $('#order-print').printPage();
    </script>

@endsection




