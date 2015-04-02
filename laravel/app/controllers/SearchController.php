<?php

class SearchController extends \BaseController {

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
		$this->layout->content = View::make('search.index');
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
		$text_search = Input::get('text_search');
		$filter = Input::get('text_search_filter');
		$form_type = Input::get('form_type');

		// return $text_search;
		// return $form_type;

		if($form_type=='smart') {

			$query = Lists::query();
			$premium_query = Lists::query();

			if(Input::has('category')) {

				// free listings
				$query = $query->where('category', '=', Input::get('category'));

				// paid listings
				$premium_query = $premium_query->where('category', '=', Input::get('category'))->whereHas('users', function($premium_query) {
					$premium_query->where('type', '=', 'Paid');
				});
				
			}
			if(Input::has('subcategory')) {

				// free listings
				$query = $query->where('subcategory', '=', Input::get('subcategory'));

				// paid listings
				$premium_query = $premium_query->where('subcategory', '=', Input::get('subcategory'))->whereHas('users', function($premium_query) {
					$premium_query->where('type', '=', 'Paid');
				});

			}
			if(Input::has('location')) {

				// free listings
				$query = $query->where('location', '=', Input::get('location'));

				// paid listings
				$premium_query = $premium_query->where('location', '=', Input::get('location'))->whereHas('users', function($premium_query) {
					$premium_query->where('type', '=', 'Paid');
				});			

			}
			if(Input::has('country')) {

				// free listings
				$query = $query->where('country', '=', Input::get('country'));

				// paid listings
				$premium_query = $premium_query->where('country', '=', Input::get('country'))->whereHas('users', function($premium_query) {
					$premium_query->where('type', '=', 'Paid');
				});

			}

			$lists = $query->paginate(2);
			$premium_lists = $premium_query->paginate(2);

			// if no result found
			if($lists->isEmpty()) {
				return Redirect::to('/search')
			        ->with('smart_search_message', 'No list was found!')->withInput();			
			}

		}else {

			$custom_rules = array(
			    'text_search'=>'required',
			    'text_search_filter'=>'required'			     
		    );

			$validator = Validator::make(Input::all(), $custom_rules);

			if($validator->passes()) {

				if($filter == 'company_name') {

					$lists = Lists::with(['tags','keyproduct','productcatalog'])->where('company_name', 'like', '%'.$text_search.'%')->orderBy('created_at','DESC')->paginate(2);

					$premium_lists = Lists::with(['tags','keyproduct','productcatalog'])->where('company_name', 'like', '%'.$text_search.'%')->whereHas('users', function($premium_query) {
						$premium_query->where('type', '=', 'Paid');
					})->orderBy('created_at','DESC')->paginate(2);

					// return $premium_lists;

				}else if($filter == 'product') {

					$lists = Lists::with(['tags','keyproduct','productcatalog'])->whereHas('keyproduct', function($query) use( &$text_search) {
						$query->where('product_name', 'like', '%'.$text_search.'%');
					})->orderBy('created_at','DESC')->paginate(2);

					$premium_lists = Lists::with(['tags','keyproduct','productcatalog'])->whereHas('keyproduct', function($premium_query) use( &$text_search) {
						$premium_query->where('product_name', 'like', '%'.$text_search.'%');
					})->whereHas('users', function($premium_query) {
						$premium_query->where('type', '=', 'Paid');
					})->orderBy('created_at','DESC')->paginate(2);

					// return $premium_lists;

				}else if($filter == 'tags') {

					$lists = Lists::with(['tags','keyproduct','productcatalog'])->whereHas('tags' , function($query) use( &$text_search) {
						$query->where('name', 'like', '%'.$text_search.'%');
					})->orderBy('created_at','DESC')->paginate(2);

					$premium_lists = Lists::with(['tags','keyproduct','productcatalog'])->whereHas('tags', function($premium_query) use( &$text_search) {
						$premium_query->where('name', 'like', '%'.$text_search.'%');
					})->whereHas('users', function($premium_query) {
						$premium_query->where('type', '=', 'Paid');
					})->orderBy('created_at','DESC')->paginate(2);

					// return $premium_lists;

				}

				// if no result found
				if($lists->isEmpty()) {
					return Redirect::to('/search')
			        	->with('text_search_message', 'No list was found!')->withInput();
				}

			} else return Redirect::to('/search')->with('text_search_message', 'The following errors occurred:')->withErrors($validator)->withInput();			
		
		}
		
		// debug
		// $queries = DB::getQueryLog();
		// $last_query = end($queries);
		// print_r($last_query); exit();
		// return $lists;	
		
		if($form_type=='text' && $filter == 'product') {			
			$this->layout->content = View::make('search.result_product')
									->with('lists', $lists)
									->with('premium_lists', $premium_lists);									
		}else {
			$this->layout->content = View::make('search.result')
									->with('lists', $lists)
									->with('premium_lists', $premium_lists);
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
		$list = Lists::with(array('tags','keyproduct','productcatalog'))->where('id', $id)->orderBy('created_at','DESC')->first();

        // return $list;

        $this->layout->content = View::make('search.show')->with('list', $list)->with('id', $id);
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

	/**
	 * Custom function for company product by product id
	 */
	public function company($id)
	{
		//
		$list = Lists::with(array('tags','keyproduct','productcatalog'))->where('id', $id)->orderBy('created_at','DESC')->first();

		// return $list;

        $this->layout->content = View::make('search.show_company_product')->with('list', $list)->with('id', $id);

	}


}
