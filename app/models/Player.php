<?php
class Player extends Eloquent{


	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'players';

	protected $fillable = ['player_name','points'];

}
