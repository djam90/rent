<?php

class UserController extends BaseController
{
	public function getAddUser()
	{
		echo "<h1>Add User Page</h1>";
		// @todo - display add user view
		return View::make('user/add');
	}

	public function postAddUser()
	{
		try
		{
			// Create the user
			$user = Sentry::createUser(array(
				'email'     => Input::get('email'),
				'password'  => Input::get('password'),
				'activated' => true,
			));

			echo "success! user " . Input::get('email') . "created!";

		}
	
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
			echo 'Login field is required.';
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
			echo 'Password field is required.';
		}
		catch (Cartalyst\Sentry\Users\UserExistsException $e)
		{
			echo 'User with this login already exists.';
		}
	}


}