<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class AdminLogin
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
        if(session()->has('admin') && session('admin'))
            return $next($request);
        else
            return abort(404);
    }
}
