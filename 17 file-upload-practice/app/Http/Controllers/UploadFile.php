<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadFile extends Controller
{
    function index(Request $req){

        return $req->file('file')->store('docs');
    }
}

