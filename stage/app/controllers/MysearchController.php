<?php

class MysearchController extends \BaseController {

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
		$my_searches = MySearch::where('user_id', '=', Auth::user()->id)->get();

		$query = Favourite::query();
		$favourites = $query->where('user_id', '=', Auth::user()->id)->paginate(5);

		$this->layout->content = View::make('mysearch.index')->with('my_searches', $my_searches)->with('favourites', $favourites);

	}	

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{		
		$validator = Validator::make(Input::all(), MySearch::$rules);
		if (Auth::check())
        {
            $user_id = Auth::user()->id;
        }
 
	    if ($validator->passes() && isset($user_id)) {

	    	try {
				$mysearch = new MySearch;
				$mysearch->name = Input::get('name');
				$mysearch->remarks = Input::get('remarks', '');
				$mysearch->user_id = $user_id;
				$mysearch->search_params = Input::get('search_params');
				$mysearch->save();
			}catch ( Illuminate\Database\QueryException $e ) {
			    return Response::json(['status' => 'duplicate', 'message' => $e->errorInfo], 400);
			}

			$insertedId = $mysearch->id;

	    	return Response::json(['status' => 'success', 'message' => Input::get('name')], 200);

	    }else 
			return Response::json(['status' => 'validation error', 'message' => $validator->messages()], 400);
		
	}


}
