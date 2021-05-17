<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function getData(Request $req){
        return $req->input();
        return "Form data will be here";
    }
}
