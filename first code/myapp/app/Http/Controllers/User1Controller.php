<?php

namespace App\Http\Controllers;

use App\Rules\CheckUsername;
use Illuminate\Http\Request;

class User1Controller extends Controller
{
    public function form(){
        return view('user');
    }

    public function submit(Request $request){
        $request->validate([
            'username'=>['required', new CheckUsername],
            'email'=>['required | email']
        ]);
        return "Form submitted Successfully";
    }
}
