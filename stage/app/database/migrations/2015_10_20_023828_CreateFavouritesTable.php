<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFavouritesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('favourites', function(Blueprint $table){
			$table->increments('id');									
			$table->integer('user_id')->unsigned();
			$table->integer('list_id')->unsigned();			
			$table->timestamps();
		});

		Schema::table('favourites', function($table) {
		    $table->foreign('user_id')->references('id')->on('users');
		    $table->foreign('list_id')->references('id')->on('lists');
		    $table->unique(array('user_id', 'list_id'));
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
		Schema::drop('favourites');
	}

}
