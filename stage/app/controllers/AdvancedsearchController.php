<?php

class AdvancedsearchController extends \BaseController {

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
		$query = Lists::query();
		$premium_query = Lists::query()->where('type', '=', 'Paid');
		$item_limit = Input::get('item_limit', 5);
		$all_lists_count = 0;

		if($item_limit=='all') $item_limit = 100000;

		// if user is on free account only show paid list but show how many list there are altogether
		$all_lists_count = $query->count();

		if(!Auth::check() || (Auth::check() && Auth::user()->plan == 'free')) {
			$query->where('type','=', 'Paid');
		}

		$query->orderBy('type','DESC');

		Paginator::setPageName('list_page');
		$lists = $query->paginate($item_limit);

		Paginator::setPageName('premium_page');
		$premium_lists = $premium_query->paginate($item_limit);

		$this->layout->content = View::make('advanced.result')
									->with('lists', $lists)
									->with('premium_lists', $premium_lists)
									->with('all_lists_count', $all_lists_count);
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
		$query = Lists::query();
		$premium_query = Lists::query()->where('type', '=', 'Paid');
		$item_limit = Input::get('item_limit', 5);
		$sort_by = Input::get('sort_by', '');
		$all_lists_count = 0;

		if($item_limit=='all') $item_limit = 100000;

		if(Input::has('proximity') && Input::get('proximity')=='yes') {

			$user = Auth::user();

			$city = Auth::user()->city;
			$state = Auth::user()->state;

			// free listings
			if(!empty($city)) $query = $query->where('city', '=', $city);
			if(!empty($state)) $query = $query->where('state', '=', $state);

			// paid listings
			if(!empty($city)) $premium_query = $premium_query->where('city', '=', $city)->where('type', '=', 'Paid');
			if(!empty($state)) $premium_query = $premium_query->where('state', '=', $state)->where('type', '=', 'Paid');

			// print_r($query->get()->toJSON());			
			
		}
		if(Input::has('industry_estate')) {			

			// free listings
			$query = $query->where('industry_estate', 'LIKE', '%' . Input::get('industry_estate') .'%');

			// paid listings
			$premium_query = $premium_query->where('industry_estate', 'LIKE', '%' . Input::get('industry_estate') .'%')->where('type', '=', 'Paid');

		}
		if(Input::has('post_code')) {

			// free listings
			$query = $query->where('post_code', '=', Input::get('post_code'));

			// paid listings
			$premium_query = $premium_query->where('post_code', '=', Input::get('post_code'))->where('type', '=', 'Paid');	

		}
		if(Input::has('multiple_countries')) {

			$multiple_countries = Input::get('multiple_countries');

			if(count(array_filter($multiple_countries)) == count($multiple_countries)) {
				$query = $query->where(function($query) use($multiple_countries) {
					foreach ($multiple_countries as $key => $country) {
						$query->orWhere('country', '=', $country);
					}
				});

				$premium_query = $premium_query->where('type', '=', 'Paid')->where(function($premium_query) use($multiple_countries) {
					foreach ($multiple_countries as $key => $country) {
						$premium_query->orWhere('country', '=', $country);
					}
				});
			}
		}

		// if user is on free account only show paid list but show how many list there are altogether
		$all_lists_count = $query->count();

		if(!Auth::check() || (Auth::check() && Auth::user()->plan == 'free')) {
			$query->where('type','=', 'Paid');
		}

		$query->orderBy('type','DESC');
		if($sort_by)
			$query->orderBy('company_name',$sort_by);

		// print_r($query->get()->toJSON());
		// print_r($premium_query->get()->toJSON()); 
		// exit();

		Paginator::setPageName('list_page');
		$lists = $query->paginate($item_limit);

		Paginator::setPageName('premium_page');
		$premium_lists = $premium_query->paginate($item_limit);

		$this->layout->content = View::make('advanced.result')
									->with('lists', $lists)
									->with('premium_lists', $premium_lists)
									->with('all_lists_count', $all_lists_count);
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
