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
   /* public function menu()
    {
        $categories = Category::select('id','name','slug','parent_id')->get();
//        $categories = Category::where('parent_id', null)->get();
        return view('pages.home',["categories"=>$categories]);
    }*/
//    public function subMenu()
//    {
//        $id_cate = Category::find();
//        $categories = Category::where('parent_id', null)->get();
//        echo "<ul>";
//        foreach ($categories as $category)
//        {
//            if ($category["parent_id" == $id_cate]){
//                echo "<li><a href='#'>".$categories['name'].'</a>';
//                $this->subMenu($categories,$category["id"]);
//                echo "</li>";
//            }
//        }
//        echo "</ul>";
//
//    }
//
    public function menu()
    {
        $categories = Category::with('children')->where('parent_id', null)->get();
        return view('pages.home',['categories'=>$categories]);
    }

}
