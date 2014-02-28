<?php namespace App\Property;

class Property extends \Eloquent 
{
    protected $table = 'properties';
    protected $fillable   = ['user_id', 'title', 'description', 'no_of_rooms','monthly_rent','created_at','updated_at'];

	public function images()
    {
        return $this->hasMany('PropertyImage');
    }

}