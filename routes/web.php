<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/tournament', function () {
    return view('tournament');
});

Route::get('/tourna_content', function () {
    return view('tourna_content');
});

Route::get('/clubs', function () {
    return view('clubs');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/coach', function () {
    return view('coach');
});

Route::get('/player', function () {
    return view('player');
});

Route::get('/manage_tourna', function () {
    return view('manage_tourna');
});