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

Route::get('login', 'App\Http\Controllers\HobbyController@login');

Route::get('new', 'App\Http\Controllers\HobbyController@new');

Route::get('confirmation', 'App\Http\Controllers\HobbyController@confirmation');

Route::get('registered', 'App\Http\Controllers\HobbyController@registered');

Route::get('mail','App\Http\Controllers\HobbyController@mail');
// Route::get('/', function(){
//     return view('hobby.index');
// });


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
