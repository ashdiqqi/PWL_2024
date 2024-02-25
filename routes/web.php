<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



   Route::get('/world', function () {
    return 'World';
   });

   

   

   Route::get('/user/{name}', function ($diqqi) {
    return 'Nama saya '.$diqqi;
    });

    Route::get('/posts/{post}/comments/{comment}', function 
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});


Route::get('/user/{name?}', function ($name='John') {
        return 'Nama saya '.$name;
    });

Route::get("/hello", [WelcomeController::class,"hello"]);

Route::get("/welcome", [PageController::class,"welcome"]);
Route::get("/about", [PageController::class,"about"]);
Route::get("/articles/{id}", [PageController::class,"articles"]);
 Route::get('/greeting', [WelcomeController::class, 
    'greeting']);
        
use App\Http\Controllers\PhotoController;
Route::resource('photos', PhotoController::class);


Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);
   Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);


  
    


//Route::get('/', function () {
    //return view('welcome');
//});
