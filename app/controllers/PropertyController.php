<?php

class PropertyController extends BaseController
{
	public function listProperties()
	{
		// Get User
		$user = Sentry::getUser();

		// Get associated properties
		$properties = $user->properties;
		
		return View::make('admin/property/list')->with('properties',$properties);
	}

	public function getAddProperty()
	{
		return View::make('admin/property/add');
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

	public function getEditProperty($id)
	{
		$user = Sentry::getUser();
		$property = Property::find($id);
		return View::make('admin/property/edit')->with('property',$property);
	}

	public function postEditProperty($id)
	{
		$property_id = $id;
		$property = Property::find($property_id);

		// Get Input
		$p_title = Input::get('title');
		$p_description = Input::get('description');
		$p_no_of_rooms = Input::get('no_of_rooms');
		$p_monthly_rent = Input::get('monthly_rent');

		// @TODO -> Validation

		// Update Fields
		$property->title = $p_title;
		$property->description = $p_description;
		$property->no_of_rooms = $p_no_of_rooms;
		$property->monthly_rent = $p_monthly_rent;

		// Attempt Save
		if( $property->save() )
		{
			echo "Successfully Updated";
		}
		else
		{
			echo "failed somewhere";
		}
	}

	/*
		Ajax function to update image title when editing property
	 */
	public function update_image_title()
	{
		$inputs = Input::all();

        $image = PropertyImage::find($inputs['pk']);

        $image->$inputs['name'] = $inputs['value'];

        try
		{ 
         	$image->save();
        }
        catch (Exception $e)
		{
		 	throw new Exception( 'Something really gone wrong', 0, $e);
		 	return Response::make('Something went wrong', 400);
		}

        return Response::make();
	}

	public function remove_image()
	{
		$inputs = Input::all();

		$image = PropertyImage::find($inputs['pk']);

		try
		{
			$image->delete();
		}
		catch (Exception $e)
		{
		 	throw new Exception( 'Something really gone wrong', 0, $e);
		 	return Response::make('Something went wrong', 400);
		}

		return Response::make();
	}

	public function upload_image()
	{
		$input = Input::all();
		$rules = array(
			'file' => 'image|max:3000',
		);

		$validation = Validator::make($input, $rules);

		if ($validation->fails())
		{
			return Response::make($validation->errors->first(), 400);
		}

		$file = Input::file('file');

		if( Input::hasFile('file') ) 
		{
			return Response::json('success', 200);
		} 
		else 
		{
			return Response::json('error', 400);
		}
	}
}