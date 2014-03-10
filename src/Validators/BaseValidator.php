<?php namespace App\Validators;

use \Validator;
use \App\Exceptions\ValidationException;

class BaseValidator{

	public $rules;
	public $creationRules;
	public $updateRules;

	public function validate($input, $rules)
	{
		$validator = Validator::make($input, $rules);
		if ($validator->fails()) {
			throw new ValidationException($validator->messages());
		}
		return true;
	}
 
	public function validateForCreation($input)
	{
		return $this->validate($input, $this->creationRules);
	}
 
	public function validateForUpdate($input)
	{
		return $this->validate($input, $this->updateRules);
	}
 
	public function validateForCustom($customName, $input)
	{
		return $this->validate($input, $this->{$customName.'Rules'});
	}
}