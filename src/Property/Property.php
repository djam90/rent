<?php namespace App\Property;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $table = 'properties';
    protected $fillable   = ['user_id', 'title', 'description', 'no_of_rooms','monthly_rent','created_at','updated_at'];

	public function images()
    {
        return $this->hasMany('PropertyImage');
    }

}