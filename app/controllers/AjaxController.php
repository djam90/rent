<?php

class AjaxController extends BaseController
{
	/**
	 * Ajax function to update image title when editing property
	 * @return JSON empty or error
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

	/**
	 * Ajax function to upload image using Dropzone in admin panel
	 * @return JSON Success or Error
	 */
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
		$originalName = $file->getClientOriginalName();

		if( Input::hasFile('file') ) 
		{
			$file->move(public_path() . "/uploads", $originalName);
			$image = new PropertyImage();
			$image->property_id = Input::get('property_id');
			$image->title = "Title";
			$image->path = $originalName;
			$image->save();
			return Response::json('success', 200);
		} 
		else 
		{
			return Response::json('error', 400);
		}
	}

	/**
	 * Ajax function to delete image in the admin panel
	 * @return JSON Empty or error
	 */
	public function remove_image()
	{
		$inputs = Input::all();

		$image = PropertyImage::find($inputs['id']);

		$url = public_path() . "/uploads/properties/" . $image->path;

		try
		{
			if( $image->delete() )
			{
				File::delete($url);
			}
		}
		catch (Exception $e)
		{
		 	throw new Exception( 'Something really gone wrong', 0, $e);
		 	return Response::make('Something went wrong', 400);
		}

		return Response::make();
	}
}