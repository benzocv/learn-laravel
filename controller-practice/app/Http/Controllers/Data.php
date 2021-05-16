<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Data extends Controller
{
    public function index($name){
        echo $name;
        echo "this is index function from data controller";
    }
}
