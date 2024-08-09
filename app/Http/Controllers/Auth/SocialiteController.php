<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        try {
            $socialUser = Socialite::driver('google')->stateless()->user();
        } catch (\Exception $e) {
            return redirect('/login')->withErrors(['error' => 'Unable to login using Google.']);
        }

        // Cari user berdasarkan google_id atau email
        $registeredUser = User::where('google_id', $socialUser->id)->orWhere('email', $socialUser->getEmail())->first();

        // Jika user tidak ditemukan, buat user baru
        if (!$registeredUser) {
            // Pastikan nomor telepon tidak null
            $phone = '0000000000'; // Default phone number jika tidak ada
            if (isset($socialUser->phone)) {
                $phone = $socialUser->phone;
            }

            // Cek apakah nomor telepon sudah ada di database
            $phoneExists = User::where('phone', $phone)->exists();
            if ($phoneExists) {
                // Nomor telepon sudah ada, tetapi kita tidak boleh menggunakannya untuk registrasi baru
                return redirect('/log-reg')->withErrors(['error' => 'The phone number has already been taken.']);
            }

            $user = User::create([
                'name' => $socialUser->getName(),
                'email' => $socialUser->getEmail(),
                'password' => Hash::make('123'), // atau gunakan password yang lebih aman
                'google_token' => $socialUser->token,
                'google_refresh_token' => $socialUser->refreshToken,
                'google_id' => $socialUser->id,
                'phone' => $phone,
            ]);

            Auth::login($user);

            return redirect('/home');
        }

        // User ditemukan, login
        Auth::login($registeredUser);

        return redirect('/home');
    }
}
