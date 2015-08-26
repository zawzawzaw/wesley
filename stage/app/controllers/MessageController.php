<?php

class MessageController extends \BaseController {

	# set template
	protected $layout = "layouts.master";

	public function __construct() {
	    $this->beforeFilter('csrf', array('on'=>'post'));
	    $this->beforeFilter('auth');
	}

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
                    
  		//     $conv_msgs = TBMsg::getConversationMessages($conv->getId(), $current_user->id);            

		//     foreach ($conv_msgs->getAllMessages() as $key => $msg) {
  		//        	echo $msg->getSender() . "<br>";
		// 			echo $msg->getContent() . "<br>";
		// 			echo $msg->getStatus() . "<br><br>";
  		//     }

  		// }

		// SELECT 
		// msg.conv_id as conv_id, msg.created_at, msg.id msgId, msg.content, mst.status, mst.self, us.'.$this->usersTableKey.' userId
		// FROM messages msg
		// INNER JOIN (
		//     SELECT MAX(created_at) created_at
		//     FROM messages
		//     GROUP BY conv_id
		// ) m2 ON msg.created_at = m2.created_at
		// INNER JOIN messages_status mst ON msg.id=mst.msg_id
		// INNER JOIN '.$this->usersTable.' us ON msg.sender_id=us.'.$this->usersTableKey.'
		// WHERE mst.user_id = ? AND mst.status NOT IN (?, ?)
		// ORDER BY msg.created_at DESC

		$current_user_id = Auth::user()->id;

		// for inbox message
		$convs = Conversation::with(['messages'])->whereHas('users', function($q) use(&$current_user_id) {
						$q->where('user_id', '=', $current_user_id);
					})->whereHas('messages', function($q) use(&$current_user_id) {
						$q->where('user_id','!=',$current_user_id);
					})->get();	

		// return $convs;	

					// $conversations = Conversation::whereHas('conversation_users', function($q) use(&$current_user_id){
					// 	$q->where('user_id', '='. $current_user_id);
					// })->get();

		// debug
		// $convs = DB::getQueryLog();
		// $last_query = end($convs);
		// print_r($convs); exit();	


		// return $convs;


		$this->layout->content = View::make('message.index')->with('convs', $convs);
		
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
	 	// $c1->name = "Some Conversation";
	 	// $c1->save();

	 	// $c1->users()->attach([$current_user->id, $list_user_id]);

		// SELECT cu.conv_id
		// FROM conv_users cu
  		// WHERE cu.user_id=? OR cu.user_id=?
  		// GROUP BY cu.conv_id
  		// HAVING COUNT(cu.conv_id)=2
		$current_user = Auth::user();
		$list_user_id = Input::get('list_user_id');
		$subject = Input::get('message_subject');
		
		if(Input::has('reply_to_conv_id')) {
			$last_coversation_id = Input::get('reply_to_conv_id');
		}

		if(empty($last_coversation_id)) {

			// getting two users's conversation
			$conv = UserConversation::where('user_id', '=', $current_user->id)
					->orWhere('user_id', '=', $list_user_id)
					->groupBy('conversation_id')
					->havingRaw('count(conversation_id) = 2')
					->first();

			// check if existing conversation between two has same subject if not create new conversation
			// $existing_subject = Conversation::find($conv->conversation_id)->name;

			if($conv && $conv->conversation_id) {

				$last_coversation_id = $conv->conversation_id;

			} else {

				// new conversation
				$conv = new Conversation;
				$conv->name = $subject;
				$conv->save();
				$last_coversation_id = $conv->id;

				$conv->users()->attach([ $current_user->id, $list_user_id ]);

			}	

		}

		$msg = new Message;
		$msg->conversation_id = $last_coversation_id;
		$msg->user_id = $current_user->id;
		$msg->content = Input::get('message');
		$msg->status = 1;
		$msg->save();

		return Response::json('success', 200);

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
