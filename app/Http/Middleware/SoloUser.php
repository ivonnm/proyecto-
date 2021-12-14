<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SoloUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
      //  return $next($request);
      switch(Auth::user()->tipo){
        case ('1'):
            return redirect('home');//si es admin se va al home
        break;
            case ('2'):
            return $next($request); //si es usuario normal redirige a su vista user
        break;
      }
    }
}
