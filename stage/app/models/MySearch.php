<?php
class MySearch extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'searches';
	
	public static $rules = array(
	    'name'=>'required',
	    'search_params'=>'required'
    );

	public function users() {
		return $this->belongsTo('User', 'user_id');
	}
}