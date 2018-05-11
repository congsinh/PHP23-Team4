<?php

namespace App\Http\Controllers\Admin;

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
        return response()->json($cart,200);
    }
}
