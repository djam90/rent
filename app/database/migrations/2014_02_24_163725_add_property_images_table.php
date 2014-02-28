<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPropertyImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_images', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('property_id',11);
			$table->integer('main',11);
			$table->integer('image_order',11);
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
