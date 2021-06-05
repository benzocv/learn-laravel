<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Members extends Controller
{
    //
    function dbOperation(){
        // $data = DB::table('members')->get();
        
        // $data = DB::table('members')
        // ->where('id',4)
        // ->get();

        //find method use 
        // return (array)DB::table('members')->find(4);

        //count function 


        // return view('list',['data'=>$data]); 
    }
}
