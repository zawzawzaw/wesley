<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('lists', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("user_id")->unsigned();
			$table->string('type');
			$table->string('company_name');
			$table->string('logo');
			$table->string('category');
			$table->string('subcategory');
			$table->string('address_1');
			$table->string('address_2');
			$table->string('city');
			$table->string('post_code');
			$table->string('state');
			$table->string('country');
			$table->string('origin_country');
			$table->string('business_nature');
			$table->string('year_established');
			$table->string('company_background_info');
			$table->string('paid_up_capital');
			$table->string('no_of_employees');
			$table->string('quality_certification');
			$table->string('production_capability');
			$table->string('bankers');
			$table->string('market_established');
			$table->string('main_shareholders');
			$table->string('market_interested');
			$table->string('number_of_offices_worldwide');
			$table->string('links_to_related_companies');
			$table->string('upload_video');
			$table->string('major_facilities');
			$table->string('major_customers');
			
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::table('lists', function($table) {
		    $table->foreign('user_id')->references('id')->on('users');
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
		Schema::drop('lists');
	}

}
