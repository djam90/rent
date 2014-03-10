<?php namespace App\Property;

use App\Property\Property;
use User;

class PropertyRepository implements PropertyRepositoryInterface
{
	public function __construct(Property $property)
	{
		$this->property = $property;
	}

	public function getAll()
	{
		return $this->property->all();
	}

	public function getByID($id)
	{
		return $this->property->find($id);
	}

	public function getAllByUser($user)
	{
		if($user instanceOf User)
		{
			return $user->properties;
		}
		return $this->property->where('user_id', $user->id)->get();
	}

	public function create($input)
	{
		return $this->property->create($input);
	}
}