<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StudentController extends Controller
{
    // Show form
    public function showForm()
    {
        return view('form');
    }

    // Handle form submit
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        return back()->with('success', 'Form submitted successfully!');
    }
}