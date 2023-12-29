<?php

namespace App\Http\Middleware\Role;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class SuperAdminMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->user_role == 1) {
            return $next($request);
        }
        return response()->json(['message' => 'Unauthorized.'], 401);
    }
}
