<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function loadView($name){
        // this is from simple view load 
        // return view("users-controller"); 

        //this for view load with data 
        return view("users-controller",['name'=>"$name"]);


    }
}
