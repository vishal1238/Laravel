<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FileController extends Controller{
    public function upload(Request $request){
        //validation
        $request->validate([
            'file' => 'required | file | mines: jpg,png,pdf | max: 2048'
        ]);
        //Upload file
        if($request->file('file')){
            $file = $request->file('file');

            //custom filename
            $filename = time().'.'.$file->getClientOrginalExtention();

            //store the file in public/uploads
            $path = $file->storeAs('uploads', $filename, 'public');

            return back()->with('success','File Uploaded successfully')
                ->with('file', $path);
        }
        return back()->with('error','File upload Failed');
    }
}