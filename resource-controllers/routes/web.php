<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::resource('users',UserController::class);

/* Route::resource('users',UserController::class)->only([
    'create','update','show'
]); */

/* Route::resource('users',UserController::class)->except([
    'update','show'
]); */

/* Route::resource('users',UserController::class)->names([
    'create' => 'users.build',
    'show' => 'users.view'
]); */

// Route::resource('users.comments',CommentController::class);

Route::resource('users.comments',CommentController::class)->shallow();