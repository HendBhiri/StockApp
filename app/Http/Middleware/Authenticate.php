<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        if ($request->routeIs('login') || $request->routeIs('admin.*')) {
            return null; // Don't redirect for login or admin routes
        }

        return route('login'); // Redirect for other routes
    }
}
