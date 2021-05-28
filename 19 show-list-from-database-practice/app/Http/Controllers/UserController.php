<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class UserController extends Controller
{
 function show(){
     return Member::all();
    //  return view('list');
 }
}
