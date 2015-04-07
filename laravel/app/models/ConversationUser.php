<?php
class ConversationUser extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'conversation_users';
	
	// protected $fillable = array("name");

	// public static $rules = array(
	//     'name'=>'required'
 //    );

	public function users() {
		return $this->hasOne('User', 'user_id');
	}

	public function conversations() {
		return $this->belongsToMany('Conversation', 'conversation_id');
	}	
}