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

Route::get('register', function()
{
  return View::make('registration');
});
Route::get('/', 'MainController@showWelcome');
Route::get('help', 'MainController@showHelp');
Route::get('livres', 'MainController@showLivres');
Route::get('auteur', 'MainController@showAuteur');
Route::get('collection', 'MainController@showCollection');
Route::get('blog', 'MainController@showBlog');
Route::get('top_Auteur', 'MainController@showTopAuteur');



Route::get('test', 'HomeController@showTest');
