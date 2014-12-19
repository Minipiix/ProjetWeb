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
		//return View::make('enter');
		return View::make('index');
	}
	
	public function showHelp()
	{
		return View::make('help');
	}
	
	public function showLivres()
	{
		return View::make('livres');
	}
	
	public function showAuteur()
	{
		return View::make('auteur');
	}
	
	public function showCollection()
	{
		return View::make('collection');
	}
	
	public function showBlog()
	{
		return View::make('blog');
	}
	
		public function showTopAuteur()
	{
		return View::make('top_Auteur');
	}
}
