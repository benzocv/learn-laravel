<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Members extends Controller
{
    //
    function dbOperation(){
       


        //to get the avg 
        // return DB::table('members')
        // ->avg('id');

        
        //to get the sum
        // return DB::table('members')
        // ->sum('id');


        //to get the count
        // return DB::table('members')
        // ->count();

        //to use max 
        //return DB::table('members')
        //->max('id');


        //to use min 
        return DB::table('members')
        ->min('id');

        
       

    }
}
