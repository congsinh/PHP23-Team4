<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class ProductDetailController extends Controller
{
    function __construct()
    {
        $categories = Category::with('children')->where('parent_id', null)->get();
        view()->share('categories', $categories);
    }
    public function index()
    {
        $products = Product::all();
        return view('pages.single_product',['products' => $products]);
    }


}
