<?php namespace App\Property;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';

    protected $fillable   = ['user_id', 'title', 'description', 'no_of_rooms','monthly_rent','created_at','updated_at',
    'address_1', 'address_2', 'town', 'city', 'postcode_1', 'postcode_2', 'lat', 'long'
    ];

	public function images()
    {
        return $this->hasMany('PropertyImage');
    }

}