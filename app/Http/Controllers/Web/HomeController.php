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
        $products = Product::all()->sortByDesc('created_at')->take(10);
        return view('pages.home',['products' => $products]);
    }

}
