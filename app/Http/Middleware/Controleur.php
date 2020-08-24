<?php

namespace App\Http\Middleware;

use Closure;

class Controleur
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

        if(auth()->user() && (auth()->user()->role == 'admin' )){
            return $next($request);
        }
        return view('layouts.controleur');
        return $next($request);
    }
}
