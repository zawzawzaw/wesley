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
		Schema::create('product_catalog', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("list_id")->unsigned();	
			$table->string('image');			
			
			$table->timestamps();
			$table->softDeletes();
		});

		Schema::table('product_catalog', function($table) {
		    $table->foreign('list_id')->references('id')->on('lists');
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
		Schema::drop('product_catalog');
	}

}
