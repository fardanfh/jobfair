<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
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
        try {
            $validatedData = Validator::make($request->all(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|min:6',
                // Tidak wajib memasukkan level
            ])->validate();

            // Set level default sebagai "pelamar" jika tidak ada level yang diinput
            $level = $validatedData['level'] ?? 'pelamar';

            // Simpan data user baru
            User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'password' => Hash::make($validatedData['password']),
                'level' => $level,
                'remember_token' => Str::random(60),
            ]);

            return redirect('/')->with('success', 'Register berhasil silakan login.');
        } catch (\Exception $e) {
            // Jika ada kesalahan, redirect kembali dengan pesan error
            return redirect()->back()->withErrors([
                'register_error' => 'Register gagal. Silakan coba lagi.'
            ])->withInput();
        }
    }


    public function login()
    {
        return view('welcome');
    }

    public function loginAksi(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Initialize or increment the failed login attempts counter
        $failedAttempts = $request->session()->get('failed_attempts', 0);

        // Attempt to authenticate with the given credentials
        if (!Auth::attempt($validatedData, $request->boolean('remember'))) {
            // Increment the failed login attempts counter
            $failedAttempts++;
            $request->session()->put('failed_attempts', $failedAttempts);

            // Customize the error message based on the number of failed attempts
            $errorMessage = 'The provided credentials do not match our records.';

            if ($failedAttempts >= 3) {
                $errorMessage = 'Login failed multiple times. Please check your credentials or try again later.';
            }

            // Authentication failed, redirect back with an error message
            return redirect()->back()->withErrors([
                'email' => $errorMessage
            ])->withInput();
        }

        // Reset the failed login attempts counter on successful login
        $request->session()->forget('failed_attempts');

        // Authentication successful, regenerate the session
        $request->session()->regenerate();

        // Redirect to the homepage with a success message
        return redirect('home')->with('success', 'Login Berhasil.');
    }


    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        return redirect('/');
    }
}
