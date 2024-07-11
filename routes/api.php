<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('api')->group(function () {
    Route::apiResource('/posts', PostController::class);
    Route::get('/posts/search', [PostController::class, 'search']);
});
