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

    function delete($id){
        $data = Member::find($id);
        $data->delete();
        return redirect('list');
    }

    function ShowData($id){
        echo $id;
    }
}
