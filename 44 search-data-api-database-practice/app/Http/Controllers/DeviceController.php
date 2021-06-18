<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    function search($name){
        return Device::where("name",$name)->get();
    }
}
