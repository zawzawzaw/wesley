<?php

class MyListController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	protected $layout = "layouts.master";

	public function index()
	{
		//
		$lists = Lists::where('user_id', '=', Auth::user()->id)->get();

		$this->layout->content = View::make('mylist.index')->with('lists', $lists);
	}


}
