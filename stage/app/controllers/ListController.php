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

	    $OAUTH2_CLIENT_ID = Config::get('custom.OAUTH2_CLIENT_ID');
        $OAUTH2_CLIENT_SECRET = Config::get('custom.OAUTH2_CLIENT_SECRET');;
        $this->client = new Google_Client();
        $this->client->setClientId($OAUTH2_CLIENT_ID);
        $this->client->setClientSecret($OAUTH2_CLIENT_SECRET);
        $this->client->setScopes('https://www.googleapis.com/auth/youtube');
        $this->redirect = filter_var(URL::to('/') . '/list?upload_youtube=yes', FILTER_SANITIZE_URL);
        $this->client->setRedirectUri($this->redirect);

        $this->youtube = new Google_Service_YouTube($this->client);
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

		$authorized = false;

		if(!isset($_SESSION)){
		    session_start();
		}

		if(Input::get('upload_youtube')) {	        

	        if (isset($_GET['code'])) {
	          if (strval($_SESSION['state']) !== strval($_GET['state'])) {
	            die('The session state did not match.');
	          }
	          $this->client->authenticate($_GET['code']);
	          $_SESSION['token'] = $this->client->getAccessToken();
	          header('Location: ' . $this->redirect);
	        }

	        if (isset($_SESSION['token'])) {
	        	$authorized = true;
	        	
	          	$this->client->setAccessToken($_SESSION['token']);
	        }

	        // Check to ensure that the access token was successfully acquired.
	        if ($this->client->getAccessToken()) {
	        	$authorized = true;
	            $_SESSION['token'] = $this->client->getAccessToken();
	        } else {            
	            // If the user hasn't authorized the app, initiate the OAuth flow
	            $state = mt_rand();
	            $this->client->setState($state);
	            $_SESSION['state'] = $state;
	            $authUrl = $this->client->createAuthUrl();            

	            return Redirect::away($authUrl);            
	        }
	        
		}
		// session_destroy();

		$this->layout->content = View::make('list.index')->with('username', $username)->with('authorized', $authorized);
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
		    $lists->upload_video = is_null(Input::get('upload_video')) ? '' : Input::get('upload_video');		    
		    $lists->major_facilities = is_null(Input::get('major_facilities')) ? 'no' : Input::get('major_facilities');
		    $lists->major_customers = is_null(Input::get('major_customers')) ? 'no' : Input::get('major_customers');

		    if(!isset($_SESSION)){
		    	session_start();
		    }

			if (isset($_SESSION['token'])) {
	          $this->client->setAccessToken($_SESSION['token']);	          
	        }

	        if ($this->client->getAccessToken() && $lists->upload_video!='' && Input::get('upload_youtube')=='yes') {
				try{
				    // REPLACE this value with the path to the file you are uploading.
				    $videoPath = public_path() . "/uploads/videos/".$lists->upload_video;
				    // Create a snippet with title, description, tags and category ID
				    // Create an asset resource and set its snippet metadata and type.
				    // This example sets the video's title, description, keyword tags, and
				    // video category.
				    $snippet = new Google_Service_YouTube_VideoSnippet();
				    $snippet->setTitle($lists->company_name);
				    $snippet->setDescription('');
				    $snippet->setTags(array("specktram", $lists->category, $lists->subcategory));
				    // Numeric video category. See
				    // https://developers.google.com/youtube/v3/docs/videoCategories/list 
				    $snippet->setCategoryId("22");
				    // Set the video's status to "public". Valid statuses are "public",
				    // "private" and "unlisted".
				    $status = new Google_Service_YouTube_VideoStatus();
				    $status->privacyStatus = "public";
				    // Associate the snippet and status objects with a new video resource.
				    $video = new Google_Service_YouTube_Video();
				    $video->setSnippet($snippet);
				    $video->setStatus($status);
				    // Specify the size of each chunk of data, in bytes. Set a higher value for
				    // reliable connection as fewer chunks lead to faster uploads. Set a lower
				    // value for better recovery on less reliable connections.
				    $chunkSizeBytes = 1 * 1024 * 1024;
				    // Setting the defer flag to true tells the client to return a request which can be called
				    // with ->execute(); instead of making the API call immediately.
				    $this->client->setDefer(true);
				    // Create a request for the API's videos.insert method to create and upload the video.
				    $insertRequest = $this->youtube->videos->insert("status,snippet", $video);
				    // Create a MediaFileUpload object for resumable uploads.
				    $media = new Google_Http_MediaFileUpload(
				        $this->client,
				        $insertRequest,
				        'video/*',
				        null,
				        true,
				        $chunkSizeBytes
				    );
				    $media->setFileSize(filesize($videoPath));
				    // Read the media file and upload it chunk by chunk.
				    $status = false;
				    $handle = fopen($videoPath, "rb");
				    while (!$status && !feof($handle)) {
				      $chunk = fread($handle, $chunkSizeBytes);
				      $status = $media->nextChunk($chunk);
				    }
				    fclose($handle);
				    // If you want to make other calls after the file upload, set setDefer back to false
				    $this->client->setDefer(false);

				    $lists->upload_video = $status['id'];
				    
			  	} catch (Google_Service_Exception $e) {
				    return Redirect::to('/list')->with('list_message', 'The following errors occurred:')->withErrors(array('message' => $e));
			  	} catch (Google_Exception $e) {
				    return Redirect::to('/list')->with('list_message', 'The following errors occurred:')->withErrors(array('message' => $e));
			  	}		 
		  	}

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
			    		$product_catalog->description = Input::get('product_catalog_desc_'.$product_catalog_id);
			    		$product_catalog->file = Input::get('product_catalog_'.$product_catalog_id);
			    		$product_catalog->image = Input::get('product_catalog_image_'.$product_catalog_id);
			    		$product_catalog->save();
			    	}	
		    	}

		    	$inputed_list_admins = Input::get('list_admins');
		    	if($inputed_list_admins) {
			    	$inputed_list_admins = json_decode($inputed_list_admins);

			    	foreach ($inputed_list_admins as $key => $inputed_list_admin) {

			    		$user = User::where('email', '=', $inputed_list_admin->email)->first();

			    		$permissions = [];
			    		foreach ($inputed_list_admin->permissions as $key => $permission) {
			    			$permissions[] = $permission;
			    		}

			    		$list_admin = new ListAdmin;
			    		$list_admin->user_id = $user->id;
			    		$list_admin->list_id = $lists->id;
			    		$list_admin->admin_permissions = json_encode($permissions);
			    		$list_admin->save();
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