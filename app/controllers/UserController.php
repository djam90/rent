<?php

class UserController extends BaseController
{
	public function getAddUser()
	{
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

	public function getLogin()
	{
		return View::make('user/login');
	}

	public function postLogin()
	{
		try
		{
		    // Set login credentials
		    $credentials = array(
		        'email'    => Input::get('email'),
		        'password' => Input::get('password'),
		    );

		    // Try to authenticate the user
		    $user = Sentry::authenticate($credentials, false);

		    // Log the user in
    		Sentry::login($user, false);

    		// @TODO - redirect to user dashboard
    		return Redirect::to('user/dashboard')->with('message', 'Successfully Logged In!');

		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
		    $msg = 'Login field is required.';
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
		    $msg = 'Password field is required.';
		}
		catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
		{
		    $msg = 'Wrong password, try again.';
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		    $msg = 'User was not found.';
		}
		catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
		{
		    $msg = 'User is not activated.';
		}

		return Redirect::to('user/login')->with('message',$msg);
	}

	public function getLogout()
	{
		Sentry::logout();
		return Redirect::to('/');
	}

	public function getDashboard()
	{
		return View::make('user/dashboard');
	}

}