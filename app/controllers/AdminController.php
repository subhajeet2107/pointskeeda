<?php

class AdminController extends BaseController {

	public function getIndex()
	{
		if(Auth::check()){
			//get all players from table
			$all_players = Player::orderBy('points')->get();
			//check if any message is present and pass it along
			$message="";

			if(Session::has('message')){
				$message=Session::get('message');
			}
			return View::make('admin.index')->with('player_data',$all_players)->with('message',$message);
			
		}else{
			return Redirect::to('login');
		}
		
	}

	public function postAddnew()
	{
		if(Auth::check()){
			//leaving validation on add new player for now
			
			$player_name = trim(Input::get('player_name'));
			$points = intval(Input::get('points'));
			$message = "";
			
			if($points < 0 )
			{
				$message = "Player Points cannot be less than zero";
			}else{

				$new_player = new Player;
				$new_player->player_name = $player_name;
				$new_player->points = $points;
				$new_player->save();
				$message ="Player has been added successfully !";
			}

			
			Session::flash('message', $message);
			return Redirect::to('admin');
			
		}else{
			return Redirect::to('login');
		}
	}

	public function postUpdate()
	{
		if(Auth::check()){
			//leaving validation on add new player for now
			
			$player_name = trim(Input::get('player_name_edit'));
			$points = intval(Input::get('points_edit'));
			$player_id = Input::get('player_id_edit');
			$message = "";
			
			if($points < 0 )
			{
				$message = "Player Points cannot be less than zero";
			}else{

				$new_player = Player::find($player_id);
				$new_player->player_name = $player_name;
				$new_player->points = $points;
				$new_player->save();
				$message ="Player has been updated successfully !";
			}

			
			Session::flash('message', $message);
			return Redirect::to('admin');
			
		}else{
			return Redirect::to('login');
		}
	}

	public function getDelete($player_id)
	{
		if(Auth::check()){
			$message ="";	
			if(empty($player_id)){
				$message = 'No Player Id provided,cannot delete any player';
			}else{
				//delete our player
				Player::where('id', '=', $player_id)->delete();
				$message = 'Player has been deleted successfully !';
			}

			Session::flash('message', $message);
			return Redirect::to('admin');
			
		}else{
			return Redirect::to('login');
		}
	}


}
