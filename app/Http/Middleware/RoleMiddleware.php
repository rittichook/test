<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, string $role)
    {
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);
        }
        return redirect()->route('login')->withErrors(['message' => 'Unauthorized']);

        // abort(403, 'Unauthorized');
    }
}


