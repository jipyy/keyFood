<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ProductOrderController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\RoleRequestController;
use App\Http\Controllers\SellerEditController;

Route::get('/', function () {
    return view('home');
});

// Custom login and registration form route
Route::get('/log-reg', function () {
    return view('auth.log-reg');
})->name('log-reg');

// Authentication Routes
Route::get('/login', function () {
    return view('auth.log-reg');
})->middleware('guest')->name('login');

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/seller-edit', [SellerEditController::class, 'index']);

Route::get('/faq', function () {
    return view('faq');
});
Route::get('/coba', function () {
    return view('coba_wa');
});
Route::get('/product-slider', [ProductController::class, 'showProductSlider']);

Route::get('/categories', function () {
    return view('categories');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/edit-profile', function () {
    return view('edit-profile');
});

Route::get('/seller-page', function () {
    return view('seller-edit');
});

Route::get('/stores', function () {
    return view('stores');
});

Route::get('/profile-user', function () {
    return view('/profile-user');
});

Route::get('/detailed-store', function () {
    return view('halaman-toko');
});

Route::get('/term-condition', function () {
    return view('term-condition');
});

Route::post('/login', [AuthenticatedSessionController::class, 'store'])->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');

// Registration Routes
Route::get('/register', function () {
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
Route::prefix('seller')->name('seller.')->group(function () {
    Route::resource('products', ProductController::class)->middleware('role:seller');

    // Route::resource('products', ProductController::class)->middleware('role:seller');
    Route::resource('products_orders', ProductOrderController::class);
});

// ROUTE ADMIN  PAGE
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('categories', CategoryController::class)->middleware('role:admin');
    Route::resource('products', ProductController::class);
    Route::resource('products_orders', ProductOrderController::class);
    // Route::resource('categories', CategoryController::class)->middleware('role:admin');
    Route::resource('users', UserController::class);
});


// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });
require __DIR__ . '/auth.php';


//JAGAN DI HAPUS

// Route::prefix('admin')->name('admin.')->group(function(){
//     Route::resource('products', ProductController::class);
//     Route::resource('products_orders', ProductOrderController::class);
//     Route::resource('categories', CategoryController::class);
//     Route::resource('users', UserController::class);
// });

Route::prefix('seller')->name('seller.')->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('products_orders', ProductOrderController::class);
});

Route::get('/dashboard', function () {
    return 'This is the dashboard route.';
})->name('dashboard');


// ROUTES GOOGLE

// Route::get('/auth/redirect', [SocialiteController::class, 'redirect']);
// Route::get('/auth/google/callback', [SocialiteController::class, 'callback']);

Route::get('auth/google', [AuthenticatedSessionController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [AuthenticatedSessionController::class, 'handleGoogleCallback']);

// Route::group(['middleware' => ['guest']], function () {
//     Route::get('auth/google', [AuthenticatedSessionController::class, 'redirectToGoogle']);
//     Route::get('auth/google/callback', [AuthenticatedSessionController::class, 'handleGoogleCallback']);
// });


//  ruote untuk memeriksa sesi
Route::get('/test-session', function () {
    session(['test' => 'value']);
    return session('test');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/user-edit-profile', [UserProfileController::class, 'edit'])->name('coba.edit');
    Route::get('/edit-profile', [UserProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/edit-profile', [UserProfileController::class, 'update'])->name('profile.update');
    Route::delete('/edit-profile', [UserProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    // Route untuk menampilkan form checkout
    Route::get('/checkout', [CheckoutController::class, 'showCheckoutDetails'])->name('checkout.details');

    // Route untuk menyimpan order
    Route::post('/checkout', [CheckoutController::class, 'storeOrder'])->name('checkout.store');

    // Route untuk menampilkan halaman history
    Route::get('/history', [CheckoutController::class, 'showOrderHistory'])->name('checkout.history');
});
Route::get('/cart/add/{productId}', [CartController::class, 'add'])->name('add.to.cart');
Route::get('/cart/decrement/{productId}', [CartController::class, 'decrement'])->name('decrement.from.cart');
Route::get('/cart/remove/{productId}', [CartController::class, 'remove'])->name('remove.from.cart');

Route::get('/data', [CartController::class, 'data']);

Route::get('/categories', [ProductController::class, 'showProducts'])->name('products.list');

Route::get('/categories', [CategoryController::class, 'showCategories'])->name('categories.index');

Route::get('/main-admin', function () {
    return view('admin.dashboard-main');
})->name('admin.dashboard-main');



Route::post('/role-request/approve/{id}', [RoleRequestController::class, 'approve'])->name('role-request.approve');
Route::post('/role-request/cancel/{id}', [RoleRequestController::class, 'cancel'])->name('role-request.cancel');
// Route::post('/role-request/store/{id}', [RoleRequestController::class, 'store'])->name('role-request.store');
Route::post('/role-request/store', [RoleRequestController::class, 'store'])->name('role-request.store');


Route::get('/dashboard-cms', function () {
    return view('admin.dashboard-cms');
});

Route::get('/dashboard-forms', function () {
    return view('admin.dashboard-forms');
});

Route::get('/dashboard-404', function () {
    return view('admin.dashboard-404');
});

Route::get('/dashboard-blank', function () {
    return view('admin.dashboard-blank');
});

Route::get('/dashboard-buttons', function () {
    return view('admin.dashboard-buttons');
});

Route::get('/dashboard-users', function () {
    return view('admin.dashboard-users');
});

Route::get('/dashboard-role', function () {
    return view('admin.dashboard-role');
});


// Route::get('/history', function () {
//     return view('history');
// });


Route::get('/card', function () {
    return view('cards');
});


Route::get('/dashboard-toko', function () {
    return view('admin.dashboard-toko');
});


Route::get('/otp', function () {
    return view('auth.otp-verif');
});

Route::get('/role-requests', [RoleRequestController::class, 'index'])->name('role-requests.index');
Route::post('/save-cart', [CartController::class, 'saveCart'])->name('save-cart');


// Route::post('role-request/store', [RoleRequestController::class, 'store'])->name('role-request.store');