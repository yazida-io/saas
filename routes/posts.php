<?php

use App\Http\Controllers\Api\PostCategoryController;
use App\Http\Controllers\Api\PostController;

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('categories', PostCategoryController::class)
        ->parameter('categories', 'postCategory');
    Route::apiResource('posts', PostController::class);
});
