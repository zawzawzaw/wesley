<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeyProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('key_products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("lists_id")->unsigned();
			$table->string('category');			
			$table->string('subcategory');			
			$table->string('product_name');			
			$table->string('product_specifics');			
			$table->string('image');			
			
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::table('key_products', function($table) {
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
		Schema::drop('key_products');
	}

}
