<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::View('/home', 'home')->name('home');

    Route::View('/profile', 'profile')->name('profile');

    Route::View('/panel', 'panel')->middleware('role:admin')->name('panel');

});

