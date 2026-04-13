<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/form', [StudentController::class, 'showForm']);
Route::post('/submit', [StudentController::class, 'submit']);


//-----------Advanced Routing
//Named Routing 
Route::get('/home', function(){
    return "Home Page";
})->name('home');

//Paramter Contraint
Route::get('/user/{id}', function($id){
    return "User ID : ".$id;
})->where('id','[0-9] +');


//Route Prefixing 

Route::prefix('admin')->group(function(){
    Route::get ('/dashboard', function(){
        return "Admin Dashboard";
    });
    Route:: get('/current');
});

//-- current url

Route::get('/current', function(){
    
});


//---Framework URL----
Route::get('/framework', function(){
    echo url('/about');
    echo "<br>";
    echo url ('/user', 10);
});

Route::get('/about', function(){
    return "About page";
});

Route::get('/about/{id}', function($id){
    return "User ID: " .$id;
});


//--- Asset URL---
Route::get('/asset', function(){
    return '<img src ="'.asset('images/img2.png').'"/>';
});














//Task
//Create a route with prefix - "dashboard"
//for user - it should display "user allowed"
//for admin - it should display "admin has full access"

//Display 2 images on different route and 
//get the details of the URL throught another route.

Route::prefix('admin')->group(function(){
    Route::get ('/dashboard', function(){
        return "Admin Dashboard";
    });
    Route:: get('/current');
});


Route::get('/asset', function(){
    return '<img src ="'.asset('images/img2.png').'"/>';
});

//To Add CSS file
//public - create folder(css) - Views - Route

Route::get('/assetcss', function(){
    return view('test');
});

//-- Genreatonal Shortcuts
//a.route()

Route::get('/home', function(){
    return "Home Page";
})->name('home');

Route::get('/shortcut', function(){
    return route('home');
});

//php artisan make:..



//.c secure_url()
Route::get('/secure', function(){
    return secure_url('/profile');
});

Route::get('/profile', function(){
    return "Profile page";
});



// Create a route with the name '/Course' store courses details
// in an array
// click on one course and display
// its details like - free and duration
// on another route