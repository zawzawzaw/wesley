<?php

class LoginController extends \BaseController {

	# set template
	protected $layout = "layouts.master";

	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if (Auth::check())
		{
		    $name = Auth::user()->first_name;
		}else {
			$name = '';
		}

		$this->layout->content = View::make('login.index')->with('name', $name);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if ( Auth::attempt( array( 'email'=>Input::get('email'), 'password'=>Input::get('password') ), Input::has('rememberme') ) ) {
		    // return Redirect::to('users/profile')->with('message', 'You are now logged in!');
			// print_r(Auth::user()); exit();

		    return Redirect::intended('/')->with('message', 'You are now logged in!');
		} else {
		    return Redirect::to('/login')
		        ->with('login_message', 'Your username or password was incorrect.');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
    	return Redirect::to('/');
	}


}