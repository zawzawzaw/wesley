<?php 
class KeyProduct extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'key_products';
	
	protected $fillable = array("list_id", "category", "subcategory", "product_name", "image");

	public static $rules = array(
	    'list_id'=>'required',
	    'category'=>'required',
	    'subcategory'=>'required',
	    'product_name'=>'required',
	    'image'=>'required'
    );

	public function lists() {
		return $this->belongsTo('Lists');
	}
}