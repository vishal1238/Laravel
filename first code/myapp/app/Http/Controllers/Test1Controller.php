<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test1Controller extends Controller
{
    public function showForm(){
        return view('form');
    }

    public function submitForm(Request $request){
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|in:abc@gmail.com'
        ]);

        return "Form submitted successfully";
    }
}