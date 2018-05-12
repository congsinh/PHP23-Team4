<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $smartphones = Category::with(['productsByParent' => function($q){
            $q->orderBy('sales','desc')->take(10);
        }])->findOrFail(1);
  //      $laptops = Product::where('category_id',2)->orderBy('sales','desc')->take(10)->get();
  //      $accessories = Product::where('category_id',3)->orderBy('sales','desc')->take(10)->get();
        $products = [
            $smartphones->productsByParent,
           // $laptops,
           // $accessories
        ];
        $news = Product::with('imageDetail')->limit(3)->get();
        $phones = Product::all()->where('category_id', 2)->take(1);
        return view('pages.home',compact(['products','news', 'phones']));
    }
  
    public function search(Request $request){
        $key = $request->key;
        $offset = $request->offset;
        $offset = !empty($offset) ? $offset + 1  : 0 ;
        $total = Product::where('name', 'like', '%' . $key . '%')->count();
        $result = Product::where('name', 'like', '%' . $key . '%')
                           ->orderBy('created_at','desc')
                           ->offset($offset)
                           ->take(5)
                           ->get();
        $view = view('pages.layouts.search',compact('result'))->render();
        return response()->json(['view' => $view,'total' => $total], 200);
    }

}
