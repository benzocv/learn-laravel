<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Members extends Controller
{
    //
    function dbOperation(){
       



        return DB::table('members')
        ->avg('id');
        


        
       

    }
}
