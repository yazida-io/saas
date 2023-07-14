<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::view('app/{any?}', 'app')
    ->where('any', '.*')
    ->name('app');
