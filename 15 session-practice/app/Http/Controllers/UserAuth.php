<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserAuth extends Controller
{
    function UserLogin(Request $req){
        // return $req->input();
        
        
        $data = $req->input();
        $req->session()->put('email',$data['email']);
        echo session('email');
        
        
    }
}
