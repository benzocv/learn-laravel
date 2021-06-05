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
        // return DB::table('members')->count();

        //insert function 
        // return DB::table('members')
        // ->insert([
        //     'name'=>'anzar',
        //     'email'=>'benzo',
        //     'address'=>'ahmedabad',
            
        // ]);


        return DB::table('members')
        ->where('id',6)
        ->update([
            'name'=>'anzar',
            'email'=>'benzod',
            'address'=>'ahmedabad',
            
        ]);



        // return view('list',['data'=>$data]); 
    }
}
