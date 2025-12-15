<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class AdminAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah session admin ada
        if (!Session::has('is_admin')) {
            // Kalau tidak ada, tendang ke halaman login
            return redirect()->route('admin.login')->with('error', 'Silakan login dulu.');
        }

        return $next($request);
    }
}
