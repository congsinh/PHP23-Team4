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
                $configurations = [
                    'Màn hình' => '',
                    'Hệ điều hành' => '',
                    'Camera sau' => '',
                    'Camera trước' => '',
                    'CPU' => '',
                    'RAM' => '',
                    'Thẻ SIM' => '',
                    'Dung lượng pin' => '',
                ];
                break;
            case '2':
                $configurations = [
                    'CPU' => '',
                    'RAM' => '',
                    'Ổ cứng' => '',
                    'Màn hình' => '',
                    'Cổng kết nối' => '',
                    'Hệ điều hành' => '',
                    'Thiết kế' => '',
                    'Kích thước' => '',
                ];
                break;
            case '3':
                $configurations = [];
                break;
        }
        $view = view('admin.ajax.configuration.config',compact(['configurations']))->render();
        return response()->json(['success' => true, 'view'=>$view]);
    }


    public function filterProducts(){
//        $query = User::query();
//
//        if ($this == $that) {
//        $query = $query->where('this', 'that');
//        }
//
//        if ($this == $another_thing) {
//            $query = $query->where('this', 'another_thing');
//        }
//
//        if ($this == $yet_another_thing) {
//            $query = $query->orderBy('this');
//        }
//
//        $results = $query->get();
    }
}

