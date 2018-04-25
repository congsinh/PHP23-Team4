<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function menu()
    {
        //        $categories = Category::select('id','name','slug','parent_id')->get();
        $categories = Category::where('parent_id', null)->get();
        return view('pages.home',["categories"=>$categories]);
    }
}
