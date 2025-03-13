<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DashboardMiddleware
{
   
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() and auth()->user()->profile == "admin") {
            return $next($request);
        }else{
            return redirect()->route("login");
        }

    }
}
