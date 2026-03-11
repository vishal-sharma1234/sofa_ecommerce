<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
// use App\Models\User;

class AdminMiddleware
{
    public function handle($request, Closure $next)
    {

        // dd(User::role('admin')->get());

        // Check if user is logged in AND is admin
        if (Auth::check() && Auth::user()->hasRole('admin')) {
            return $next($request);
        }

        // If not admin, redirect (to home or login)
        return redirect('/')->with('error', 'You are not authorized to access this page.');
    }
}
