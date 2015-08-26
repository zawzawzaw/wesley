<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCatalogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('product_catalogs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("lists_id")->unsigned();	
			$table->string('title');			
			$table->string('file');			
			
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::table('product_catalogs', function($table) {
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
		Schema::drop('product_catalogs');
	}

}
