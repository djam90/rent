<?php

use Illuminate\Database\Migrations\Migration;

class AddPropertyImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_images', function($table)
		{
			$table->increments('id');
			$table->integer('property_id');
			$table->integer('main');
			$table->integer('image_order');
			$table->string('path',255);
			$table->string('title',255);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('property_images');
	}

}
