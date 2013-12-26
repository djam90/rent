<?php

use Illuminate\Database\Migrations\Migration;

class AddPropertyDescriptiveCols extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('properties', function($table)
		{
			$table->integer('no_of_rooms');
			$table->integer('monthly_rent');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('properties', function($table)
		{
			$table->dropColumn('no_of_rooms');
			$table->dropColumn('monthly_rent');
		});
	}

}