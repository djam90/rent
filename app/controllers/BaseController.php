<?php

class BaseController extends Controller {

	protected $user;
	
	public function __construct()
	{
		if ( ! Sentry::check())
		{
		    // User is not logged in, or is not activated
		    $this->user = NULL;
		}
		else
		{
		    // User is logged in
		    $this->user = Sentry::getUser();
		}
	}
	


	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
	}


	public function getUser()
	{
		return $this->user;
	}

}