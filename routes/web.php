<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

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
Route::get('/login', function () {
    return view('auth.login');
});

;
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('user', [AuthController::class, 'user']);
    
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/home', 'DashboardController@dashboard')->name('home');

    Route::apiResource('roles', RoleController::class);
    Route::apiResource('products', ProductController::class);
    Route::apiResource('users', UserController::class);
    Route::get('permissions', [PermissionController::class, 'index']);
    Route::post('upload', [ImageController::class, 'upload']);
    Route::apiResource('orders', OrderController::class)->only('index', 'show');

    Route::post('export', [OrderController::class, 'export']);
    Route::get('chart', [OrderController::class, 'chart']);


    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});