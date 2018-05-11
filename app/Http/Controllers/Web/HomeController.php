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

}
