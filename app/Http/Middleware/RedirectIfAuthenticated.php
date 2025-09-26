<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $user = Auth::guard($guard)->user();

                // هنا نستخدم خاصية hasRole اللي سنعرفها لاحقًا
                if ($user->is_admin === 1) {
                    return redirect()->route('admin.dashboard');
                } elseif ($user->is_admin === 2) {
                    return redirect()->route('bloodbank.dashboard');
                } elseif ($user->is_admin === 0) {
                    return redirect()->route('donor.home');
                } else {
                    return redirect('/'); // صفحة افتراضية عامة
                }
            }
        }

        return $next($request);
    }
}
