<?php
class ListAdmin extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'list_admins';	

	public static $rules = array(
	    'list_id'=>'required',
	    'email'=>'required|email',
	    'admin_permissions'=>'required'
    );

    public function users() {
		return $this->belongsTo('User', 'user_id');
	}

	public function lists() {
		return $this->belongsToMany('Lists');
	}
}