<?php

namespace App\Http\Middleware\Role;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleAdminAksess
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();

        // Cek apakah pengguna terotentikasi
        if (!$user) {
            return response()->json(['message' => 'Anda harus login untuk mengakses halaman ini.'], 401);
        }

        // Cek apakah peran pengguna adalah super admin atau admin
        if ($user->user_role == 1 || $user->user_role == 2) {
            return $next($request);
        }

        return response()->json(['message' => 'Anda tidak memiliki izin untuk mengakses halaman ini.'], 401);
    }
}
