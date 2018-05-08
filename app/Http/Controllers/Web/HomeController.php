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
        $news = Product::with('imageDetail')->limit(3)->get();
        $phones = Product::all()->where('category_id', 2)->take(1);

        return view('pages.home',compact(['products','news', 'phones']));
    }

}
