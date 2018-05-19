<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;
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
            default :
                $configurations = [
                    '' => ''
                ];
                break;
        }
        $view = view('admin.ajax.components.config',compact(['configurations']))->render();
        return response()->json(['view'=>$view],200);
    }
}

