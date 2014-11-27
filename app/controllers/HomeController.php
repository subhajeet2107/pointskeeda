<?php

class HomeController extends BaseController {

	public function getIndex()
	{
		return View::make('main');
	}

	public function getLogin()
	{
		return View::make('login');
	}

	public function getRegister()
	{
		return View::make('register');
	}

	public function postLogin()
	{
		//log the user in and redirect to admin panel
		return Redirect::to('admin');
	}

	public function postRegister()
	{
		return View::make('login');
	}


}
