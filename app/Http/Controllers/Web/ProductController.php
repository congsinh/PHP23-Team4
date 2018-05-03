<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    function __construct()
    {
        $categories = Category::with('children')->where('parent_id', null)->get();
        view()->share('categories', $categories);
    }

    public function index($name)
    {
        $products = Category::where('slug',$name)->with('products')->get();
        return view('pages.shop',['products' => $products]);
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.single_product',['product' => $product]);
    }




}
