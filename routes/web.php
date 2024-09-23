<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Auth\RegisterController;



// Route::get('/', function () {
//     return view('welcome');
// });


// Admin => Users
Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::Post('users', [UserController::class, 'store'])->name('users.store');
Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('users/{id}', [UserController::class, 'update'])->name('users.update');


//Admin => Topics
Route::get('topics', [TopicController::class, 'index'])->name('topics.index');
Route::get('topics/create', [TopicController::class, 'create'])->name('topics.create');
Route::Post('topics', [TopicController::class, 'store'])->name('topics.store');
Route::get('topics/{id}/delete', [TopicController::class, 'destroy'])->name('topics.destroy');
Route::get('topics/{id}/edit', [TopicController::class, 'edit'])->name('topics.edit');
Route::put('topics/{id}', [TopicController::class, 'update'])->name('topics.update');
Route::get('topics/{id}/detail', [TopicController::class, 'detail'])->name('topic.detail');

//Admin => Categories
Route::get('categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::Post('categories', [CategoryController::class, 'store'])->name('categories.store');
Route::get('categories/{id}/delete', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::put('categories/{id}', [CategoryController::class, 'update'])->name('categories.update');


//Admin => Testimonials
Route::get('testimonials', [TestimonialController::class, 'index'])->name('testimonials.index');
Route::get('testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
Route::Post('testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');
Route::get('testimonials/{id}/delete', [TestimonialController::class, 'destroy'])->name('testimonials.destroy');
Route::get('testimonials/{id}/edit', [TestimonialController::class, 'edit'])->name('testimonials.edit');
Route::put('testimonials/{id}', [TestimonialController::class, 'update'])->name('testimonials.update');


//Admin => Messages
Route::get('messages', [MessageController::class, 'index'])->name('messages.index');
Route::get('messages/{id}/delete', [MessageController::class, 'destroy'])->name('messages.destroy');
Route::get('messages/{id}/detail', [MessageController::class, 'detail'])->name('messages.detail');



//Admin => Login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('login', [LoginController::class, 'login'])->name('login');


//Admin => Register
Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);


 ////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////


//Public => Index
Route::get('homepage', [MessageController::class, 'viewHome'])->name('homepage.viewHome');
// Route::get('homepage', [TestimonialController::class, 'getLatestTestimonials']);
// Route::get('homepage', [TopicController::class, 'getLatestTopics']);



//Public => contact
Route::get('contact', [MessageController::class, 'viewContact'])->name('contact.viewContact');
Route::post('contact', [MessageController::class, 'store'])->name('contact.store');


//Public => Topic List
Route::get('topiclist', [MessageController::class, 'viewTopicList'])->name('topiclist.viewTopicList');

//Public => Our Clients Says
Route::get('ourclients', [MessageController::class, 'viewOurClients'])->name('ourclients.viewOurClients');

//Public => Topics Detail page
Route::get('topicdetail/{id}', [MessageController::class, 'viewTopicDetail'])->name('topicdetail.viewTopicDetail');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
