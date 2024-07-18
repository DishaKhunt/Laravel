<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'showStudent']);


Route::get('/union', [StudentController::class, 'uniondata']);

Route::get('/when', [StudentController::class, 'whendata']);

Route::get('/chunk', [StudentController::class, 'chunkdata']);

// Route::get('/', function () {
//     return view('welcome');
// });