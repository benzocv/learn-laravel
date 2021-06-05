<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Members extends Controller
{
    //
    function dbOperation(){
        $data = DB::table('members')->get();
        return view('list',['data'=>$data]); 
    }
}
