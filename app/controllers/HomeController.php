<?php

class HomeController extends BaseController {

	public function getIndex()
	{
		return View::make('main');
	}

	public function getLogin()
	{
		if(Auth::check())
		{
			return Redirect::to('admin');
		}else{
			return View::make('login');
		}
		
	}

	public function getRegister()
	{
		return View::make('register');
	}

	public function postLogin()
	{
		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password), true))
		{
			//log the user in and redirect to admin panel
			return Redirect::to('admin');

		}else{

			return View::make('login');
		}
		
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

	public function postRegister()
	{
		return View::make('login');
	}


}
