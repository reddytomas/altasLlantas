<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    // public function handle($request, Closure $next, $role)
    // {
    //     if (! $request->user()->hasRole($role)) {
    //         return redirect('home');
    //     }
    //     return $next($request);
    // }

    public function handle($request, Closure $next)
    {
        if ($request->user()->role == 9) {
          return $next($request);
        } else {
          return redirect('/home');
        }
    }
}
