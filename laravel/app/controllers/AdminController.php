<?php

class AdminController extends BaseController {

	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('admin');
	}

	# set template
	protected $layout = "layouts.master";

    /**
     * Show admin.
     */
    public function index()
    {
        //
        if (Auth::check())
        {
            $name = Auth::user()->first_name;
        }else {
            $name = '';
        }

        $lists = Lists::with(array('tags','keyproduct','productcatalog'))->orderBy('created_at','DESC')->paginate(8);

        $lists_total = $lists->getTotal();

        // return $lists;

        $this->layout->content = View::make('admin.index')
            ->with('name', $name)
            ->with('lists', $lists)
            ->with('lists_total', $lists_total);
    }
}