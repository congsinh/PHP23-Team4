<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class PageController extends Controller
{
    function __construct()
    {
        $categories = Category::with('children')->where('parent_id', null)->get();
        view()->share('categories', $categories);
    }

    public function home()
    {
        return view('pages.home');
    }
    public function shop()
    {
        return view('pages.shop');
    }
    public function lastedProduct()
    {
        $products = Product::all()->sortByDesc('created_at')->take(10);
        return view('pages.home',['products' => $products]);
    }
    public function detail()
    {
        return view('pages.single_product');
    }
}
