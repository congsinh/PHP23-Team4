<?php

namespace App\Http\Controllers\Admin;
use Auth;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Cart;
class CartController extends Controller
{
    public function getBuyProduct(Request $request){
        $productBuy = Product::where('id',$request->id)->first();
        $cart = Cart::add(['id'=> $productBuy['id'] ,'name'=>$productBuy['name'],'qty'=>1,'price'=>$productBuy['price'],'options'=>['image'=>$productBuy->imageDetail->first()]]);
        $cartCount = Cart::count();
        $total = $total = Cart::subtotal(0);
        return response()->json([$productBuy,$cart,$cartCount,$total],200);
    }

    public function myCart(){
//        dd(number(Cart::subtotal()));
        $carts = Cart::content();
        return view('pages.cart',compact('carts'));
    }

    public function cartTang(Request $request){
        $cart = Cart::content()->where('rowId',$request->id)->first();
        $cartUpdateTang = Cart::update($request->id, ['qty' => $cart->qty + 1]);
        $cartSub = Cart::subtotal(0);
        $cartCount = Cart::count();
        return response()->json([$cartUpdateTang,$cartSub,$cartCount],200);
    }

    public function cartGiam(Request $request){
        $cart = Cart::content()->where('rowId',$request->id)->first();
        $cartUpdateTang = Cart::update($request->id, ['qty' => $cart->qty - 1]);
        $cartSub = Cart::subtotal(0);
        $cartCount = Cart::count();
        return response()->json([$cartUpdateTang,$cartSub,$cartCount],200);
    }

    public function removeCart(Request $request){
        $cart = Cart::remove($request->id);
        $cartSub = Cart::subtotal(0);
        $cartCount = Cart::count();
        return response()->json([$cart,$cartSub,$cartCount],200);
    }


    public function cartCheckOut(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required'
        ],[
            'name.required' => 'Vui lòng khách hàng nhập tên',
            'phone.required' => 'Vui lòng khách hàng nhập số điện thoại',
            'address.required' => 'Vui lòng khách hàng nhập địa chỉ'
        ]);
        $order = new Order;
        $order->discount =0;
        $order->status = 2;
        $order->name = $request->name;
        $order->phone = $request->phone;
        $order->address = $request->address;
        $order->total_pay = (int) Cart::subtotal(0,'','');
        $order->note = $request->note;
        if(Auth::check()){
            $order->user_id = Auth::user()->id;
        }
        $order->save();
        $carts = Cart::content();
        foreach ($carts as $cart){
            $order->products()->attach($cart->id, ['quantity' => $cart->qty]);
        }

        Cart::destroy();
        return redirect()->back()->with(['flash_message' => 'Bạn Đã CheckOut thành công ']);;
    }
}
