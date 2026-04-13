<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show form
    public function create(){
        return view('student');
    }

    // Handle form submission
    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email',
            'age' => 'required|numeric|min:18'
        ]);

        return "Validation Successful";
    }

    public function edit($id){
        $student = [
            'id' => $id,
            'name' => 'ABC',
            'email' => 'abc@gmail.com',
            'age' => 22
        ];
        return view('edit-student', compact('student'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required|max:50',
            'email'=>'required|email',
            'age'=>'required|numeric|min:18'
        ]);
        return "User Updated Successfully";
    }
}