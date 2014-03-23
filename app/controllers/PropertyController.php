<?php

use App\Property\PropertyServiceInterface;

class PropertyController extends \BaseController {

    /**
     * @var App\Property\PropertyServiceInterface
     */
    protected $service;

    /**
     * @param PropertyServiceInterface $service
     */
    public function __construct(PropertyServiceInterface $service)
    {
        $this->service = $service;
    }

	/**
	 * Display list of user properties.
	 *
	 * @return Response
	 */
	public function index()
	{
        $properties = $this->service->index();
        return View::make('admin/property/list')->with('properties',$properties); 
	}

	/**
	 * Show the form for creating a new property.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('admin/property/add');
	}

	/**
	 * Store a newly created property in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// Validation
		try
		{
			$validator = new App\Validators\PropertyValidator();
			$validator->validateForCreation( Input::all() );
		}
		catch (\App\Exceptions\ValidationException $e)
		{
			return Redirect::back()->withInput()->withErrors($e->getErrors());
		}

		// Create Property
		try
		{
			$this->service->create(Input::all());
			return Redirect::route('property.index')->with('message', 'Property Successfully Added');
		}
		catch(\Exception $e)
		{
			return Redirect::back()->withInput()->withErrors($e->getErrors());
		}                
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = Sentry::getUser();
		$property = Property::find($id);
		return View::make('admin/property/edit')->with('property',$property);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// Validation
		try
		{
			$validator = new App\Validators\PropertyValidator();
			$validator->validateForUpdate( Input::all() );
		}
		catch (\App\Exceptions\ValidationException $e)
		{
			return Redirect::back()->withInput()->withErrors($e->getErrors());
		}

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

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$property = $this->property->getByID($id);

		try
		{
			$property->delete();
			return Response::make();
		}
		catch (Exception $e)
		{
		 	throw new Exception( 'Something really went wrong', 0, $e);
		 	return Response::make('Something went wrong', 400);
		}
	}

}