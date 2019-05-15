<?php

use App\Http\Controllers\PostController;

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/posts', 'PostController@index')->name('post.index');
Route::post('/posts', 'PostController@store')->name('post.store');
Route::delete('/posts/{post}', 'PostController@destroy')->name('post.destroy');
