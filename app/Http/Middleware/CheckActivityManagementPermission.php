<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckActivityManagementPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $user = auth()->user();

        // Check if the user has 'student-management' access right with status '1'
        foreach ($user->accessRights as $accessRight) {
            if ($accessRight->name == 'calendar-activity-management' && $accessRight->status == '1') {
                return $next($request);
            }
        }

        // If the conditions aren't met, you can return a response or redirect as needed.
        return redirect()->route('dashboard-index')->withErrors(['message' => 'Unauthorized']);
    }
}
