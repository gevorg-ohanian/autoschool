<?php

class HomeController extends BaseController {

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
		return View::make('main.index');
	}

	public function showContacts()
	{
		return View::make('main.contact');
	}

	public function showOffer()
	{
		return View::make('main.offer');
	}

	public function insertClients()
	{

	}
}
