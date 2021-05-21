<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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


Route::get('/user', function () {
    return view('user');
});


route::get("users",[UserController::class,'testRequest']);
route::post("users",[UserController::class,'testRequest']);
route::put("users",[UserController::class,'testRequest']);
route::delete("users",[UserController::class,'testRequest']);