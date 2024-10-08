<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsStudentCheck
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
        if (session('role') == 'student') {
            return $next($request);
        }

        // Return a proper response object instead of a string
        return response()->view('errors.403', [], 403); // 403 Forbidden status code
    }
}
