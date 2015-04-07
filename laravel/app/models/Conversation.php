<?php
class Conversation extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'conversations';
	
	protected $fillable = array("name");

	public static $rules = array(
	    'name'=>'required'
    );

	public function messages() {
		return $this->hasMany('Message');
	}

	public function conversation_users() {
		return $this->belongsToMany('ConversationUser');
	}
}