<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (auth()->guard('web')->check()) {
            if ($role !== 'student') {
                abort(403, 'Unauthorized');
            }
        } elseif (auth()->guard('teacher')->check()) {
            if ($role !== 'teacher') {
                abort(403, 'Unauthorized');
            }
        } else {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}