<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RecaptchaFront
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->input('g-recaptcha-response');

        if (!$token) {
            return $next($request);
        }

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => config('services.recaptcha.secret_key'),
            'response' => $token,
        ]);

        $result = $response->json();

        if (!($result['success'] ?? false) || ($result['score'] ?? 0) < 0.5) {
            abort(403, 'Verifikasi reCAPTCHA gagal.');
        }

        return $next($request);
    }
}

