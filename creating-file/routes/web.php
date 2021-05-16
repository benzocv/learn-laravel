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
    return view('hello');
});

Route::get('/welcome', function () {
    return view('welcome');
});

// *** short method of routing ***
Route :: view("about",'about'); //first parameter is link


//here we are passing data with url 
// here the link would be http://127.0.0.1:8000/data2


Route::get('/data{name}', function ($name) {    
    return view('data',['name'=>$name]);
});


// on the route we are learning how to a href ?
Route::get('/link', function () {
    return view('link');
});


// this is how we redirect page 
Route::get('/redirect', function () {
    // return view('redirect');
    return redirect('about');
});
