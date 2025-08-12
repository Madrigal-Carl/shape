<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Roddy\FirestoreEloquent\Auth\FAuth;

class RoleRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // If NOT authenticated
        if (!FAuth::check()) {
            // Allow only `/`
            if ($request->path() !== '/') {
                return redirect('/');
            }
            return $next($request);
        }

        // If authenticated
        $user = FAuth::user();

        // Redirect based on role
        if ($user->role === 'instructor' && !$request->is('instructor')) {
            return redirect('/instructor');
        }

        if ($user->role === 'admin' && !$request->is('admin')) {
            return redirect('/admin');
        }

        return $next($request);
    }
}
