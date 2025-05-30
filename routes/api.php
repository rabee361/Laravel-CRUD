<?php

use App\Http\Controllers\Api\PostsController;
use Illuminate\Support\Facades\Route;

// For debugging, add a test route
Route::get('test', function() {
    return response()->json(['message' => 'API is working']);
});

// Posts CRUD endpoints
Route::get('posts', [PostsController::class, 'index']);
Route::post('posts', [PostsController::class, 'store']);
Route::get('posts/{id}', [PostsController::class, 'show']);
Route::put('posts/{id}', [PostsController::class, 'update']);
Route::delete('posts/{id}', [PostsController::class, 'destroy']);