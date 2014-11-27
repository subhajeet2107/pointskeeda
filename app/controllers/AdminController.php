<?php

class AdminController extends BaseController {

	public function getIndex()
	{
		if(Auth::check()){
			//get all players from table
			$all_players = Player::orderBy('points')->get();
			return View::make('admin.index')->with('player_data',$all_players);
			
		}else{
			return Redirect::to('login');
		}
		
	}

}
