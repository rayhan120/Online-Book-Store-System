<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check())
        {
            
            if(Auth::User()->role=='admin')
              {

              return $next($request);
               }
            else
            
               {
              
                 Auth::logout();

                 return redirect()->route('admin.login')->with('success','you are not admin.');
               }
               

        }else 

        {
        return redirect()->route('admin.login');
        }

    }
}
