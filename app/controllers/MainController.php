<?php

class MainController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('index');
	}

	public function introFunction()
	{
		return View::make('intro');
	}

	
	public function aboutFunction()
	{
		return View::make('about');
	}
	

	public function lastBooksFunction()
	{
		return View::make('lastBooks');
	}

	public function registrationFunction()
	{
		return View::make('registration');
	}

	public function loginFunction()
	{
		return View::make('login');
	}
}
