<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class TwoFAMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (is_null(auth()->user()->phone_verified_at)){
            return back()->with('success', 'You have not passed TwoFA.');
        }
        return $next($request);
    }
}
