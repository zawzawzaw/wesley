<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('plan');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email');
			$table->string('password');
			$table->string('city');
			$table->string('state');
			$table->string('country');
			$table->string('company');
			$table->string('job_title');
			$table->string('address_1');
			$table->string('address_2');
			$table->string('post_code');
			$table->string('phone');
			$table->string('profile_photo');
			$table->boolean('subscribe_newsletter');
			
			$table->timestamps();
			$table->softDeletes();
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
		Schema::drop('users');
	}

}
