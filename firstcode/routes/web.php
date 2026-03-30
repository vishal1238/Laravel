<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Hello Vishal 🚀";
});


//StudentController
// 1. Write the command in the terminal to create a Controller
// 2. Create a view with the name - studemtform.blame.php
//         this form will have 2 input type - name, email
//         using post method inside it to display details on next page
// 3. Open the constroller file and write logic to fetch valued of name and email
// 4. open web.php where, 1 route will work for get, another route will work for post method 