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

Auth::routes();

Route::post('new/confirmation', 'Auth\RegisterController@pre_check')->name('register.pre_check');

Route::get('login', 'App\Http\Controllers\LoginController@login');

Route::get('new', 'App\Http\Controllers\NewloginController@new');

Route::get('confirmation', 'App\Http\Controllers\NewloginController@confirmation');

Route::get('registered', 'App\Http\Controllers\NewloginController@registered');

Route::get('mail','App\Http\Controllers\NewloginController@mail');

// Route::get('/', function(){
//     return view('hobby.index');
// });


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
