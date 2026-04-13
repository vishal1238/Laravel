<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;

//------form validation
Route::get('/student', [UserController::class, 'create']);  
Route::post('/student', [UserController::class, 'store']); 

Route::get('/student/edit/{id}', [UserController::class, 'edit']);
Route::put('/student/update/{id}', [UserController::class, 'update']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);
