<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckHomeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(empty(Auth::user()->email && Auth::user()->phone_number && Auth::user()->zip_code 
            && Auth::user()->address && Auth::user()->subcriber)) {
                return redirect()->route('term');
            }
        return $next($request);
    }
}
