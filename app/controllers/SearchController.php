<?php

class SearchController extends BaseController
{
	public function getSearch()
	{
		var_dump( Input::all() );

		$properties = Property::all();
		return View::make('public.search.results')->with('data',$properties);
		
	}
}