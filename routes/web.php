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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/',function(){
    return view('welcome');
});

// Route::get('login', 'App\Http\Controllers\LoginController@login');
Route::get('new', 'App\Http\Controllers\RegisterController@new');
// Route::post('confirmation', 'App\Http\Controllers\RegisterController@confirmation');

Route::get('main', 'App\Http\Controllers\MainController@main');

// --test-- //

// Route::get('hello', 'App\Http\Controllers\HelloController@index');

// Route::post('hello', 'App\Http\Controllers\HelloController@post');
