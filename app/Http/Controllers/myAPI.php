<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myAPI extends Controller
{
    //
    function getData(){
        return [
            'name'=>'akira',
            'email'=>'akira@demo.com',
            'address'=>'Cloverdale, WA'
        ];
    }
}