<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessageTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('messages', function(Blueprint $table){
			$table->increments('id');
			$table->text("content");
			$table->integer('conversation_user_id')->unsigned();
			$table->integer('conversation_id')->unsigned();
			$table->integer('status');
			$table->timestamps();
		});

		Schema::table('messages', function($table) {
		    $table->foreign('conversation_user_id')->references('id')->on('conversation_users');
		});

		Schema::table('messages', function($table) {
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
		Schema::drop('messages');
	}

}
