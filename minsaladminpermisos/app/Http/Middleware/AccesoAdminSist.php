<?php

namespace minsaladminpermisos\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AccesoAdminSist
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
        if (Auth::user()->type=="adminsistema") {
            return $next($request);
        }else{
            //return redirect()->guest('/');
            abort(401);
        }
    }
}
