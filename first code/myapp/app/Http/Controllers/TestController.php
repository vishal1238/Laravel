<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rules\CheckName1; // make sure this exists

class TestController extends Controller
{
    public function form(Request $request){
        // validation
        $request->validate([
            'name' => ['required', new CheckName1]
        ]);

        return "Form Submitted successfully";
    }

    public function submit(Request $request){
        // validation
        $request->validate([
            'name' => ['required', new CheckName1]
        ]);

        return "Form Submitted successfully";
    }
}