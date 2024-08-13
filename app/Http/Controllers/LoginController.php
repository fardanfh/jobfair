<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // Show the registration form
    public function register()
    {
        return view('components.navbar');
    }

    // Handle registration form submission
    public function registerSimpan(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5',
            'level' => 'required|in:perusahaan,pelamar',
        ])->validate();

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'level' => $validatedData['level'],
        ]);

        return redirect('/')->with('success', 'Register berhasil silakan login.');
    }


    public function login()
    {
        return view('components.navbar');
    }

    public function loginAksi(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (!Auth::attempt($validatedData, $request->boolean('remember_token'))) {
            return redirect()->back()->withErrors([
                'email' => 'The provided credentials do not match our records.'
            ])->withInput();
        }

        $request->session()->regenerate();

        return redirect()->route('home')->with('success', 'Login Berhasil.');
    }


    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
