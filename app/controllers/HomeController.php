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
		$data = Input::only(['email','password']);

		$validator = Validator::make(
            $data,
            [
                'email' => 'required|email|min:8',
                'password' => 'required',
            ]
        );

        if($validator->fails()){
            return View::make('login')->withErrors($validator);
        }

		$email = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password), true))
		{
			//log the user in and redirect to admin panel
			return Redirect::to('admin');

		}else{

			return View::make('login')->with('auth_errors','Incorrect Username/Password');
		}
		
	}

	public function getLogout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

	public function postRegister()
	{
		$data = Input::only(['username','email','password','password_confirmation']);
		$validator = Validator::make(
            $data,
            [
                'username' => 'required|min:5',
                'email' => 'required|email|min:5',
                'password' => 'required|min:5|confirmed',
                'password_confirmation'=> 'required|min:5'
            ]
        );

        if($validator->fails()){
            return View::make('register')->withErrors($validator);
        }
        //hash our password after matching with confirm password ,should work a bit faster
        $data['password'] = Hash::make($data['password']);

		$newUser = User::create($data);

        if($newUser){
            Auth::login($newUser);
            return Redirect::to('admin');
        }else{

			return View::make('login');
		}
	}


}
