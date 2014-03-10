<?php namespace App\Validators;

class PropertyValidator extends BaseValidator{

	public $creationRules = array(
		    	'title' 		=> 'alpha_num',
		    	'description' 	=> 'alpha_num',
				'no_of_rooms' 	=> 'alpha_num',
				'monthly_rent' 	=> 'alpha_num'
		    	);

}