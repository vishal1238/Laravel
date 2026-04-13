<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create(){
        return view('register');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|min:3|max:50',
            'email'=>'required|email',
            'password' => 'required|min:6|max:20',
            'phone' => 'required|numeric|digits:10'
        ]);
        return "Registration successful";
    }
}
