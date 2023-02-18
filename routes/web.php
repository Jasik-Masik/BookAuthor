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

Route::get('/book', 'App\Http\Controllers\MainController@book')->name('book');
Route::get('/form', 'App\Http\Controllers\MainController@form')->name('form');
Route::post('/form/submit', 'App\Http\Controllers\MainController@submit')->name('form-submit');
