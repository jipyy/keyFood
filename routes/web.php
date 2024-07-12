<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
Route::get('/', function () {
    return view('welcome');
});

// Custom login and registration form route
Route::get('/log-reg', function () {
    return view('auth.log-reg');
})->name('log-reg');

// Authentication Routes
Route::get('/login', function() {
    return view('auth.log-reg');
})->middleware('guest')->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');

// Registration Routes
Route::get('/register', function() {
    return view('auth.log-reg');
})->middleware('guest')->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');


Route::get('/', function () {
    return view('welcome');
});

// <<<<<<< HEAD

// Route::view('/home', 'home')->name('home');

// Route::view('/B-login-register', 'B-login-register')->name('B-login-register');


Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');

//bawaaan breeze
// =======
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
// >>>>>>> 8e30752d7c85bcbba34962433871e1b895b94226

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
