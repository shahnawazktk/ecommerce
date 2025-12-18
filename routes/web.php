<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;

Route::get('admin/register', [RegisterController::class, 'create'])->name('admin.register');
Route::post('admin/store', [RegisterController::class, 'register'])->name('admin.store');



Route::get('users/list', [UserController::class, 'index'])->name('users.list');



Route::get('products/list', [ProductController::class, 'index'])
    ->name('products.list');

Route::get('products/create', [ProductController::class, 'create'])
    ->name('products.create');

// --------------------- Auth Start -------------------------
Route::get('admin/login', function () {
    return view('admin-panel.login');
})->name('admin.login');

// Route::get('admin/register', function () {
//     return view('admin-panel.register');
// })->name('admin.register');

Route::get('dashboard', function () {
    return view('admin-panel.dashboard');
})->name('dashboard');

// ---------------------- Auth End--------------------------

Route::get('/', function () {
    return view('index');
});

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/product-details', function () {
    return view('product_details');
})->name('product-details');