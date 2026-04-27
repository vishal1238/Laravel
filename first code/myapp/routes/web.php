<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\RegisterController;

// //------form validation
// Route::get('/student', [UserController::class, 'create']);  
// Route::post('/student', [UserController::class, 'store']); 

// Route::get('/student/edit/{id}', [UserController::class, 'edit']);
// Route::put('/student/update/{id}', [UserController::class, 'update']);

// Route::get('/register', [RegisterController::class, 'create']);
// Route::post('/register', [RegisterController::class, 'store']);


// //----Custom validation
// use App\Http\Controllers\TestController;

// Route::get('/test', [TestController::class, 'form']);
// Route::get('/test', [TestController::class, 'submit']);

// //create a form and apply validations
// //form should not be empty
// //min length will be 3 for name
// //email required and value of email - "abc@gamil.com"

// use App\Http\Controllers\Test1Controller;

// Route::get('/form', [Test1Controller::class, 'showForm'])->name('form.show');
// Route::post('/form', [Test1Controller::class, 'submitForm'])->name('form.submit');


//--- Repopulating Form---
// use App\Http\Controllers\User1Controller;
// Route::get('/user', [User1Controller::class, 'form']);
// Route::post('/user', [User1Controller::class, 'submit']);


//------ Cookies -------------
// use Illuminate\Http\Request;

// Route::get("/", function () {
//     return view('cookie-form');
// });

// Route::post("/set-cookie", function (Request $request) {
//     return response()
//         ->view('cookie-result', ['name' => $request->name])
//         ->cookie('username', $request->name, 60); // 60 minutes
// });

// Route::get('/get-cookie', function(Request $request){
//     $name = $request-> cookie('username');
//     return view('cookie-get',['name' => $name]);
// });

// Route::get('/delete-cookie', function(){
//     return response("cookie deleted")
//     ->cookie('username','', -1); //expire cookie
// });



//Task - Set a cookie for a product, cookie will hold the name of the product. 
use Illuminate\Http\Request;

Route::get("/", function () {
    return view('product-form');
});

Route::post("/set-product-cookie", function (Request $request) {
    return response()
        ->view('product-result', ['product' => $request->product])
        ->cookie('product_name', $request->product, 30);
});

Route::get('/get-product-cookie', function(Request $request){
    $product = $request->cookie('product_name');
    return view('product-get', ['product' => $product]);
});