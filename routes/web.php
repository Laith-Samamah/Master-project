<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controller::class, 'index']);

Route::get('/shop', [ProductController::class, 'Home']);

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/signup', [UserController::class, 'signup'])->name('signup');

Route::post('/signupsubmit', [UserController::class, 'signupsubmit']);

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/loginsubmit', [UserController::class, 'loginsubmit']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/profile', [UserController::class, 'index'])->middleware('auth');

Route::get('/cart', [CartController::class, 'index']);




Route::get('/about', function () {
    return view('about');
});

// Route::get('/cart', function () {
//     return view('cart');
// });

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/checkoutSuccess', function () {
    return view('checkout-success');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/signup', function () {
//     return view('signup');
// });




Route::get('/wishlist', function () {
    return view('wishlist');
});

// Route::get('/profile', function () {
//     return view('profile');
// });
