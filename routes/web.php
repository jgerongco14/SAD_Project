<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ViewPageController;
use App\Http\Controllers\PostController;
use Illuminate\Auth\Events\Login;

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

//landing page

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/aboutPickleBall', function () {
    return view('about.about');
});

Route::get('/gallery', function () {
    return view('about.gallery');
});


//admin page
Route::get('/admin', function () {
    return view('admin.admin');
});


//login landing page
Route::get('/home', [LoginController::class, 'login'])->name('login');


//home page
Route::get('/home', [LoginController::class, 'home'])->name('home');

//registration page
Route::get('/registration', [ViewPageController::class, 'registration'])->name('registration');

//about pickleball in landing page
Route::get('/aboutpickelball', [ViewPageController::class, 'aboutPickleBallLandingPage'])->name('aboutPickleBallLandingPage');

//about gallery in landing page
Route::get('/gallery', [ViewPageController::class, 'galleryLandingPage'])->name('galleryLandingPage');

//manage tournament page
Route::get('/manageTournament', [ViewPageController::class, 'create_tournamentPage'])->name('create_tournamentPage');

//tournament page
Route::get('/tournament', [ViewPageController::class, 'tournamentPage'])->name('tournamentPage');

//about pickleball page
Route::get('/aboutpickelball', [ViewPageController::class, 'aboutPickleBallPage'])->name('aboutPickleBallPage');

//about gallery page
Route::get('/gallery', [ViewPageController::class, 'galleryPage'])->name('galleryPage');


//clubs page
Route::get('/clubs', [ViewPageController::class, 'clubsPage'])->name('clubsPage');


Route::get('/events', function () {
    return view('events.events');
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
Route::post('/manage tournament', [PostController::class, 'create_tournamentForm'])->name('create_tournamentForm');

// display tournament data that needs to approved by admin
Route::get('/tournamentList', [DataController::class, 'displayTourna'])->name('displayTourna');

// display data to tournament page
Route::get('/admin', [DataController::class, 'unapprovedTournament'])->name('unapprovedTournament');


//if it click approve button it will update the status in the database
Route::put('/admin/{id}', [PostController::class, 'approvedTournamentByAdmin'])->name('tournament_approve');


//get image from database show proof of payment and tournament logo
Route::get('/admin_pic', [DataController::class, 'showtournamentImages'])->name('showtournamentImages');
