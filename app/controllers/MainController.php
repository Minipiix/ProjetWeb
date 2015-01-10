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
		return View::make('pages.home');
	}

	public function introFunction()
	{
		return View::make('pages.intro');
	}

	
	public function aboutFunction()
	{
		return View::make('pages.about');
	}
	

	public function lastBooksFunction()
	{
		return View::make('pages.lastBooks');
	}

	public function registrationFunction()
	{
		return View::make('pages.registration');
	}

	public function loginFunction()
	{
		return View::make('pages.login');
	}
}
