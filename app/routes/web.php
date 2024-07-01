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

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Route::get('/post', function () {
//     return view('post');
//     // return "<h1>Our Post Page</h1>";
// });

// Route::view('/post','post');

// Route::get('/post/firstpost', function () {
//     return view('firstpost');
    
// });

// Route::get('/post/{id?}/comment/{commentid}', function (string $id = null, string $comment = null ) {

//     if($id){
//         return "<h1>Post ID: ".$id. "$ Comment :".$comment."</h1>";
//     }else{
//         return "<h1>No ID Found </h1>";
//     }
   
// })->where('id', '[0-9]+')->whereAlpha('commentid');

// Route::get('/post/{id?}', function (string $id) {

//     if($id){
//         return "<h1>Post ID: ".$id. "</h1>";
//     }else{
//         return "<h1>No ID Found </h1>";
//     }
   
// })->where('id', '[a-zA-Z]+');

// whereAlpha('id');

// wherein('id', ['movie', 'song'])
// where('id', '[0-9]+');



// Route::get('page/post', function () {
//     return view('post');
// })->name('mypost');

// Route::get('/test', function () {
//     return view('about');
// });

// //  301 permanet
// Route::redirect('/about', '/test', 301);

Route::prefix('page')->group(function(){
    Route::get('/about', function (){
        return "<h1>About Page</h1>";
    });
    Route::get('/gallery', function (){
        return "<h1>Gallery Page</h1>";
    });
    Route::get('post/firstpost', function (){
        return "<h1>First Post Page</h1>";
    });
});

Route::fallback(function(){
    return "<h1>Page Not Found</h1>";
});