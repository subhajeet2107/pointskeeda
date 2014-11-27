<?php
class SeedPlayersTableTableSeeder extends Seeder {

	public function run()
	{
		$players = [
			[
                'player_name' => 'Shubhajeet<',
               	'points' =>20
            ],
            [
                'player_name' => 'Pankaj',
               	'points' =>35
            ],
            [
                'player_name' => 'Shubham',
               	'points' =>10
            ],
            [
                'player_name' => 'Ashoke',
               	'points' =>42
            ],
            [
                'player_name' => 'Krishan',
               	'points' =>50
            ],

		];

		foreach($players as $player){
            Player::create($player);
        }
	}

}