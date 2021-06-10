<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    function index(){
        $member = new Member;
        $member->name = "john";
        $member->email = "doe@yahoo.com";
        $member->address = "ahmedabad";
        $member->save();
    }
}
