<?php

class GenericController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
        session_start();

        $OAUTH2_CLIENT_ID = '1006288385462-uj20kpmmo0ollr0q9dks74deau1l19i2.apps.googleusercontent.com';
        $OAUTH2_CLIENT_SECRET = 'B5HZWXQEikZGw_UuWU9SeeO_';
        $client = new Google_Client();
        $client->setClientId($OAUTH2_CLIENT_ID);
        $client->setClientSecret($OAUTH2_CLIENT_SECRET);
        $client->setScopes('https://www.googleapis.com/auth/youtube');
        $redirect = filter_var('http://' . $_SERVER['HTTP_HOST'] . '/wesley/stage/generic',
            FILTER_SANITIZE_URL);        
        $client->setRedirectUri($redirect);

        $youtube = new Google_Service_YouTube($client);

        if (isset($_GET['code'])) {
          if (strval($_SESSION['state']) !== strval($_GET['state'])) {
            die('The session state did not match.');
          }
          $client->authenticate($_GET['code']);
          $_SESSION['token'] = $client->getAccessToken();
          header('Location: ' . $redirect);
        }

        if (isset($_SESSION['token'])) {
          $client->setAccessToken($_SESSION['token']);
        }

        // Check to ensure that the access token was successfully acquired.
        if ($client->getAccessToken()) {            
            $_SESSION['token'] = $client->getAccessToken();
        } else {            
            // If the user hasn't authorized the app, initiate the OAuth flow
            $state = mt_rand();
            $client->setState($state);
            $_SESSION['state'] = $state;
            $authUrl = $client->createAuthUrl();

            // echo $authUrl;

            return Redirect::away($authUrl);            
        }

        return $htmlBody;
	}


	// uploadfiles
	public function uploadfiles()
    {
        $type = Input::get('type');

        if (Input::hasFile('Filedata')) {
            $file = Input::file('Filedata');
            
            if($type=='profile_photo')
                $destinationPath = public_path() . "/uploads/profile_photos/";
            else if($type=='company_logo')
                $destinationPath = public_path() . "/uploads/company_logos/";
            else if($type=='video')
                $destinationPath = public_path() . "/uploads/videos/";
            else if($type=='key_product')
                $destinationPath = public_path() . "/uploads/key_products/";
            else if($type=='product_catalog')
                $destinationPath = public_path() . "/uploads/product_catalogs/";
            else
                $destinationPath = public_path() . "/uploads/";

            $orgFilename     = $file->getClientOriginalName();
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccess   = $file->move($destinationPath, $filename);
        }

        if(!empty($uploadSuccess)) {
            error_log("Destination: $destinationPath");
            error_log("Filename: $filename");
            error_log("Extension: ".$file->getClientOriginalExtension());
            error_log("Original name: ".$file->getClientOriginalName());
            error_log("Real path: ".$file->getRealPath());
            return $filename . '||' . $orgFilename;
        }
        else {
            error_log("Error moving file: ".$file->getClientOriginalName());
            return 'Erorr on ';
        }            
    }

    public function checkemailexists()
    {
        $email = Input::get('email');

        $users = User::where('email', '=', $email)->first();

        if(!is_null($users))
            return 'true';
        else
            return 'false';

    }

    public function checkuserexistsbyemail()
    {
        $email = Input::get('email');

        $user = User::where('email', '=', $email)->first();

        if(!is_null($user))
            return Response::json(['status' => 'success', 'user' => $user], 200);
        else
            return Response::json(['status' => 'validation error', 'message' => 'User not found.'], 400);

    }


}
