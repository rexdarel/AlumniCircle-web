<?php
namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;
class CheckStatusMiddleware
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
        $response = $next($request);
        //If the status is not approved redirect to login 
        if(Auth::check() && Auth::user()->status == 'PENDING'){
            Auth::logout();
            return redirect('/login')->with('errors_login', 'It seems like your registration is under in the verfication process. We will send you a message as soon as we verified your request.');
        }
        return $response;
    }
}