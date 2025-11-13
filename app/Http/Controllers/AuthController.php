<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        return view('backoffice.login');
    }

    // public function loginaksi(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //     ]);

    //     $credentials = [
    //         'username' => $request->username,
    //         'password' => $request->password,
    //     ];

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect()->route('dashboard');
    //     }

    //     return back()->with('error', 'Username atau password salah!');
    // }

    // public function loginaksi(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required',
    //         'g-recaptcha-response' => 'required',
    //     ]);

    //     $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
    //         'secret' => env('RECAPTCHA_SECRET_KEY'),
    //         'response' => $request->input('g-recaptcha-response'),
    //     ]);

    //     $result = $response->json();
    //     dd($result);
    //     if (!($result['success'] ?? false) || ($result['score'] ?? 0) < 0.5) {
    //         return back()->with('error', 'Verifikasi reCAPTCHA gagal. Silakan coba lagi.');
    //     }

    //     // 🔹 Auth attempt
    //     $credentials = [
    //         'username' => $request->username,
    //         'password' => $request->password,
    //     ];

    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         return redirect()->route('dashboard');
    //     }

    //     return back()->with('error', 'Username atau password salah!');
    // }
    public function loginaksi(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
            'g-recaptcha-response' => 'required',
        ]);

        // Debug: lihat token yang datang
        // dd($request->input('g-recaptcha-response'));

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret_key'),
            'response' => $request->input('g-recaptcha-response'),
        ]);

        $result = $response->json();

        // Debug hasil verifikasi Google

        if (!($result['success'] ?? false)) {
            return back()->with('error', 'Verifikasi reCAPTCHA gagal: ' . implode(', ', $result['error-codes'] ?? []));
        }

        // Optional: periksa action & score (untuk keamanan)
        // if (($result['action'] ?? '') !== 'login') { ... }

        if (($result['score'] ?? 0) < 0.5) {
            return back()->with('error', 'Kemungkinan bot (skor rendah). Score: ' . ($result['score'] ?? 0));
        }

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Username atau password salah!');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

}
