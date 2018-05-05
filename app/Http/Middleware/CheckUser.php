<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check() && Auth::user()->is_admin === 0){
                return $next($request);
        }else{
            return redirect('/login')->with('error','Vui lòng đăng nhập trước khi sử dụng !');
        }
    }
}
