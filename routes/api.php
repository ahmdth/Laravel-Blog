<?php

use App\Http\Controllers\Api\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('posts', PostController::class);

// Route::domain('api.127.0.0.1:8000/')->group(function () {
//     Route::get('/posts', function() {
//         return Post::all();
//     });
//});