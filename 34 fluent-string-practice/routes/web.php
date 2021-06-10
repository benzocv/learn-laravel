<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

$data = "hi, let's learn laravel";

//old method

// $data = Str::ucfirst($data);
// $data = Str::replaceFirst("Hi","Hello",$data);
// $data = Str::camel($data);


//new method

$data=Str::of($data)
->ucfirst($data)
->replaceFirst("Hi","Hello",$data)
->camel($data);


echo $data;


Route::get('/', function () {
    return view('welcome');
});
