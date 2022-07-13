<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class middlerware
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->age && $request->age < 18) {
            return redirect('middleware');
        }
        return $next($request);
    }
}
