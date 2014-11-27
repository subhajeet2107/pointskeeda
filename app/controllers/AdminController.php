<?php

class AdminController extends BaseController {

	public function getIndex()
	{
		if(Auth::user()){

			return View::make('admin-panel');
		}else{
			return Redirect::to('login');
		}
		
	}

}
