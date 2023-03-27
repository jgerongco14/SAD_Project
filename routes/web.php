<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

// Route::get('/folder/{file}', function ($file) {
//     return response()->file(public_path("folder/{$file}"));
// })->name('folder');

Route::get('/', function () {
    return view('login.login');
});


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

Route::get('/my_profile', function () {
    return view('profile.my_profile');
});

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/view_club', function () {
    return view('clubs.view_club');
});


Route::post('/', [LoginController::class,'registerUser'])->name('registerUser');