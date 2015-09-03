<?php

class SignupController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	# set template
	protected $layout = "layouts.master";

	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	}

	public function index()
	{
		//
		if (Auth::check())
		{
		    return Redirect::intended('/')->with('message', 'You are now logged in!');
		}

		$this->layout->content = View::make('signup.index');

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$validator = Validator::make(Input::all(), User::$rules);
 
	    if ($validator->passes()) {

	        # validation has passed, save user in DB

	    	$user = new User;
		    $user->plan = Input::get('plan');
		    $user->first_name = Input::get('first_name');
		    $user->last_name = Input::get('last_name');
		    $user->email = Input::get('email');
		    $user->password = Hash::make(Input::get('password'));
		    $user->country = Input::get('country');
		    $user->city = Input::get('city');
		    $user->state = Input::get('state');
		    $user->company = Input::get('company');
		    $user->job_title = Input::get('job_title');
		    $user->address_1 = Input::get('address_1');
		    $user->address_2 = Input::get('address_2');
		    $user->post_code = Input::get('postal_code');
		    $user->phone = Input::get('phone');
		    $user->profile_photo = (Input::has('profile_photo')) ? Input::get('profile_photo') : '';
		    $user->subscribe_newsletter = (Input::has('newsletter')) ? Input::get('newsletter') : false;
		    $user->save();

		 //    $pwd_char_count = strlen(Input::get('password'));

		 //    $data = array();
			// $data['username'] = Input::get('username');
			// $data['email'] = Input::get('email');
			// $data['pwd_char_count'] = $pwd_char_count;

		 // 	Mail::send('emails.welcome', $data, function($message)
			// {
			// 	$message->from('info@wesley.dev', 'Wesley');
			//     $message->to(Input::get('email'), Input::get('username'))->subject('Account Created On Wesley!');
			// });
		 
		    return Redirect::to('/sign-up')->with('message', 'Thanks for signing up!');

	    } else {
	        # validation has failed, display error messages
	    	return Redirect::to('/sign-up')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
	    }
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
