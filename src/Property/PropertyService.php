<?php namespace App\Property;

use App\Property\PropertyRepositoryInterface;
use User;
use Input;

class PropertyService implements PropertyServiceInterface
{
    protected $property;

    public function __construct(PropertyRepositoryInterface $property)
    {
        $this->property = $property;
    }

    /**
     * Return properties for current logged in user
     * @return Collection      Property Collection
     */
    public function index()
    {
    	$user = \Sentry::getUser();
		return $properties = $this->property->getAllByUser($user);
    }

    /**
     * Create a property using given form input associated to current logged in user
     * @param  Array $input Form input
     * @return Object        Created property
     */
    public function create($input)
    {        
        $user = \Sentry::getUser();
        $user_id = $user->id;

        $data = $input;
        $data['user_id'] = $user_id;

        return $created = $this->property->create($data);
    }

    public function edit($id)
    {
        $property = $this->property->getByID($id);

        foreach(Input::except("_token","_method") as $k => $v)
        {
            $property->$k = $v;
        }

        return $property->save();
    }

    public function delete($id)
    {
        $property = $this->property->getByID($id);
        return $property->delete();
    }
}