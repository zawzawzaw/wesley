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
			$table->integer('conversation_id')->unsigned();
			$table->integer('user_id')->unsigned();
			$table->text("content");
			$table->integer('status');
			$table->timestamps();
		});

		Schema::table('messages', function($table) {
		    $table->foreign('user_id')->references('id')->on('users');
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
