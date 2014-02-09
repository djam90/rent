<?php

class UserController extends BaseController
{
	// Display the Add User page
	public function getAddUser()
	{
		return View::make('users/add');
	}

	// Process the Add User submission
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

	// Display Login page
	public function getLogin()
	{
		return View::make('users/login');
	}

	// Process Login form
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

    		// Redirect to user dashboard
    		return Redirect::to('admin/dashboard')->with('message', 'Successfully Logged In!');

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

		return Redirect::to('users/login')->with('message',$msg);
	}

	// Logs out the user
	public function getLogout()
	{
		Sentry::logout();
		return Redirect::to('/');
	}

	// Display the user dashboard
	public function getDashboard()
	{
		$user = Sentry::getUser();
		$count = Property::where('user_id', '=', $user->id)->count();
		$data = array(
			'total_properties' => $count
			);
		return View::make('admin/dashboard')->with('data',$data);
	}

	public function getDashboard1()
	{
		$user = Sentry::getUser();
		$count = Property::where('user_id', '=', $user->id)->count();
		$data = array(
			'total_properties' => $count
			);
		return View::make('admin/dashboard1')->with('data',$data);
	}

}