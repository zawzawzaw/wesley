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
		// $current_user = Auth::user();
		// $convs = TBMsg::getUserConversations($current_user->id);		

		// foreach ( $convs as $conv ) {
                    
  //           $conv_msgs = TBMsg::getConversationMessages($conv->getId(), $current_user->id);            

  //           foreach ($conv_msgs->getAllMessages() as $key => $msg) {
  //           	echo $msg->getSender() . "<br>";
		// 		echo $msg->getContent() . "<br>";
		// 		echo $msg->getStatus() . "<br><br>";
  //           }

  //       }

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
		/*
		$current_user = Auth::user();
		$list_user_id = Input::get('list_user_id');

		// current conv
		$conv_id = TBMsg::getConversationByTwoUsers($current_user->id, $list_user_id);		

		// if no conv
		if($conv_id == -1) {

			// echo 'new';
			// create new conv
			$data = TBMsg::createConversation([$current_user->id, $list_user_id]);
			$conv_id = $data->id;

		}		

		// adding message
		TBMsg::addMessageToConversation($conv_id, $current_user->id, Input::get('message'));

		$conv = TBMsg::getConversationMessages($conv_id, $current_user->id);			

		foreach ( $conv->getAllMessages() as $msg ) {

			echo $msg->getSender() . "<br>";
			echo $msg->getContent() . "<br>";
			echo $msg->getStatus() . "<br><br>";

		}
		*/

		// $current_user_id = Auth::user()->id;
		// $list_user_id = Input::get('list_user_id');

		// $conversations = Conversation::whereHas('conversation_users', function($q) use(&$current_user_id){
		// 	$q->where('user_id', '='. $current_user_id);
		// })->get();

		// // ->where('user_id', '=', $current_user_id)->get();

		// // return $conversations;

		// $queries = DB::getQueryLog();
		// $last_query = end($queries);
		// print_r($last_query); exit();	

		// $c1 = new Conversation;
	 //    $c1->name = "Some Conversation";
	 //    $c1->save();

	 //    $c1->users()->attach([$current_user->id, $list_user_id]);

		$current_user = Auth::user();
		$list_user_id = Input::get('list_user_id');

		$conv = new Conversation;
		$conv->name = Input::get('message_subject');
		$conv->save();

		// $conv->conversation_users()->attach([ $current_user->id, $list_user_id ]);		

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
