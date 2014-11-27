<?php

class AdminController extends BaseController {

	public function getIndex()
	{
		if(Auth::check()){
			return View::make('admin.index');
		}else{
			return Redirect::to('login');
		}
		
	}

}
