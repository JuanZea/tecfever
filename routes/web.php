<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');

Route::View('/home', 'home')->middleware(['auth', 'verified'])->name('home');

Route::View('/profile', 'profile')->middleware(['auth', 'verified'])->name('profile');
