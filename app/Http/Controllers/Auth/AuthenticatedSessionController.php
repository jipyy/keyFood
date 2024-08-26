<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    // public function create(): View
    // {
    //     return view('auth.login');
    // }

    // /**
    //  * Handle an incoming authentication request.
    //  */
    // public function store(LoginRequest $request): RedirectResponse
    // {
    //     // dd('login');
    //     $request->authenticate();

    //     $request->session()->regenerate();

    //     return redirect()->intended(route('home', absolute: false));
    // }

    // /**
    //  * Destroy an authenticated session.
    //  */
    // public function destroy(Request $request): RedirectResponse
    // {
    //     Auth::guard('web')->logout();

    //     $request->session()->invalidate();

    //     $request->session()->regenerateToken();

    //     return redirect('/');
    // }


    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.log-reg');
    }

    /**
     * Handle an incoming authentication request.
     */


    public function store(LoginRequest $request): RedirectResponse
    {
        $credentials = $request->only('phone', 'password');

        // Validasi Phone dan Password
        $validator = Validator::make($credentials, [
            'phone' => 'required|numeric',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            // Jika validasi email atau password gagal
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Cek apakah phone ada di database
        // $user = User::where('email', $credentials['email'])->first();
        $user = User::where('phone', $credentials['phone'])->first();

        if (!$user) {
            // Jika email tidak ditemukan
            return redirect()->back()->withErrors([
                'phone' => 'Phone tidak ditemukan.',
            ])->withInput();
        }

        if (!Auth::attempt($credentials)) {
            // Jika phone ditemukan tetapi password salah
            return redirect()->back()->withErrors([
                'password' => 'Password salah.',
            ])->withInput();
        }


        // Jika email dan password benar
        $request->session()->regenerate();

        // Redirect based on user role
        if (Auth::user()->hasRole('admin')) {
            return redirect()->intended(route('admin.dashboard-main'));
        }

        if (Auth::user()->hasRole('seller')) {
            return redirect()->intended(route('seller-page'));
        }

        // Default redirect if no roles match
        return redirect()->intended(route('home'));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            // Mencari pengguna berdasarkan google_id
            $existingUser = User::where('google_id', $user->id)->first();

            if ($existingUser) {
                // Jika pengguna ada, login
                Auth::login($existingUser);
                return redirect()->intended('/home');
            } else {
                // Jika pengguna tidak ada, buat pengguna baru
                $newUser = User::create([
                    'name' => $user->name,
                    // 'email' => $user->email,
                    'phone' => $user->phone,
                    'google_id' => $user->id,
                    'password' => bcrypt('default_password'), // Atau bisa generate password random
                    // 'email_verified_at' => now(),
                    'phone_verified_at' => now(),
                    // Tambahkan kolom lain yang diperlukan
                ]);

                Auth::login($newUser);

                // Arahkan pengguna ke halaman yang diinginkan setelah login
                return redirect()->intended('/home');
            }
        } catch (\Exception $e) {
            // Tangani kesalahan dengan mengarahkan kembali ke halaman login dan menampilkan pesan error
            return redirect('/log-reg')->withErrors('Error: ' . $e->getMessage());
        }
    }
}
