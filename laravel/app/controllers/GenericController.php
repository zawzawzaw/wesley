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

            $orgFilename        = $file->getClientOriginalName();
            $filename        = str_random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccess   = $file->move($destinationPath, $filename);
        }

        if(!empty($uploadSuccess))
            return $filename . '||' . $orgFilename;
        else
            return 'Erorr on ';
    }


}
