<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserCoversationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('user_conversations', function($table){
			$table->increments('id');
			$table->integer('user_id')->unsigned();			
			$table->integer('conversation_id')->unsigned();			
			$table->timestamps();
		});

		Schema::table('user_conversations', function($table) {
		    $table->foreign('user_id')->references('id')->on('users');
		});

		Schema::table('user_conversations', function($table) {
		    $table->foreign('conversation_id')->references('id')->on('conversations');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('user_conversations');
	}

}
