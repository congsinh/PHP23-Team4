<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

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
            $query = $query->where('id', 'like','%'. $request->search.'%')
                ->orWhere('name', 'like','%'. $request->search.'%')
                ->orWhere('phone', 'like','%'. $request->search.'%')
                ->orWhere('address', 'like','%'. $request->search.'%');
        }
        if(!empty($request->date_start) && !empty($request->date_end)){
                $date_start = $request->date_start;
                $date_end = $request->date_end;
                $query = $query->whereBetween('created_at', [$date_start, $date_end]);
            }
        if($request->ajax()){
            $orders = $query->orderByDesc('created_at')
                ->paginate(10)
                ->appends([
                    'date_start' => $request->date_start,
                    'date_end' => $request->date_end,
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
    public function update(OrderRequest $request, $id)
    {
//        dd($request->all());
        try{
            DB::beginTransaction();
            $order = Order::findOrFail($id);
            $data = $request->all();
            if(!empty($request->del_products)){ // xóa products
                $listDel = explode(',',$request->del_products);
                   $order->products()->detach($listDel);
            }
            $products =  $request->product;
            $totalPay = 0;
            foreach( $products as $id => $quantity){
                $product = Product::findOrFail($id);
                $totalPay += $product->price * $quantity['quantity'];
                $order->products()->updateExistingPivot($id,$quantity);
            }
            $data['status'] = $request->status;
            $data['total_pay'] = $totalPay;
            $order->update($data);
            DB::commit();
            return redirect()->route('orders.index')->with('success' , 'Đã cập nhật thành công !');
        }catch (\Exception $e){
            DB::rollback();
            return redirect()->back()->withInput()->with('error',$e->getMessage());
        }
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
