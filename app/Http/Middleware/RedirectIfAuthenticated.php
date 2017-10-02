<?php

namespace App\Http\Middleware;

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
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/forums');
        // }
        //If the status is not approved redirect to login 
        if(Auth::guard($guard)->check() && Auth::user()->status == 'PENDING'){
            Auth::logout();
            return redirect('/welcome')->with('errors', 'Your error text');
        }

        return $next($request);
    }
}
