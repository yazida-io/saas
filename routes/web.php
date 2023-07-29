<?php

use App\Http\Controllers\Actions\ContactUsActionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DynamicPageController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');

Route::view('about', 'pages.about')->name('pages.about');

Route::view('contact', 'pages.contact')->name('pages.contact');
Route::post('contact', ContactUsActionController::class)->name('actions.contact-us');

Route::view('features', 'pages.features')->name('pages.features');

Route::view('pricing', 'pages.pricing')->name('pages.pricing');

Route::get('p/{page:slug}', DynamicPageController::class)->name('pages.dynamic');

Route::view('sign-in', 'auth.sign-in')->name('auth.sign-in');
Route::view('sign-up', 'auth.sign-up')->name('auth.sign-up');

Route::controller(AuthController::class)->group(function () {
    Route::post('sign-in', 'authenticate')->name('auth.authenticate');
    Route::post('sign-up', 'register')->name('auth.register');
    Route::any('logout','logout')->middleware('auth')->name('auth.logout');
});

Route::view('dashboard', 'dashboard.index')
    ->middleware('auth')
    ->name('dashboard.index');

Route::view('app/{any?}', 'app')
    ->where('any', '.*')
    ->name('app');
