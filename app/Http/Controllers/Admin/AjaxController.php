<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class AjaxController extends Controller
{
    public function getConfiguration(Request $request){
        $category = Category::findOrFail($request->id)->category->id;
        switch ($category){
            case '1':
                $view = view('admin.ajax.configuration.smartphone')->render();
                break;
            case '2':
                $view = view('admin.ajax.configuration.smartphone')->render();
                break;
            case '3':
                $view = view('admin.ajax.configuration.smartphone')->render();
                break;
        }
        return response()->json(['success' => true, 'view'=>$view]);
    }
}
