<div class="modal fade bd-example-modal-sm" id="modal-confirm" tabindex="-2" role="dialog" aria-labelledby="titlemodal2"
     aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="titlemodal2">Xác nhận !</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <h5>Có phải ban muốn chuyển trạng thái đơn hàng từ <span class="text-primary">{{trans('labels.orders.'.$order->status)}}</span> sang <span class="text-primary" id="status_confirm"></span> không?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info btn-sm" id="btnConfirm">Vâng</button>
                <button type="button" class="'btn btn-secondary btn-sm" data-dismiss="modal">Không</button>
            </div>
        </div>
    </div>
</div>