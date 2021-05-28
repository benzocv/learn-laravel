<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class UserController extends Controller
{
 function show(){
     $data = Member::all();
     return view('list',['members'=>$data]);
 }
}
