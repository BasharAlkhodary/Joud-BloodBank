<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsBloodBank
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // إذا كان المستخدم ليس بنك دم
        if (auth()->user()->is_admin != 2) { 
            abort(403, 'Unauthorized');
        }
        return $next($request);
    }
}
