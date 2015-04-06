<?php

class MessageController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$current_user = Auth::user();

		$list_user_id = Input::get('list_user_id');

		$conv = TBMsg::getConversationByTwoUsers($current_user->id, $list_user_id);		

		// return Input::get('message');

		if($conv == -1) {
			$users_ids = array(3, 1);

			$conv = TBMsg::createConversation($users_ids);		

			$conv = TBMsg::addMessageToConversation($conv, $current_user->id, Input::get('message'));

			$convs = TBMsg::getUserConversations( $current_user->id );

			return $convs;

		}else {
			$users_ids = array(3, 1);

			$conv = TBMsg::createConversation($users_ids);

			$conv = TBMsg::addMessageToConversation($conv, $current_user->id, "test");

			$convs = TBMsg::getUserConversations( $current_user->id );

			return $convs;
		}

	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
