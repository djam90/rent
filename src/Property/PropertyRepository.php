<?php namespace App\Property;

use App\Property\Property;

class PropertyRepository implements PropertyRepositoryInterface
{
	public function getAll()
	{
		return Property::all();
	}

	public function getByID($id)
	{
		return Property::find($id);
	}

	public function getAllByUser($user)
	{
		return $user->properties;
	}

	public function create($input)
	{
		return Property::create($input);
	}
}