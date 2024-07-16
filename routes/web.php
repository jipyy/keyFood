<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductOrderController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('home');
});

// Custom login and registration form route
Route::get('/log-reg', function () {
    return view('auth.log-reg');
})->name('log-reg');

// Authentication Routes
Route::get('/login', function() {
    return view('auth.log-reg');
})->middleware('guest')->name('login');

Route::get('/contact-us', function() {
    return view('contact-us');
});

Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');

// Registration Routes
Route::get('/register', function() {
    return view('auth.log-reg');
})->middleware('guest')->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');

//batas andika

// <<<<<<< HEAD

Route::view('/home', 'home')->name('home');


//ABAIKAN COMENT TP JGN DI HAPUS

// Route::view('/B-login-register', 'B-login-register')->name('B-login-register');
// Route::get('/home', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('home');
// Route::get('/', function () {
//     return view('');
// })->middleware(['auth', 'verified'])->name('');


// ROUTE SELLER PAGE
Route::prefix('seller')->name('seller.')->group(function(){
    Route::resource('products', ProductController::class)->middleware('role:seller');
});

// ROUTE ADMIN  PAGE
Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('categories', CategoryController::class)->middleware('role:admin');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';

Route::prefix('admin')->name('admin.')->group(function(){
    Route::resource('products', ProductController::class);
    Route::resource('products_orders', ProductOrderController::class);
    Route::resource('categories', CategoryController::class);
});

Route::prefix('seller')->name('seller.')->group(function(){
    Route::resource('products', ProductController::class);
    Route::resource('products_orders', ProductOrderController::class);
});

Route::get('/dashboard', function () {
    return 'This is the dashboard route.';
})->name('dashboard');
