<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
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
        if(!auth()->check() || !auth()->user()->is_admin) { // klo ngelanggar dia bkn admin
            // abort(403);
            return back();
        }
        return $next($request);
    }
}



// public function handle($request, Closure $next)
//     {
//         if (\Auth::user()->idAdmin != null) {
//             return $next($request);
//         }
//         return redirect()->back();
//     }


//     public function handle(Request $request, Closure $next)
//     {
//         if(!auth()->check() || !auth()->user()->is_admin) { // klo ngelanggar dia bkn admin
//             // abort(403);
//             return back();
//         }
//         return $next($request);
//     }