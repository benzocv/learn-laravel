<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    function add(Request $req){
        
        $device = new Device;
        $device->name = $req->name;
        $device->member_id = $req->member_id;
        $result = $device->save();
        if($result){
            
            return ["Result"=>"Data has been saved"];

        }else{
            return ["Result"=>"Data save failed"];

        }
    }
}
