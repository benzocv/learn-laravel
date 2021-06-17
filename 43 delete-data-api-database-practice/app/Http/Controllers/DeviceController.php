<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    function delete($id){
        $device = Device::find($id);
        $result = $device->delete();

        if($result){
            
            return ["Result"=>"Data has been deleted"];

        }else{
            return ["Result"=>"Data delete failed"];

        }

    }
}
