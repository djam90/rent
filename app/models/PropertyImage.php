<?php

class PropertyImage extends Eloquent 
{
    protected $table = 'property_images';

    public function property()
    {
    	return $this->belongsTo('Property');
    }

}