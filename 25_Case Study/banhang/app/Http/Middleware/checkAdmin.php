<?php

namespace App\Http\Middleware;

use Closure;

class checkAdmin
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
        if (auth()->check())
        {
 
           if(auth()->user()->role > 1 )
           {
                return $next($request);
           }
           else
           {
               return redirect('sanpham');
           }
      }
 
        return redirect('login');
        
     }
    
}
