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

	# set template
	protected $layout = "layouts.master";

	public function index()
	{
		if (Auth::check())
		{
		    $name = Auth::user()->first_name;
		}else {
			$name = '';
		}

		$this->layout->content = View::make('home.index')->with('name', $name);				
	}

}
