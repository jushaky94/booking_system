<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/clinics', function () {
    return view('clinics');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/profile', function () {
    return view('profile');
});
