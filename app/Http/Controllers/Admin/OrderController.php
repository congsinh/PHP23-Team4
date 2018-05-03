<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class OrderController extends Controller
{
    public function __construct()
    {
        $listStatus = Order::getListStatuses();
        $listStatusWithLabels = Order::getListStatusWithBootstrapLabels();
        return view()->share(['listStatus' => $listStatus, 'listStatusWithLabels' => $listStatusWithLabels]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Order::query();
        if($request->has('status') && !empty($request->status)){
            $query = $query->where('status',$request->status);
        }
        if ($request->has('search') && !empty($request->search)) {
            $query = $query->where('name', 'like','%'. $request->search.'%')
                ->orWhere('phone', 'like','%'. $request->search.'%')
                ->orWhere('address', 'like','%'. $request->search.'%');
        }
        if($request->has('ago') && !empty($request->ago)){
                switch ($request->ago){
                    case 'hour':
                        $time = strtotime('-1 hour');
                        break;
                    case 'day':
                        $time = strtotime('-1 day');
                        break;
                    case 'week':
                        $time = strtotime('-1 week');
                        break;
                    case 'month':
                        $time = strtotime('-1 month');
                        break;
                }
                $from = date('Y-m-d h:i:s', $time);
                $to = date('Y-m-d h:i:s');
                $query = $query->whereBetween('created_at', [$from, $to]);
            }
        if($request->ajax()){
            $orders = $query->orderByDesc('created_at')
                ->paginate(10)
                ->appends([
                    'ago' => $request->ago,
                    'status' => $request->status,
                    'search' => $request->search,
                    ]);
            $view = view('admin.ajax.components.orders',compact(['orders']))->render();
            return response()->json(['view' => $view],200);
        }
        $orders = $query->orderByDesc('created_at')->paginate(10);
        return view('admin.orders.list',compact([
            'orders',
            'listStatus',
            'listStatusWithLabels',
        ]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relate = [
            'products',
            'user',
        ];
        $order = Order::with($relate)->findOrFail($id);
        return view('admin.orders.detail',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route('orders.index')->with(['success' => 'Đã xóa thành công !']);
    }
}
