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

//Route::get('/', function () {
    //return view('welcome');
//});
Route::get('/home', 'App\Http\Controllers\PagesController@index');

Route::get('/admissions', 'App\Http\Controllers\PagesController@admissions');

Route::get('/sports', 'App\Http\Controllers\PagesController@sports');

Route::get('/studentlife', 'App\Http\Controllers\PagesController@studentlife');

Route::get('/academics', 'App\Http\Controllers\PagesController@academics');

Route::get('/contact', 'App\Http\Controllers\PagesController@contact');


Route::resource('post', 'App\Http\Controllers\PostController');
