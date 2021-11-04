<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\client\Question;
class checkUserInforQuestion
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
        $userId = Auth::user()->id;
        $questionCheck = Question::where('user_id',$userId)->first();
        if (empty($questionCheck)) {
           return redirect()->route('user.info');
        }
        return $next($request);
    }
}
