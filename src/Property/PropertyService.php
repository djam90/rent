<?php namespace App\Property;

use App\Property\PropertyRepositoryInterface;
use User;

class PropertyService implements PropertyServiceInterface
{
    protected $property;

    public function __construct(PropertyRepositoryInterface $property)
    {
        $this->property = $property;
    }

    public function index()
    {
    	$user = \Sentry::getUser();
		return $properties = $this->property->getAllByUser($user);
    }

    public function create($input)
    {        
        $user = \Sentry::getUser();
        $user_id = $user->id;

        $data = $input;
        $data['user_id'] = $user_id;

        return $created = $this->property->create($data);
    }

    public function edit($id, $input)
    {
        $property = $this->property->getByID($id);
    }
}