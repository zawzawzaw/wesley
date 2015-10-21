<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSearchesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('searches', function(Blueprint $table){
			$table->increments('id');
			$table->string('name');
			$table->string('remarks');
			$table->integer('user_id')->unsigned();								
			$table->string('search_params');
			$table->timestamps();
		});

		Schema::table('searches', function($table) {
		    $table->foreign('user_id')->references('id')->on('users');		    
		    $table->unique(array('user_id', 'search_params'));
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
		Schema::drop('searches');
	}

}
