<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', [StudentController::class, 'showStudent']);

// Route::get('/home', function(){
//     return view('home');
// });