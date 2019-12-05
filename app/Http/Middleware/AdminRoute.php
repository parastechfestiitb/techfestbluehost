<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class AdminRoute
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
        if(session()->has('admin') && session('admin')) {
            if (DB::table('admin_form')->where([
                'admin_id' => session()->get('admin')->id,
                'route_name' => $request->route()->getName()
            ])->count()) return $next($request);
        }
        return new Response(view('underconstruction'));
    }
}
