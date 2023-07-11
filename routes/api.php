<?php

use App\Http\Controllers\Api\AuthenticationController;
use Illuminate\Support\Facades\Route;

Route::group(
    ['namespace' => 'Api', 'as' => 'auth.'],
    function () {
        Route::post('register', [AuthenticationController::class, 'register'])->name('register');
        Route::post('login', [AuthenticationController::class, 'login'])->name('login');

        Route::post('logout', [AuthenticationController::class, 'logout'])
            ->middleware('auth:sanctum')
            ->name('logout');
        Route::post('user', [AuthenticationController::class, 'me'])
            ->middleware('auth:sanctum')
            ->name('user');
    }
);
