<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMember extends Controller
{
    
    function add(Request $req){
        return $req->input();

    }
}
