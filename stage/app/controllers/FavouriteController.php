<?php

class FavouriteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	# set template
	protected $layout = "layouts.master";

	public function index()
	{
		//
		$favourites = Favourite::where('user_id', '=', Auth::user()->id)->paginate(5);
		$this->layout->content = View::make('favourite.index')->with('favourites', $favourites);	
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
		$validator = Validator::make(Input::all(), Favourite::$rules);
		if (Auth::check())
        {
            $user_id = Auth::user()->id;
        }
 
	    if ($validator->passes() && isset($user_id)) {

	    	try {
				$favourite = new Favourite;
				$favourite->user_id = $user_id;
				$favourite->list_id = Input::get('list_id');
				$favourite->save();

				$response = Event::fire('favourite.store', array(Input::get('list_id')));

			}catch ( Illuminate\Database\QueryException $e ) {
			    return Response::json(['status' => 'duplicate', 'message' => $e->errorInfo], 400);
			}

			$insertedId = $favourite->id;

			return Response::json(['status' => 'success', 'message' => $insertedId], 200);

		}else 
			return Response::json(['status' => 'validation error', 'message' => $validator->messages()], 400);
		
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
		if(isset($id) && !empty($id)) {
			
			Favourite::destroy($id);	

			return Response::json(['status' => 'success', 'message' => $id], 200);

		}else 
			return Response::json(['status' => 'validation error', 'message' => 'empty'], 400);
		
		
	}


}
