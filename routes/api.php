<?php

use App\Http\Controllers\Api\PostsController;
use Illuminate\Support\Facades\Route;

// For debugging, add a test route
Route::get('test', function() {
    return response()->json(['message' => 'API is working']);
});

