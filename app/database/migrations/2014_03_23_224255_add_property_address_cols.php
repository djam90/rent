<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPropertyAddressCols extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// Add Property Address Details
		Schema::table('properties', function($table)
		{
			$table->string('address_1',	128);
			$table->string('address_2',	128);
			$table->string('town',		128);
			$table->string('city',		128);
			$table->string('postcode_1',128);
			$table->string('postcode_2',128);
			$table->decimal('lat', 10, 8);
			$table->decimal('long', 11, 8);
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
		Schema::table('properties', function($table)
		{
			$table->dropColumn('address_1');
			$table->dropColumn('address_2');
			$table->dropColumn('town');
			$table->dropColumn('city');
			$table->dropColumn('postcode_1');
			$table->dropColumn('postcode_2');
			$table->dropColumn('lat');
			$table->dropColumn('long');
		});
	}

}
