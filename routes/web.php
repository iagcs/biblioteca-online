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

Route::get('/books', 'App\Http\Controllers\BookController@index');
Route::get('/books/create', 'App\Http\Controllers\BookController@create');
Route::post('/books/create', 'App\Http\Controllers\BookController@store');
Route::get('/books/{id}', 'App\Http\Controllers\BookController@show');
Route::get('/books/edit/{id}', 'App\Http\Controllers\BookController@edit');
Route::post('/books/edit/{id}', 'App\Http\Controllers\BookController@update');
Route::delete('/books/{id}', 'App\Http\Controllers\BookController@destroy');
