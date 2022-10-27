<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminPanelMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->role !== 'admin'){
            return redirect()->route('main.index');
        }
        return $next($request);
    }
}
