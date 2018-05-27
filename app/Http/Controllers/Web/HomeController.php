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
        $laptops = Category::with(['productsByParent' => function($q){
            $q->orderBy('sales','desc')->take(10);
        }])->findOrFail(2);
        $accessories = Category::with(['productsByParent' => function($q){
            $q->orderBy('sales','desc')->take(10);
        }])->findOrFail(3);
        $products = [
            $smartphones->productsByParent,
            $laptops->productsByParent,
            $accessories->productsByParent
        ];
        $recently = Product::orderByRaw("RAND()")->limit(3)->get();
        $news = Product::with('imageDetail')->limit(3)->get();
        $new_products = Product::all()->sortByDesc('sales')->take(3);
        return view('pages.home',compact(['products','news', 'new_products','recently']));
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
