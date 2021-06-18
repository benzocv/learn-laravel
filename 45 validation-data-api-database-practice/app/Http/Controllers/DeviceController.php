<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;

class DeviceController extends Controller
{
    function testData(Request $req){
        $rules = array(
            "member_id" => "required|min:2|max:4"
        );
        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            return response()->json($validator->errors(),401);
        }else{
            return ['x'=>$req];
            // save code 
        }
    //    return ['x'=>$req];
    }
}
