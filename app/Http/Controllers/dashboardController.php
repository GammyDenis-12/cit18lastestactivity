<?php

namespace App\Http\Controllers;
Use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
  public function index(){
    
    $users = User::orderBy('id','desc')->paginate(10);
    
     return view('layout.dashboard',compact('users'));

     
  }

  public function ajax_paginate( Request $request)
  {
      $records = Room::orderBy('id','desc')->paginate(10);
      return view('layout.noRefresh',compact('room'))->render();
  }

  public function main(){
  return view('layout.master');

  }
}
