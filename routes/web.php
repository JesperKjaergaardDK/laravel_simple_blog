<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('welcome');
});

//path for the methods in the controller 
Route::resource('blogs', BlogController::class);
