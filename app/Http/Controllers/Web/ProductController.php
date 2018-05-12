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
        $products = $cate->productsByParent()->paginate(16);
        return view('pages.shop',compact(['cate','products']));
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        $related = Product::where('category_id',$product->category_id)->take(5)->get();
        $topsales = Product::where('category_id',$product->category_id)
                            ->orderByDesc('sales')
                            ->take(5)
                            ->get();
        return view('pages.single_product',compact(['product', 'related', 'topsales']));
    }
    public function getProductsBySub($slug){
        $cate = Category::where('slug',$slug)->first();
        $products = $cate->products()->paginate(16);
        $view = view('pages.layouts.products',compact(['products']))->render();
        return response()->json(['view' => $view ], 200);
    }
}
