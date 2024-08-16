<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class OtpWaVerificationController extends Controller
{

    public function verify(Request $request)
    {
        $request->validate([
            'otp' => 'required|string|size:6',
        ]);

        if ($request->otp == Session::get('otp')) {
            // OTP valid, buat user baru
            $userData = Session::get('temp_user');
            $user = User::create($userData);

            event(new Registered($user));

            Auth::login($user);

            // Hapus data sementara dari session
            Session::forget(['temp_user', 'otp']);

            return redirect(route('home', absolute: false));
        } else {
            // OTP tidak valid
            return back()->withErrors(['otp' => 'OTP tidak valid']);
        }
    }
}