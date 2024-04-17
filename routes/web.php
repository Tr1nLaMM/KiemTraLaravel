<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

Route::get('/index', [PostController::class, 'index'])->name('index');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');