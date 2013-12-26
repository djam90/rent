<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PropertyTableSeeder');
	}

}

class PropertyTableSeeder extends Seeder {
	public function run()
	{
		$property = new Property;
		$property->title = 'Test Title 1';
		$property->description = "Test Description 1";
		$property->no_of_rooms = "2";
		$property->monthly_rent = "400";
		$property->save();

		$property = new Property;
		$property->title = 'Test Title 2';
		$property->description = "Test Description 2";
		$property->no_of_rooms = "3";
		$property->monthly_rent = "500";
		$property->save();

		$property = new Property;
		$property->title = 'Test Title 3';
		$property->description = "Test Description 3";
		$property->no_of_rooms = "5";
		$property->monthly_rent = "900";
		$property->save();
	}


}