<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('tags', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("lists_id")->unsigned();
			$table->string('name');			
			
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::table('tags', function($table) {
		    $table->foreign('lists_id')->references('id')->on('lists');
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
		Schema::drop('tags');
	}

}
