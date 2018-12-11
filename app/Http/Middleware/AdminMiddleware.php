<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if(Auth::guard('admins')->check()){
            $user = Auth::guard('admins')->user();
            if(Auth::guard('admins')->user()->status == 1){
                if($user->group_id == 1 || $user->group_id == 2)
                    return $next($request);
                else
                    return redirect('login');
            }
        }else
            return redirect('login');
        
    }
}
