<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth')->except('logout');
//    }
    public function getLogin()
    {
        if(Auth::viaRemember() || Auth::check() && Auth::user()->is_admin === 0){
            return redirect('/');
        }
        return view('auth.login');
    }

    public function userLogin(Request $request)
    {
        $remember = $request->has('remember') ? true : false;
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password,'is_admin'=>0],$remember)){
            return redirect('/');
        }
        else{
            return redirect()->back();
        }
    }

    public function userLogout(){
        Auth::logout();
        return redirect('/');
    }
}
