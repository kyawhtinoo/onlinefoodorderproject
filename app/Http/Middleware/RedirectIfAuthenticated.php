<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
         if (Auth::guard($guard)->check()) {
            // return redirect(RouteServiceProvider::HOME);
            $roles=auth()->user()->getRoleNames();

            switch ($roles[0]) {
            case 'admin':
                     return redirect()->route('dashboard');
                break;

            case 'customer':
                     return redirect()->route('index');
        }
        
        
    }
    return $next($request);
 }
}