<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', 'MainController@showWelcome');
Route::get('home', 'MainController@homeFunction');
Route::get('lastBooks', 'MainController@lastBooksFunction');
Route::get('about', 'MainController@aboutFunction');
Route::get('registration', 'MainController@registrationFunction');
Route::get('login', 'MainController@loginFunction');
