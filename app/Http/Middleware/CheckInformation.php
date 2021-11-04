<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckInformation
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
        if(!empty(Auth::user()->email && Auth::user()->phone_number && Auth::user()->zip_code 
        && Auth::user()->address && Auth::user()->subcriber)) {
            return redirect()->route('myPage');
        }
        return $next($request);
    }
}
