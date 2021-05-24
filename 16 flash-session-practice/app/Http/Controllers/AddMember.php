<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddMember extends Controller
{
    
    function addMember(Request $req){
        return $req->input();

    }
}
