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

		Paginator::setPageName('list_page');
		$lists = $query->paginate(2);

		Paginator::setPageName('premium_page');
		$premium_lists = $premium_query->paginate(2);

		$this->layout->content = View::make('advanced.result')
									->with('lists', $lists)
									->with('premium_lists', $premium_lists);
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

		// print_r($query->get()->toJSON());
		// print_r($premium_query->get()->toJSON()); 
		// exit();

		Paginator::setPageName('list_page');
		$lists = $query->paginate(2);

		Paginator::setPageName('premium_page');
		$premium_lists = $premium_query->paginate(2);

		$this->layout->content = View::make('advanced.result')
									->with('lists', $lists)
									->with('premium_lists', $premium_lists);
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
