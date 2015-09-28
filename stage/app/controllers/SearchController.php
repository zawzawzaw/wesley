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
				$premium_query = $premium_query->where('category', '=', Input::get('category'))->where('type', '=', 'Paid');
				
			}
			if(Input::has('subcategory')) {

				// free listings
				$query = $query->where('subcategory', '=', Input::get('subcategory'));

				// paid listings
				$premium_query = $premium_query->where('subcategory', '=', Input::get('subcategory'))->where('type', '=', 'Paid');

			}
			if(Input::has('location')) {

				// free listings
				$query = $query->where('location', '=', Input::get('location'));

				// paid listings
				$premium_query = $premium_query->where('location', '=', Input::get('location'))->where('type', '=', 'Paid');	

			}
			if(Input::has('country')) {

				// free listings
				$query = $query->where('country', '=', Input::get('country'));

				// paid listings
				$premium_query = $premium_query->where('country', '=', Input::get('country'))->where('type', '=', 'Paid');

			}

			$query->orderBy('type','DESC');

			Paginator::setPageName('list_page');
			$lists = $query->paginate(5);

			Paginator::setPageName('premium_page');
			$premium_lists = $premium_query->paginate(5);

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

					Paginator::setPageName('list_page');
					$lists = Lists::with(['tags','keyproduct','productcatalog'])
							->where('company_name', 'like', '%'.$text_search.'%')
							->orderBy('type','DESC')
							->paginate(5);

					Paginator::setPageName('premium_page');
					$premium_lists = Lists::with(['tags','keyproduct','productcatalog'])->where('company_name', 'like', '%'.$text_search.'%')->where('type', '=', 'Paid')->orderBy('created_at','DESC')->paginate(5);

				}else if($filter == 'product') {

					// $lists = Lists::with(['tags','keyproduct','productcatalog'])->whereHas('keyproduct', function($query) use( &$text_search) {
					// 	$query->where('product_name', 'like', '%'.$text_search.'%');
					// })->orderBy('created_at','DESC')->paginate(5);

					// $premium_lists = Lists::with(['tags','keyproduct','productcatalog'])->whereHas('keyproduct', function($premium_query) use( &$text_search) {
					// 	$premium_query->where('product_name', 'like', '%'.$text_search.'%');
					// })->whereHas('users', function($premium_query) {
					// 	$premium_query->where('type', '=', 'Paid');
					// })->orderBy('created_at','DESC')->paginate(5);

					Paginator::setPageName('list_page');
					$products = KeyProduct::with(['lists'])
								->join('lists', 'key_products.lists_id', '=', 'lists.id')       							
								->where('product_name', 'like', '%'.$text_search.'%')
								->orderBy('lists.type', 'DESC')								
								->paginate(5);

					Paginator::setPageName('premium_page');
					$premium_products = KeyProduct::with(['lists'])
										->where('product_name', 'like', '%'.$text_search.'%')
										->whereHas('lists', function($premium_query) {
											$premium_query->where('type', '=', 'Paid');
										})->paginate(5);				

				}else if($filter == 'tags') {

					Paginator::setPageName('list_page');
					$lists = Lists::with(['tags','keyproduct','productcatalog'])->whereHas('tags' , function($query) use( &$text_search) {
						$query->where('name', 'like', '%'.$text_search.'%');
					})->orderBy('type','DESC')->paginate(5);

					Paginator::setPageName('premium_page');
					$premium_lists = Lists::with(['tags','keyproduct','productcatalog'])->whereHas('tags', function($premium_query) use( &$text_search) {
						$premium_query->where('name', 'like', '%'.$text_search.'%');
					})->where('type', '=', 'Paid')->orderBy('created_at','DESC')->paginate(5);
					
				}

				// if no result found (list is including premium so only check on list)
				if(isset($lists) && $lists->isEmpty()) {
					return Redirect::to('/search')
			        	->with('text_search_message', 'No list was found!')->withInput();
				}

				if(isset($products) && $products->isEmpty()) {
					return Redirect::to('/search')
			        	->with('text_search_message', 'No product was found!')->withInput();
				}

			} else return Redirect::to('/search')->with('text_search_message', 'The following errors occurred:')->withErrors($validator)->withInput();			
		
		}
		
		// debug
		// $queries = DB::getQueryLog();
		// $last_query = end($queries);
		// print_r($last_query); exit();		
		
		if($form_type=='text' && $filter == 'product') {
			// debug
			// return $products;
			// return $premium_products;

			$this->layout->content = View::make('search.result_product')
									->with('products', $products)
									->with('premium_products', $premium_products);									
		}else {
			// debug
			// return $lists;
			// return $premium_lists;	

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
