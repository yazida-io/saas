<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::view('about', 'pages.about')->name('pages.about');

Route::view('contact', 'pages.contact')->name('pages.contact');

Route::view('features', 'pages.features')->name('pages.features');

Route::view('pricing', 'pages.pricing')->name('pages.pricing');

Route::get('p/{page:slug}', \App\Http\Controllers\DynamicPageController::class)->name('pages.dynamic');

Route::view('sign-in', 'auth.sign-in')->name('auth.sign-in');
Route::view('sign-up', 'auth.sign-up')->name('auth.sign-up');

Route::controller(\App\Http\Controllers\AuthController::class)->group(function () {
    Route::post('sign-in', 'authenticate')->name('auth.authenticate');
    Route::post('sign-up', 'register')->name('auth.register');
});

Route::view('app/{any?}', 'app')
    ->where('any', '.*')
    ->name('app');
