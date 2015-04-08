<?php
class Message extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'messages';
	
	protected $fillable = array("content", "status");

	public static $rules = array(
	    'content'=>'required'
    );

    public function users() {
		return $this->belongsTo('User', 'user_id');
	}

	public function conversations() {
		return $this->belongsTo('Conversation', 'conversation_id');
	}
}