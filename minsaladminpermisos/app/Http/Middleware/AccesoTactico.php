<?php

namespace minsaladminpermisos\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AccesoTactico
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
        if (Auth::user()->type=="tactico" || Auth::user()->type=="adminsistema" || Auth::user()->type=="estrategico") {
            return $next($request);
        }else{
            //return redirect()->guest('/');
            abort(401);
        }
    }
}
