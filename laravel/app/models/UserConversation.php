<?php
class UserConversation extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'user_conversations';
	
	// protected $fillable = array("name");

	// public static $rules = array(
	//     'name'=>'required'
 //    );

	// public function users() {
	// 	return $this->hasOne('User', 'user_id');
	// }

	public function conversations() {
		return $this->hasMany('Conversation', 'conversation_id');
	}	
}