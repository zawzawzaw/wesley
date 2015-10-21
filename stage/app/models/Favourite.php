<?php
class Favourite extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'favourites';	

	public static $rules = array(
	    'list_id'=>'required'
    );

    public function users() {
		return $this->belongsTo('User', 'user_id');
	}

	public function lists() {
		return $this->belongsTo('Lists', 'list_id');
	}
}