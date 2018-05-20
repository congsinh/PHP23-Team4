<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        if(Auth::viaRemember() || Auth::check()){
            return redirect('admin/dashboard');
        }
        return view('admin.login');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        $remember = $request->has('remember') ? true : false;
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'is_admin'=>1],$remember)){
            return redirect('admin/dashboard');
        }
        else{
            return redirect('admin/login')->with('errors','Đăng nhập không thành công !');
        }
    }


    public function logout(){
        Auth::logout();
        return redirect('admin/login')->with('success','Đăng xuất thành công!');
    }
    

}
