<?php

use Illuminate\Database\Migrations\Migration;

class CreateProperties extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('properties', function($table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('title',128);
			$table->text('description');
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
		Schema::drop('properties');
	}

}