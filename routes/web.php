<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/','index')->name('home');
Route::view('/shop','shop')->name('shop');
Route::view('/blogs','blog')->name('blogs');
Route::view('/contacts','contact')->name('contacts');
Route::view('/wishlist','wishlist')->name('wishlist');
Route::view('/cart','cart')->name('cart');
Route::view('/compare','compare')->name('compare');
Route::view('/login-register','login-register')->name('login-register');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
