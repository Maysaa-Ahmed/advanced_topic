<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('welcome');
});


// Admin => Users
Route::get('users', [UserController::class, 'index'])->name('users.index');


//Admin => Topics



//Admin => Categories



//Admin => Testimonials



//Admin => Messages