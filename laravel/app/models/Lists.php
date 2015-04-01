<?php 
class Lists extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'lists';
	
	protected $fillable = array("type");

	public static $rules = array(
	    'type'=>'required',
	    'company_name'=>'required',
	    'category'=>'required',
	    'subcategory'=>'required',
	    'address_1'=>'required',
	    'post_code'=>'required',
	    'state'=>'required',
	    'country'=>'required',
	    'origin_country'=>'required',
	    'business_nature'=>'required',
	    'year_established'=>'required|numeric',
	    'company_background_info'=>'required',
	    'no_of_employees'=>'required|numeric',
	    'quality_certification'=>'required',
	    'production_capability'=>'required',
	    'major_facilities'=>'required',    
	    'major_customers'=>'required'	    
    );

	public function tags() {
		return $this->hasMany('Tag');
	}

	public function productcatalog() {
		return $this->hasMany('ProductCatalog');
	}

	public function keyproduct() {
		return $this->hasMany('KeyProduct');
	}

	public function users() {
		return $this->belongsTo('User', 'user_id');
	}

}