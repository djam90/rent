<?php

class PropertyController extends BaseController
{
	public function listProperties()
	{
		// Get User
		$user = Sentry::getUser();

		// Get associated properties
		$properties = $user->properties;

		return View::make('user/property/list')->with('properties',$properties);
	}

	public function getAddProperty()
	{
		return View::make('user/property/add');
	}

	public function postAddProperty()
	{
		// TODO
		// Parse data from form
		// Validate it
		// Add to database
		// redirect user back to property list (or dashboard)
		
		// Get User
		$user = Sentry::getUser();

		// Get Input
		$p_title = Input::get('title');
		$p_description = Input::get('description');
		$p_no_of_rooms = Input::get('no_of_rooms');
		$p_monthly_rent = Input::get('monthly_rent');

		// Validation
		
		// Fill Property object and save
		$property = new Property;
		$property->user_id = $user->id;
		$property->title = $p_title;
		$property->description = $p_description;
		$property->no_of_rooms = $p_no_of_rooms;
		$property->monthly_rent = $p_monthly_rent;

		if( $property->save() )
		{
			echo "successfully added";
		}
		else
		{
			echo "failed somewhere";
		}

	}
}