<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use App\Http\Controllers\Controller;
use App\Models\OrderDetail;
use App\Models\Product;
use Carbon\Carbon;
use App\User;
use DB;
class DashboardController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newOrders = Order::where('status', 2)->count();
        $shippingOrders = Order::where('status', 3)->count();
        $outStockproducts = Product::where('quantity_store','<=', 5)->count();
        $newUsers = User::where('created_at','>', Carbon::yesterday())->count();
        $boxes = [
            'newOrders' => [
                'count' => $newOrders,
                'title' => 'Đơn hàng mới',
                'icon'  => 'ion ion-bag',
                'background'  => 'bg-aqua',
                'url'   => route('orders.index',['status' => 2]),
            ],
            'shippingOrders' => [
                'count' => $shippingOrders,
                'title' => 'Đơn hàng đang chuyển',
                'icon'  => 'fa fa-bus',
                'background'  => 'bg-green',
                'url'   => route('orders.index',['status' => 3]),
            ],
            'outStockproducts' => [
                'count' => $outStockproducts,
                'title' => 'Sản phẩm sắp hết',
                'icon'  => 'fa fa-mobile',
                'background'  => 'bg-red',
                'url'   => route('products.index',['status' => 3]),
            ],
            'newUsers' => [
                'count' => $newUsers,
                'title' => 'Thành viên mới',
                'icon'  => 'ion ion-person-add',
                'background'  => 'bg-yellow',
                'url'   => route('users-index',[
                    'date_start' => Carbon::yesterday()->format('Y-m-d H:m:i'),
                    'date_end' => Carbon::now()->format('Y-m-d H:m:i')
                ])
            ],
        ];
        $countOrders = Order::select(
            DB::raw("DATE_FORMAT(created_at, '%m') AS time"),
            DB::raw('IFNULL(COUNT( id ), 0) AS countOrder'),
            DB::raw('SUM(total_pay) AS revenue'),
            'status'
        )
        ->whereIn('status', [ 1,4])
        ->whereBetween('created_at',[ Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])
        ->groupBy('time', 'status')
        ->get()
        ->toArray();
//        $countProducts = OrderDetail::select(
//            DB::raw("DATE_FORMAT(created_at, '%m') AS time"),
//            DB::raw('IFNULL(COUNT( order_id ), 0) AS countOrder'),
//            DB::raw('SUM(quantity) AS countProduct')
//        )
//        ->whereHas('order', function($q){
//            $q->where('status', 4);
//        })
//        ->whereBetween('created_at',[ Carbon::now()->startOfYear(), Carbon::now()->endOfYear()])
//        ->groupBy('time')
//        ->get()
//        ->toArray();
        $calendarOrder = Order::where('status', 3)->get();
        return view('admin.dashboard', compact(['boxes', 'countOrders', 'calendarOrder']));
    }
}
