<?php

class ListAdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $layout = "layouts.master";

	public function index()
	{
		//
		if (Auth::check())
        {
            $user_id = Auth::user()->id;
        }
		$lists = Lists::where('user_id', '=', $user_id)->get();
		$this->layout->content = View::make('listadmin.index')->with('lists', $lists);		
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
		$validator = Validator::make(Input::all(), Listadmin::$rules);

		if($validator->passes()) {

			$user = User::where('email', '=', Input::get('email'))->first();			

			$count = ListAdmin::where('list_id', '=', Input::get('list_id'))->count();

			if($count < 5) {

				try {

					$admin_permissions = Input::get('admin_permissions');

					$listadmin = new ListAdmin;
					$listadmin->user_id = $user->id;
					$listadmin->list_id = Input::get('list_id');
					$listadmin->admin_permissions = json_encode($admin_permissions);
					$listadmin->save();

					$insertedId = $listadmin->id;

					return Redirect::intended('/listadmin')->with('message', 'Successfully added admin to list ' . Lists::find(Input::get('list_id'))->company_name);

				}catch ( Illuminate\Database\QueryException $e ) {
					return Redirect::to('/listadmin')->with('message', 'This user is already added as admin to your list');			
				}

			}else 
				return Redirect::to('/listadmin')->with('message', 'Maxium no of admin has been added to this list');							

		}else 
			return Redirect::to('/listadmin')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
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
		if (Request::ajax()) {

			$listadmin = ListAdmin::with(['users'])->where('list_id', '=', $id)->get();
			return $listadmin;

		}else {

			$listadmin = ListAdmin::with(['users'])->find($id);
			
			$this->layout->content = View::make('listadmin.edit')->with('listadmin', $listadmin);

		}
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
		$validator = Validator::make(Input::all(), Listadmin::$rules);

		if($validator->passes()) {
			$admin_permissions = Input::get('admin_permissions');
			$user = User::where('email', '=', Input::get('email'))->first();			

			try {
				$listadmin = ListAdmin::find($id);
				$listadmin->user_id = $user->id;
				$listadmin->list_id = Input::get('list_id');
				$listadmin->admin_permissions = json_encode($admin_permissions);
				$listadmin->save();
			}catch ( Illuminate\Database\QueryException $e ) {
				return Redirect::to('/listadmin/'.$id.'/edit')->with('message', 'This user is already added as admin to your list');			
			}


			return Redirect::to('/listadmin/'.$id.'/edit')->with('message', 'List admin has been updated!');
		}else {
	        # validation has failed, display error messages
	    	return Redirect::to('/listadmin/'.$id.'/edit')->with('message', 'The following errors occurred:')->withErrors($validator)->withInput();
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
		if(isset($id) && !empty($id)) {
			
			ListAdmin::destroy($id);	

			return Response::json(['status' => 'success', 'message' => $id], 200);

		}else 
			return Response::json(['status' => 'validation error', 'message' => 'empty'], 400);
	}


}
