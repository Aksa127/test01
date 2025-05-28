<?php

namespace App\Http\Controllers;

// use App\Models\User;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    // Show Login Form
    public function loginForm()
    {
        return view('login');
    }

    // Handle Login
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('student')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    // Show Register Form
    public function registrationForm()
    {
        return view('register');
    }

    // Handle Register
    public function register(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:students'],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

        student::create([
            'name' => $request->name,
            'email'=> $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Berhasil daftar, silakan login.');
}


}
