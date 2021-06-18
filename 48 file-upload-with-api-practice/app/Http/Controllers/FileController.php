<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    function upload(Request $req){
        return $req->file('file')->store('docs');
        // $result = $req->file('upload')->store('apiDocs');
        // return ["result"=>$result];
    }
}
