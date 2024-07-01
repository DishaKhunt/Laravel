<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(PageController::class)->group(function(){
    Route::get('/', 'showHome')->name('home');
    Route::get('/blog', 'showBlog')->name('blog');
    Route::get('/user/{id}', 'showUser')->name('users');
});

// Route::get('/', [PageController::class, 'showHome'])->name('home');

// Route::get('/blog', [PageController::class, 'showBlog'])->name('blog');

// Route::get('/user/{id}', [PageController::class, 'showUser'])->name('users');

Route::get('/test', TestingController::class);