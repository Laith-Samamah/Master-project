<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/checkoutSuccess', function () {
    return view('checkout-success');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/product', function () {
    return view('product-details');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/profile', function () {
    return view('profile');
});
