<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

function getUsers(){
    return [
        1 => ['name' => 'Amitabh', 'phone' => '3135222527', 'city'=>'Goa'],
        2 => ['name' => 'Salman', 'phone' => '1234567898', 'city'=>'Delhi'],
        3 => ['name' => 'Sunny', 'phone' => '3135232527', 'city'=>'Mumbai'],
        4 =>['name' => 'Akshay', 'phone' => '3135212347', 'city'=>'Agra'],
    ];
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', function () {

    // $name =  "Disha Khunt";

    $names = getUsers();

    return view('users' ,[
        'user' => $names, 
        'city' => 'Rajkot'
    ]);

    // return view('users')
    // ->with('user', $name)
    // ->with('city' , 'Rajkot');

    // return view('users')
    // ->withUser($name)
    // ->withCity('Rajkot');
});



Route::get('/user/{id}', function($id) {

    $users = getUsers();
    abort_if(!isset($users[$id]), 404);

    $user = $users[$id];


    return view('user', ['id' => $user]);
})->name('view.user');
