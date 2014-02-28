<?php namespace App\Property;

class PropertyCreator
{
    protected $listener;

    public function __construct(\PropertyController $listener)
    {
        $this->listener = $listener;
    }

    public function create($property, $input)
    {
        // Get User ID
        
        $user = $this->listener->getUser();
        $user_id = $user->id;

        $input['user_id'] = $user_id;

        $created = $property->create($input);

        return $this->listener->propertyCreationSuccess($created);
    }
}