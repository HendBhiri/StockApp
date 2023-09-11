<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class AdminMiddleware extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  mixed  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        // if ($request->routeIs('login')) {
        //     return $next($request);
        // }
        if (auth()->check() && auth()->user()->role === 'admin') {
            return $next($request);
        }
        
        abort(403, 'Unauthorized'); // Redirect unauthorized users
    }

    
}

/*
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    /*public function handle(Request $request, Closure $next)
    {
        if (!auth()->check() || !auth()->user()->is_admin && !auth()->user()->is_manager) {
            abort(403);
        }
        return $next($request);
    }*/
//}