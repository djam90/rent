<?php

class Property extends Eloquent 
{
    protected $table = 'properties';

	public function images()
    {
        return $this->hasMany('PropertyImage');
    }

}