<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/* use App\Models\usuarios; */
use App\Models\User;
/* use Illuminate\Support\Facades\App; */
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function store(Request $request){
      //  dd($request);
      $request->request->add(['username'=>Str::slug($request->username)]);
          $this->validate($request, [
           'name' => 'required | min:3 ',
            'username' => 'required | min:3 | max:20 | unique:users',
            'email' => 'required ',
            'password' => 'required',
             'password_confirmation' => 'required'
        ]);

        User::create([
            "name"=>$request->name,
            "username"=>$request->username,
            "email"=>$request->email,
            "password"=>$request->password
        ]);
        //autenticar//
        auth()->attempt([
            'username'=>$request->username,
            'password'=>$request->password

        ]);
        //redireccionar//
        return redirect()->route('post.index');
    }


}
