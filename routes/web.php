<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\CategoryController;


Route::get('/', function () {
    return view('welcome');
});


// Admin => Users
Route::get('users', [UserController::class, 'index'])->name('users.index');


//Admin => Topics
Route::get('topics', [TopicController::class, 'index'])->name('topics.index');


//Admin => Categories
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');


//Admin => Testimonials



//Admin => Messages