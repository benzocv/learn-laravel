<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function list(){
        $data = Member::all();
        return view('list',['members'=>$data]);
    }
}
