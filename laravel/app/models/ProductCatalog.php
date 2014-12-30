<?php 
class ProductCatalog extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'product_catalogs';
	
	protected $fillable = array("list_id", "image");

	public static $rules = array(
	    'list_id'=>'required',
	    'image'=>'required'
    );

	// public function tags() {
	// 	return $this->hasMany('Tag');
	// }

	public function lists() {
		return $this->belongsTo('Lists');
	}

}