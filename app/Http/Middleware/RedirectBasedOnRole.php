<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RedirectBasedOnRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check()) {
            $user = auth()->user();
            
            // Redirect based on user role
            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard');
            } elseif ($user->hasRole('trainer')) {
                return redirect()->route('trainer.dashboard');
            } elseif ($user->hasRole('facility')) {
                return redirect()->route('facility.dashboard');
            } elseif ($user->hasRole('vendor')) {
                return redirect()->route('vendor.dashboard');
            } elseif ($user->hasRole('trainee')) {
                return redirect()->route('trainee.dashboard');
            }
        }

        return $next($request);
    }
}
