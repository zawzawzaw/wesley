<?php

class ListController extends \BaseController {

	/**
	 * Display a list of the resource.
	 *
	 * @return Response
	 */

	# set template
	protected $layout = "layouts.master";

	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('auth');
	}

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

		$validator = Validator::make(Input::all(), Lists::$rules);
 
	    if ($validator->passes()) {

	        # validation has passed, save list in DB

	    	$lists = new Lists;
		    $lists->user_id = Auth::user()->id;
		    $lists->type = Input::get('type');
		    $lists->company_name = Input::get('company_name');
		    $lists->logo = Input::get('logo');
		    $lists->category = Input::get('category');
		    $lists->subcategory = Input::get('subcategory');
		    $lists->address_1 = Input::get('address_1');
		    $lists->address_2 = Input::get('address_2');
		    $lists->city = Input::get('city');
		    $lists->post_code = Input::get('post_code');
		    $lists->state = Input::get('state');
		    $lists->country = Input::get('country');
		    $lists->origin_country = Input::get('origin_country');
		    $lists->business_nature = Input::get('business_nature');
		    $lists->year_established = Input::get('year_established');
		    $lists->company_background_info = Input::get('company_background_info');
		    $lists->paid_up_capital = Input::get('paid_up_capital');
		    $lists->no_of_employees = Input::get('no_of_employees');
		    $lists->quality_certification = Input::get('quality_certification');
		    $lists->production_capability = Input::get('production_capability');
		    $lists->bankers = Input::get('bankers');
		    $lists->market_established = Input::get('market_established');
		    $lists->main_shareholders = is_null(Input::get('main_shareholders')) ? 'no' : Input::get('main_shareholders');
		    $lists->market_interested = is_null(Input::get('market_interested')) ? 'no' : Input::get('market_interested');
		    $lists->number_of_offices_worldwide = is_null(Input::get('number_of_offices_worldwide')) ? 'no' : Input::get('number_of_offices_worldwide');
		    $lists->links_to_related_companies = is_null(Input::get('links_to_related_companies')) ? 'no' : Input::get('links_to_related_companies');
		    $lists->upload_video = is_null(Input::get('upload_video')) ? 'no' : Input::get('upload_video');
		    $lists->major_facilities = is_null(Input::get('major_facilities')) ? 'no' : Input::get('major_facilities');
		    $lists->major_customers = is_null(Input::get('major_customers')) ? 'no' : Input::get('major_customers');
		    $lists->save();

		    if($lists->id) {
		    	
		    	$tags = explode("," , Input::get('tags'));

		    	foreach ($tags as $key => $tag) {
		    		if(!empty($tags[$key])) {
		    			$tag = new Tag;
			    		$tag->lists_id = $lists->id;
			    		$tag->name = $tags[$key];
			    		$tag->save();	
		    		}		    	
		    	}

		    	$key_product_count = Input::get('key_product_count');
		    	$key_product_ids = Input::get('key_product_ids');

		    	$key_product_ids_arr = explode(",", $key_product_ids);

		    	if($key_product_count>0) {
		    		foreach ($key_product_ids_arr as $key => $key_product_id) {
			    		$key_product = new KeyProduct;
			    		$key_product->lists_id = $lists->id;
			    		$key_product->category = Input::get('key_product_category_'.$key_product_id);
			    		$key_product->subcategory = Input::get('key_product_subcategory_'.$key_product_id);
			    		$key_product->product_name = Input::get('key_product_name_'.$key_product_id);
			    		$key_product->product_specifics = Input::get('key_product_specifics_'.$key_product_id);
			    		$key_product->image = Input::get('key_product_image_'.$key_product_id);
			    		$key_product->save();
			    	}	
		    	}

		    	$product_catalog_count = Input::get('product_catalog_count');
		    	$product_catalog_ids = Input::get('product_catalog_ids');

		    	$product_catalog_ids_arr = explode(",", $product_catalog_ids);

		    	if($product_catalog_count>0) {
		    		foreach ($product_catalog_ids_arr as $key => $product_catalog_id) {
			    		$product_catalog = new ProductCatalog;
			    		$product_catalog->lists_id = $lists->id;
			    		$product_catalog->title = Input::get('product_catalog_title_'.$product_catalog_id);
			    		$product_catalog->file = Input::get('product_catalog_'.$product_catalog_id);
			    		$product_catalog->save();
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
		$list = Lists::with(array('tags','keyproduct','productcatalog'))->where('id', $id)->orderBy('created_at','DESC')->first();

        return $list;

        // $this->layout->content = View::make('list.show')->with('list', $list)->with('id', $id);
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