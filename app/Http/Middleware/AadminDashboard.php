<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AadminDashboard
{
    public function handle(Request $request, Closure $next)
    {
        // Admin Dashboard
        if (Auth()->user()->stutas == 0) {
            return redirect('/404');
        }
        return $next($request);
    }
}
