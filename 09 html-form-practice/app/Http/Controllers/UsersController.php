<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    function getData(Request $req){

        $req->validate([
            'username'=>'required | max:10',
            'userpassword'=>'required | min:5'
        ]);

        return $req->input();
        
    }
}
