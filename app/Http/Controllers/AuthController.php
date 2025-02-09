<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function register() {
        return view('auth.register');
    }

    public function register_store(Request $request)
    {

        
        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'phone' => 'required',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password'
        ]);

        $validated['password'] = Hash::make($validated['password']);
        
        $user = User::create($validated);

        return redirect('/login')->with('success', "Account successfully registered.");
        
    }

    public function authenticate(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
         // Avval Userni (bemorni) tekshiramiz
    if ($user = User::where('email', $request->email)->first()) {
        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('main');
        }
    }

    // Keyin Doctorni tekshiramiz
    if ($doctor = Doctor::where('email', $request->email)->first()) {
        if (Auth::guard('doctor')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin');
        }
    }


    if ($admin = Admin::where('email', $request->email)->first()) {  // Admin modelidan foydalanish
        if (Auth::guard('admin')->attempt($credentials)) {  // Admin guard'ni qo‘llash
            $request->session()->regenerate();
            return redirect()->route('admin'); // Adminni bosh sahifasiga yo‘naltirish
        }
    }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    public function logout(Request $request)
{
    Auth::guard('web')->logout();
    Auth::guard('doctor')->logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
 
    return redirect('/');
}
}
