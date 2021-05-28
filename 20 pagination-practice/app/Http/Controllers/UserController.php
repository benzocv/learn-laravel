<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class UserController extends Controller
{
 function show(){
    //  $data = Member::all();
     $data = Member::paginate(2);

     return view('list',['members'=>$data]);
 }
}
