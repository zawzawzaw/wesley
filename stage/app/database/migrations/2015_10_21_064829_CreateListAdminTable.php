<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListAdminTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('list_admins', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("user_id")->unsigned();
			$table->integer('list_id')->unsigned();
			$table->string('admin_permissions');
			$table->timestamps();
		});

		Schema::table('list_admins', function($table) {
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
		Schema::drop('list_admins');
	}

}
