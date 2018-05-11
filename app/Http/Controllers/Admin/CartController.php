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
        $total = $total = Cart::total();
        return response()->json([$productBuy,$cart,$cartCount,$total],200);
    }
}
