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
		$player_count = 10;
		return View::make('main')->with('player_count',$player_count);
	}

	public function postRegister()
	{
		return View::make('login');
	}


}
