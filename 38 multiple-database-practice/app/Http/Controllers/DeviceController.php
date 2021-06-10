<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;

class DeviceController extends Controller
{
 function list(){
    //  return DB::table('devices')->get();

     // to connect to extra connection database 
    //  return DB::connection('mysql2')->table('employee')->get();






    //method with model 
    return Member::all();
    
 }
}
