<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // dd($roles);

        $user = Auth::guard('admin')->user()
            ?? Auth::guard('doctor')->user()
            ?? Auth::user();


        if (!$user) {
            return redirect('/login'); // Agar foydalanuvchi autentifikatsiyadan o'tmagan bo'lsa
        }

        if (!in_array($user->role, $roles)) {
            return redirect()->route('login')->with('error', 'Sizga bu sahifaga kirish taqiqlangan.');
        }

        return $next($request);
    }
}
