<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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
});


// routing view 
// Route::get('/users', function () {
//     return view('users');
// });


// passing name parameter with routing 
Route::get('/users/{name}', function ($name) {
    return view('users',['name'=>$name]);
});


//calling from controller 
Route::get("users-controller/{name}",[UsersController::class,'loadView']);