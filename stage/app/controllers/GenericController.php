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
            else if($type=='product_catalog_image')
                $destinationPath = public_path() . "/uploads/product_catalog_images/";
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

    public function cropimage() {

        $type = Input::get('type');
        $org_file = Input::get('org_file');

        if($type=='profile_photo')
            $path = public_path() . "/uploads/profile_photos/";
        else if($type=='company_logo')
            $path = public_path() . "/uploads/company_logos/";
        else if($type=='video')
            $path = public_path() . "/uploads/videos/";
        else if($type=='key_product')
            $path = public_path() . "/uploads/key_products/";
        else if($type=='product_catalog')
            $path = public_path() . "/uploads/product_catalogs/";
        else if($type=='product_catalog_image')
            $path = public_path() . "/uploads/product_catalog_images/";
        else
            $path = public_path() . "/uploads/";

        $t_width = 195; // Maximum thumbnail width
        $t_height = 110; // Maximum thumbnail height

        $org_name = pathinfo($org_file, PATHINFO_FILENAME);
        $org_ext = pathinfo($org_file, PATHINFO_EXTENSION);

        $new_file = $org_name."_crop.".$org_ext;

        $tamanios = getimagesize($path.$org_file);

        $ratio = Input::get('scale');
        $w = Input::get('w');
        $h = Input::get('h');
        $x = Input::get('x');
        $y = Input::get('y');
        $rotation = Input::get('angle');

        $nimg = imagecreatetruecolor($t_width, $t_height);

        if(strtolower($org_ext)=='png')
            $im_src = imagecreatefrompng($path.$org_file);
        else
            $im_src = imagecreatefromjpeg($path.$org_file);

        imagealphablending( $im_src, false );
        imagesavealpha( $im_src, true );

        $im_src = imagerotate($im_src, $rotation * -1, 0);
        imagecopyresampled($nimg, $im_src, 0, 0, ceil($x/$ratio), ceil($y/$ratio), $t_width, $t_height, $t_width/$ratio, $t_height/$ratio);
        imagejpeg($nimg, $path.$new_file, 90);

        echo $new_file;

    }

    public function checkalreadyassign()
    {
        $email = Input::get('email');
        $list_id = Input::get('list_id');        

        $users = User::with(['ListAdmin' => function($query) use($list_id){
            $query->where('list_id', '=', $list_id);
        }])->where('email', '=', $email)->first();

        if(!is_null($users) && count($users->ListAdmin) == 0)
            return 'true';
        else
            return 'false';

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

    public function openpdf($id, $file_name) 
    {     
        Event::fire('open.pdf.'.$id);

        $file_url = public_path() . "/uploads/product_catalogs/" . $file_name;

        return Response::make(file_get_contents($file_url), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; '.$file_name,
        ]);
    }

    public function downloadpdf($id, $file_name)
    {     
        Event::fire('download.pdf.'.$id);

        $file_url = public_path() . "/uploads/product_catalogs/" . $file_name;

        header('Content-Type: application/pdf');
        header("Content-Transfer-Encoding: Binary");
        header("Content-disposition: attachment; filename=".$file_name);

        readfile($file_url);

    }


}
