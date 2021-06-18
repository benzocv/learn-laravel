<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;
use Validator;

class DeviceController extends Controller
{
    function testData(Request $req){
        $rules = array(
            "member_id" => "required"
        );
        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            return $validator-> errors();
        }else{
            return ['x'=>$req];
        }
    //    return ['x'=>$req];
    }
}
