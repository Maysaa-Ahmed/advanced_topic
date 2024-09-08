<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MessageController;



Route::get('/', function () {
    return view('welcome');
});


// Admin => Users
Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::Post('users', [UserController::class, 'store'])->name('users.store');



//Admin => Topics
Route::get('topics', [TopicController::class, 'index'])->name('topics.index');
Route::get('topics/create', [TopicController::class, 'create'])->name('topics.create');
Route::Post('topics', [TopicController::class, 'store'])->name('topics.store');


//Admin => Categories
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::Post('categories', [CategoryController::class, 'store'])->name('categories.store');


//Admin => Testimonials
Route::get('testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');


//Admin => Messages
Route::get('messages', [MessageController::class, 'index'])->name('messages.index');




