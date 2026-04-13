<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

//------form validation
Route::get('/student', [UserController::class, 'create']);  
Route::post('/student', [UserController::class, 'store']); 

Route::get('/student/edit/{id}', [UserController::class, 'edit']);
Route::put('/student/update/{id}', [UserController::class, 'update']);