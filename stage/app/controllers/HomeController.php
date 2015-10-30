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

		    $lists = []; //Lists::where('user_id', '=', Auth::user()->id)->get();

		    $events = Tracker::events(60 * 24, true, $lists);
			return $events;
		    
		}else {
			$name = '';
			$events = '';
		}

		$this->layout->content = View::make('home.index')->with('name', $name)->with('events', $events);				
	}

}
