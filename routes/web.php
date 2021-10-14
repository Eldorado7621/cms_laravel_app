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
    return view('index');
});

Route::get('/events', function () {
    return view('events');
});
Route::get('/livestream', function () {
    return view('livestream');
});
Route::get('/sermons', function () {
    return view('sermons');
});
Route::get('/contact-pastor', function () {
    return view('contact_pastor');
});