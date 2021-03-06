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
});

Route::get('/users', function () {
    return view('users');
});


Route::get('/home', function () {
    return view('home');
});


Route::get('/noaccess', function () {
    return view('noaccess');
});

Route::get('/not-interested', function () {
    return view('not-interested');
});




Route::group(['middleware'=>['pagesWithInterest']],function(){
    Route::get('/interest-check', function () {
        return view('interest-check');
    });
    //you can use extra routes here also 
});



//Route middleware
//Fun-Fact: Route middleware can be apply on two routes also

Route::get('/i-am-poor', function () {
    return view('i-am-poor');
});


Route::view('my-status','my-status')->middleware('statusCheckMiddleware');