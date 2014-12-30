<?php 
class Tag extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tags';
	
	protected $fillable = array("list_id", "name");

	public static $rules = array(
	    'list_id'=>'required',
	    'name'=>'required'
    );

	public function lists() {
		return $this->hasMany('Lists');
	}

}