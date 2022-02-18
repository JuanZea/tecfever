<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::View('/home', 'home')->name('home');

    Route::View('/profile', 'profile')->name('profile');

    Route::group(['middleware' => ['role:admin']], function () {
        Route::View('/panel', 'panel')->name('panel');

        Route::resource('users', UserController::class);
        Route::resource('products', ProductController::class);
    });
});
