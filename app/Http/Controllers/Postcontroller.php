<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Postcontroller extends Controller
{
    public function __contruct(){
        
    }
public function index(){
  /*   dd(auth()->user()); */
    return view('dashboard',auth()->user());
}


}
