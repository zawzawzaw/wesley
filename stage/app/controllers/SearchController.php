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
		$item_limit = Input::get('item_limit', 5);
		$sort_by = Input::get('sort_by', '');
		$all_lists_count = 0;

		if($item_limit=='all') $item_limit = 100000;

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
			if(Input::has('country')) {

				// free listings
				$query = $query->where('country', '=', Input::get('country'));

				// paid listings
				$premium_query = $premium_query->where('country', '=', Input::get('country'))->where('type', '=', 'Paid');	

			}
			if(Input::has('origin_country')) {

				// free listings
				$query = $query->where('origin_country', '=', Input::get('origin_country'));

				// paid listings
				$premium_query = $premium_query->where('origin_country', '=', Input::get('origin_country'))->where('type', '=', 'Paid');

			}

			// if user is on free account only show paid list but show how many list there are altogether
			$all_lists_count = $query->count();

			if(!Auth::check() || (Auth::check() && Auth::user()->plan == 'free')) {
				$query->where('type','=', 'Paid');
			}
			
			$query->orderBy('type','DESC');
			if($sort_by)
				$query->orderBy('company_name',$sort_by);

			// paginate
			Paginator::setPageName('list_page');
			$lists = $query->paginate($item_limit);

			Paginator::setPageName('premium_page');
			$premium_lists = $premium_query->paginate($item_limit);			

		}else {

			$custom_rules = array(
			    'text_search'=>'required',
			    'text_search_filter'=>'required'			     
		    );

			$validator = Validator::make(Input::all(), $custom_rules);

			if($validator->passes()) {

				if($filter == 'company_name') {

					Paginator::setPageName('list_page');
					if(!Auth::check() || (Auth::check() && Auth::user()->plan == 'free')) {

						if($sort_by) {
							$lists = Lists::with(['tags','keyproduct','productcatalog'])
									->where('company_name', 'like', '%'.$text_search.'%')
									->where('type','=', 'Paid')
									->orderBy('type','DESC')
									->orderBy('company_name',$sort_by)
									->paginate($item_limit);
						}else {
							$lists = Lists::with(['tags','keyproduct','productcatalog'])
								->where('company_name', 'like', '%'.$text_search.'%')
								->orderBy('type','DESC')
								->paginate($item_limit);
						}

						$lists_count = Lists::with(['tags','keyproduct','productcatalog'])->where('company_name', 'like', '%'.$text_search.'%')->get();

						$all_lists_count = $lists_count->count();

					}else {

						if($sort_by) {
							$lists = Lists::with(['tags','keyproduct','productcatalog'])
								->where('company_name', 'like', '%'.$text_search.'%')
								->orderBy('type','DESC')
								->orderBy('company_name',$sort_by)
								->paginate($item_limit);
						}else {
							$lists = Lists::with(['tags','keyproduct','productcatalog'])
								->where('company_name', 'like', '%'.$text_search.'%')
								->orderBy('type','DESC')
								->paginate($item_limit);
						}					
								
					}

					Paginator::setPageName('premium_page');
					$premium_lists = Lists::with(['tags','keyproduct','productcatalog'])->where('company_name', 'like', '%'.$text_search.'%')->where('type', '=', 'Paid')->orderBy('created_at','DESC')->paginate($item_limit);

				}else if($filter == 'product') {
					
					$all_products_count = 0;

					Paginator::setPageName('list_page');
					if(!Auth::check() || (Auth::check() && Auth::user()->plan == 'free')) {

						if($sort_by) {
							$products = KeyProduct::with(['lists'])
											->join('lists', 'key_products.lists_id', '=', 'lists.id')
											->where('product_name', 'like', '%'.$text_search.'%')
											->whereHas('lists', function($premium_query) {
												$premium_query->where('type', '=', 'Paid');
											})->orderBy('lists.type', 'DESC')
											->orderBy('company_name',$sort_by)
											->paginate($item_limit);
						}else {
							$products = KeyProduct::with(['lists'])
											->join('lists', 'key_products.lists_id', '=', 'lists.id')
											->where('product_name', 'like', '%'.$text_search.'%')
											->whereHas('lists', function($premium_query) {
												$premium_query->where('type', '=', 'Paid');
											})->orderBy('lists.type', 'DESC')
											->paginate($item_limit);
						}

						$products_count = KeyProduct::with(['lists'])
											->join('lists', 'key_products.lists_id', '=', 'lists.id')
											->where('product_name', 'like', '%'.$text_search.'%')
											->get();

						$all_products_count = $products_count->count();

					}else {

						if($sort_by) {
							$products = KeyProduct::with(['lists'])
										->join('lists', 'key_products.lists_id', '=', 'lists.id')       							
										->where('product_name', 'like', '%'.$text_search.'%')
										->orderBy('lists.type', 'DESC')
										->orderBy('company_name',$sort_by)						
										->paginate($item_limit);
						}else {
							$products = KeyProduct::with(['lists'])
										->join('lists', 'key_products.lists_id', '=', 'lists.id')       							
										->where('product_name', 'like', '%'.$text_search.'%')
										->orderBy('lists.type', 'DESC')								
										->paginate($item_limit);
						}
								
					}

					Paginator::setPageName('premium_page');
					$premium_products = KeyProduct::with(['lists'])
										->where('product_name', 'like', '%'.$text_search.'%')
										->whereHas('lists', function($premium_query) {
											$premium_query->where('type', '=', 'Paid');
										})->paginate($item_limit);				

				}else if($filter == 'tags') {

					Paginator::setPageName('list_page');

					if(!Auth::check() || (Auth::check() && Auth::user()->plan == 'free')) {

						if($sort_by) {
							$lists = Lists::with(['tags','keyproduct','productcatalog'])
										->whereHas('tags', function($premium_query) use( &$text_search) {
											$premium_query->where('name', 'like', '%'.$text_search.'%');
										})->where('type', '=', 'Paid')
										->orderBy('type','DESC')
										->orderBy('company_name',$sort_by)
										->paginate($item_limit);
						}else {
							$lists = Lists::with(['tags','keyproduct','productcatalog'])
										->whereHas('tags', function($premium_query) use( &$text_search) {
											$premium_query->where('name', 'like', '%'.$text_search.'%');
										})->where('type', '=', 'Paid')
										->orderBy('type','DESC')
										->paginate($item_limit);
						}

						$lists_count = Lists::with(['tags','keyproduct','productcatalog'])
										->whereHas('tags' , function($query) use( &$text_search) {
											$query->where('name', 'like', '%'.$text_search.'%');
										})->get();

						$all_lists_count = $lists_count->count();

					}else {

						if($sort_by) {
							$lists = Lists::with(['tags','keyproduct','productcatalog'])
										->whereHas('tags' , function($query) use( &$text_search) {
											$query->where('name', 'like', '%'.$text_search.'%');
										})->orderBy('type','DESC')->paginate($item_limit);
						}else {
							$lists = Lists::with(['tags','keyproduct','productcatalog'])
										->whereHas('tags' , function($query) use( &$text_search) {
											$query->where('name', 'like', '%'.$text_search.'%');
										})->orderBy('type','DESC')->orderBy('company_name',$sort_by)->paginate($item_limit);
						}
								
					}

					Paginator::setPageName('premium_page');
					$premium_lists = Lists::with(['tags','keyproduct','productcatalog'])
										->whereHas('tags', function($premium_query) use( &$text_search) {
											$premium_query->where('name', 'like', '%'.$text_search.'%');
										})->where('type', '=', 'Paid')
										->orderBy('created_at','DESC')
										->paginate($item_limit);
					
				}				

			} 
			else 
				return Redirect::to('/search')->with('text_search_message', 'The following errors occurred:')->withErrors($validator)->withInput();			
		
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
									->with('premium_products', $premium_products)							
									->with('all_products_count', $all_products_count);									
		}else {
			// debug
			// return $lists;
			// return $premium_lists;	

			$this->layout->content = View::make('search.result')
									->with('lists', $lists)
									->with('premium_lists', $premium_lists)
									->with('all_lists_count', $all_lists_count);
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
