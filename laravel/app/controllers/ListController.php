<?php

class ListController extends \BaseController {

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
		if (Auth::check())
		{
		    $username = Auth::user()->username;
		}else {
			$username = '';
		}

		$this->layout->content = View::make('list.index')->with('username', $username);		
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
		// return Input::all();

		$validator = Validator::make(Input::all(), Lst::$rules);
 
	    if ($validator->passes()) {

	        # validation has passed, save list in DB

	    	$list = new Lst;
		    $list->type = Input::get('type');
		    $list->company_name = Input::get('company_name');
		    $list->logo = Input::get('logo');
		    $list->category = Input::get('category');
		    $list->subcategory = Hash::make(Input::get('subcategory'));
		    $list->address_1 = Input::get('address_1');
		    $list->address_2 = Input::get('address_2');
		    $list->post_code = Input::get('post_code');
		    $list->location = Input::get('location');
		    $list->origin_country = Input::get('origin_country');
		    $list->business_nature = Input::get('business_nature');
		    $list->year_established = Input::get('year_established');
		    $list->company_background_info = Input::get('company_background_info');
		    $list->paid_up_capital = Input::get('paid_up_capital');
		    $list->no_of_employees = Input::get('no_of_employees');
		    $list->quality_certification = Input::get('quality_certification');
		    $list->bankers = Input::get('bankers');
		    $list->market_established = Input::get('market_established');
		    $list->main_shareholders = is_null(Input::get('main_shareholders')) ? 'no' : Input::get('main_shareholders');
		    $list->market_interested = is_null(Input::get('market_interested')) ? 'no' : Input::get('market_interested');
		    $list->number_of_offices_worldwide = is_null(Input::get('number_of_offices_worldwide')) ? 'no' : Input::get('number_of_offices_worldwide');
		    $list->links_to_related_companies = is_null(Input::get('links_to_related_companies')) ? 'no' : Input::get('links_to_related_companies');
		    $list->upload_video = is_null(Input::get('upload_video')) ? 'no' : Input::get('upload_video');
		    $list->major_facilities = is_null(Input::get('major_facilities')) ? 'no' : Input::get('major_facilities');
		    $list->major_customers = is_null(Input::get('major_customers')) ? 'no' : Input::get('major_customers');
		    $list->save();

		    if($list->id) {
		    	
		    	$tags = explode("," , Input::get('tags'));

		    	foreach ($tags as $key => $tag) {
		    		if(!empty($tags[$key])) {
		    			$tag = new Tag;
			    		$tag->list_id = $list->id;
			    		$tag->name = $tags[$key];
			    		$tag->save();	
		    		}		    	
		    	}
		    }
		 
		    return Redirect::to('/list')->with('list_message', 'Successfully created the list');

	    } else {
	        # validation has failed, display error messages
	    	return Redirect::to('/list')->with('list_message', 'The following errors occurred:')->withErrors($validator)->withInput();
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
