<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function submit (Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required | email',
            'gender'=>'required',
            'course'=> 'required',
            'hobbies'=> 'required',
            'about'=> 'required | min:10'
        ]);
        return "Form Submitted";
    }
}
