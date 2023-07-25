<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    //
    function list($id = null){
        return $id?Device::find($id): Device::all();
    }

    // function getListByName($name = null){
    //     return $name?Device::where("name",$name)->get() : device::all();
    // }

    function add(Request $request){

        $request->validate([
            'name' => 'required|string',
            'member_id' => 'required|integer',
        ]);
    
        $device = new Device;
        $device->name = $request->name;
        $device->member_id = $request->member_id;
        
        $result = $device->save();

        if($result){
            return ['Result'=>'Data has been saved!'];
        }else{
            return ['Result'=>'Operation failed!'];
        }
    }

    function update(Request $request){
        $device = Device::find($request->id);
        $device->name=$request->name;
        $device->member_id=$request->member_id;

        $result = $device->save();

        if($result){
            return ['result'=>'data is updated!'];
        }else{
            return ['Result'=>'Update Operation has been failed!'];
        }

    }

    function search($name){
        return Device::where("name","like", "%".$name."%")->get();
    }
}