<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    // Display data
    public function index()
    {
        $student = DB::table('students')->get();
        return view('index', compact('student'));
    }

    // Create form
    public function create()
    {
        return view('create');
    }

    // Insert data
    public function store(Request $request)
    {
        DB::table('students')->insert([
            'name' => $request->name,
            'course' => $request->course,
            'marks' => $request->marks,
        ]);

        return redirect('/');
    }

    // Edit data
    public function edit($id)
    {
        $student = DB::table('students')
                    ->where('id', $id)
                    ->first();

        return view('edit', compact('student'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        DB::table('students')
            ->where('id', $id)
            ->update([
                'name' => $request->name,
                'course' => $request->course,
                'marks' => $request->marks,
            ]);

        return redirect('/');
    }


    //delete data

    public function delete($id){
        DB::table('student')->where('id', $id)->delete();
        return redirect('/');
    }

}