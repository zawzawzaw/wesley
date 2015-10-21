<?php

class MyaccountController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $layout = "layouts.master";

	public function index()
	{
		//
		$lists = Lists::where('user_id', '=', Auth::user()->id)->get();
		$this->layout->content = View::make('myaccount.index')->with('lists', $lists);
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
		$id = Auth::user()->id;
		$user = User::find($id);
		$this->layout->content = View::make('myaccount.edit')->with('user', $user);

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
		$id = Auth::user()->id;
		$user = User::find($id);

		// print_r(Input::all()); exit();

		if($user->email==Input::get('email'))
			$rules = array(
			    'first_name'=>'required',
			    'last_name'=>'required',
			    'email'=>'required|email',
			    'password'=>'min:8',
			    'country'=>'required',
			    'job_title'=>'required',
			    'city'=>'required'
		    );
		else
			$rules = array(
			    'first_name'=>'required',
			    'last_name'=>'required',
			    'email'=>'required|email|unique:users',
			    'password'=>'min:8',
			    'country'=>'required',
			    'job_title'=>'required',
			    'city'=>'required'
		    );
		$validator = Validator::make(Input::all(), $rules);
 
	    if ($validator->passes()) {	    	
			$user->first_name = Input::get('first_name');
		    $user->last_name = Input::get('last_name');
	    	$user->email = Input::get('email');
		    if(Input::has('password')) {
			    $user->password = Hash::make(Input::get('password'));
			}
		    $user->country = Input::get('country');
		    $user->company = Input::get('company');
		    $user->job_title = Input::get('job_title');
		    $user->address_1 = Input::get('address_1');
		    $user->address_2 = Input::get('address_2');
		    $user->post_code = Input::get('postal_code');
		    $user->city = Input::get('city');
		    $user->state = Input::get('state');
		    $user->phone = Input::get('phone');
		    $user->profile_photo = (Input::has('profile_photo')) ? Input::get('profile_photo') : '';
		    $user->subscribe_newsletter = (Input::has('newsletter')) ? Input::get('newsletter') : false;
			$user->save();

	    	return Redirect::to('/myaccount')->with('message', 'Account Particular has been updated!');

	    } else {
	        # validation has failed, display error messages
	    	return Redirect::to('/myaccount/'.$id.'/edit')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
	    }		
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
