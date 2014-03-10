<?php namespace App\Property;

use App\Property\PropertyRepositoryInterface;
use User;

class PropertyService implements PropertyServiceInterface
{
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
        $user_id = \Sentry::getUser()->id;

        $data = $input;
        $data['user_id'] = $user_id;

        

        // Validation
        $validator = \Validator::make($input, $rules);

		if ($validator->fails())
	    {
            throw new \Exception( $validator, $e);	   
        }

        return $created = $this->property->create($input);
    }
}