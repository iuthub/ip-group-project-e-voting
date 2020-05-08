<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class isAdmin
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
        if(Auth::guest() || auth()->user()->is_admin == 0){
            return redirect('/')->with('error', "You don't have admin access.");
        }
        if(auth()->user()->is_admin == 1){
            return $next($request);
        }
    }
}
