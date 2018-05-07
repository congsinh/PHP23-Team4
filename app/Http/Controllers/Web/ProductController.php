<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index($name)
    {
        $cate = Category::where('slug',$name)->with(['subcate','productsByParent'])->first();
        $products = $cate->productsByParent()->paginate(15);
        return view('pages.shop',compact(['cate','products']));
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.single_product',['product' => $product]);
    }
}
