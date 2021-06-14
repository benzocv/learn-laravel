<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    function update(Request $req){
        // $device = Device::find($req->id);
        $device = new Device;
        $device->name = $req->name;
        $device->member_id = $req->member_id;
        $result = $device->save();
        if($result){
            
            return ["Result"=>"Data has been updated"];

        }else{
            return ["Result"=>"Data update failed"];

        }
    }
}
