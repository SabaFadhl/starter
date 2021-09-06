<?php

//namespace App\Http\Controllers;
namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use stdClass;

class UserController extends Controller
{
    //
    public function getIndex()
    {
        $data=[];
        $data['name']='Soso';
        $data['age']=23;

        $obj = new \stdClass();
        $obj->name='soso';
        $obj->id='1';
        $obj->gender='female';

        // return view('welcome')->with($data);
        // return view('welcome',compact('obj'));
        return view('welcome',compact('data'));
    }
}
