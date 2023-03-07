<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
class roomController extends Controller
{
    //
    public function index(){
 
         $room = Room::orderBy('id','desc')->paginate(10);
         return view('layout.book',compact('room'));

    }

    public function ajax_paginate( Request $request)
    {
        $records = Room::orderBy('id','desc')->paginate(10);
        return view('layout.book',compact('room'))->render();
    }
}
