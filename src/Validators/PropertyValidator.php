<?php namespace App\Validators;

class PropertyValidator extends BaseValidator{

	public $creationRules = array(
		    	'title' 		=> 'alpha',
		    	'description' 	=> 'alpha_num',
				'no_of_rooms' 	=> 'alpha_num',
				'monthly_rent' 	=> 'alpha_num'
		    	);

	public $updateRules = array(
		    	'title' 		=> 'alpha',
		    	'description' 	=> 'alpha_num',
				'no_of_rooms' 	=> 'alpha_num',
				'monthly_rent' 	=> 'alpha_num'
		    	);
}