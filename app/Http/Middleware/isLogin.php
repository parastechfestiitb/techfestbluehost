<?php

namespace App\Http\Middleware;

use Closure;

class isLogin
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
        //http/kernel.php me jake changes karne parte hai
        if(!session()->has('email')) return redirect()->route('login');
        else return $next($request);
    }
}
