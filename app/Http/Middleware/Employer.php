<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Employer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next, $guard = null)
     {
         if (Auth::guard($guard)->guest()) {
             if ($request->ajax() || $request->wantsJson()) {
                 return response('Unauthorized.', 401);
             } else {
                 return redirect()->guest('login');
             }
         }else {
           if(Auth::user()->type===1)
           {
             return $next($request);
           }
           elseif(Auth::user()->type==2)
           {
             return $next($request);
           }
           elseif(Auth::user()->type==3)
           {
             return $next($request);
           }
           else {
             return redirect()->guest('home');
           }
         }


     }
}
