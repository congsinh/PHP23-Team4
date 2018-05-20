<?php
/**
 * Created by PhpStorm.
 * User: sinh
 * Date: 5/1/18
 * Time: 5:51 PM
 */
return [
    'products' => [
        1 => 'Còn hàng',
        2 => 'Hết hàng',
        3 => 'Sắp hết hàng',
    ],
    'orders' => [
        1 => 'Đã hủy',
        2 => 'Chờ duyệt',
        3 => 'Đang chuyển hàng',
        4 => 'Đã thanh toán',
    ],
    'status-product' => [
        1 => '<div class="alert alert-success status-product"><strong>Còn hàng</strong></div>',
        2 => '<div class="alert alert-danger status-product"><strong>Hết hàng</strong></div>',
    ],
    'status-order' => [
        1 => '<span class="label label-default label-draft">Đã hủy</span>',
        2 => '<span class="label label-danger label-draft">Chờ duyệt</span>',
        3 => '<span class="label label-primary label-draft">Đang chuyển hàng</span>',
        4 => '<span class="label label-success label-draft">Đã thanh toán</span>',
    ],
];