<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ViewPageController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//front-end routes

// landing page
Route::get('/', function () {
    return view('auth.login');
});


//admin page
Route::get('/admin', function () {
    return view('admin.admin');
});


//home page
Route::get('/home', [LoginController::class, 'home'])->name('home');

//registration page
Route::get('/registration', [ViewPageController::class, 'registration'])->name('registration');



Route::get('/gallery', function () {
    return view('profile.gallery');
});

Route::get('/tournament', function () {
    return view('tournament.tournament');
});

Route::get('/tourna_content', function () {
    return view('tournament.tourna_content');
});

Route::get('/clubs', function () {
    return view('clubs.clubs');
});

Route::get('/about', function () {
    return view('about.about');
});

Route::get('/coach', function () {
    return view('list.coach');
});

Route::get('/player', function () {
    return view('list.player');
});

Route::get('/events', function () {
    return view('events.events');
});

Route::get('/manage_tourna', function () {
    return view('tournament.manage_tourna');
});

Route::get('/view_tourna', function () {
    return view('tournament.view_tourna');
});



Route::get('/view_club', function () {
    return view('clubs.view_club');
});



//back-end routes

//checking the db connection
Route::get('/check-connection', [YourController::class, 'checkDbConnection']);

// login and register controller
Route::post('/register-user', [LoginController::class, 'registerUser'])->name('registerUser');
Route::post('/login-user', [LoginController::class, 'loginUser'])->name('login-user');

//logout function
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/login', [LoginController::class, 'login'])->name('login');

//display data from database to my_profile page
Route::get('/my_profile', [DataController::class, 'displayData'])->name('my_profile');

//get image from database
Route::get('/profile_pic', [DataController::class, 'showImage'])->name('image.show');

//update profile pic
Route::post('/profile_pic', [PostController::class, 'updatePhoto'])->name('update_profilepic');

//update profile data
Route::post('/my_profile', [PostController::class, 'updateProfile'])->name('update_profile');

//show all user data in a table 
Route::get('/table', [getControllerData::class, 'showtable'])->name('showtable');

//show table for player and player/coach
Route::get('/player', [DataController::class, 'showPlayerTable'])->name('playertable');

//show table for coach and player/coach
Route::get('/coach', [DataController::class, 'showCoachTable'])->name('coachtable');


//create tournament insert data
Route::post('/manage tournament', [PostController::class, 'create_tournament'])->name('create_tournament');