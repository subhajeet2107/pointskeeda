<?php

class SeedUsersTableTableSeeder extends Seeder {

	public function run()
	{
		$users = [
            [
                'username' => 'shubhajeetdey',
                'email' => 'shubhajeet2107@gmail.com',
                'password' => Hash::make('shubhajeet')
            ],
            [
                'username' => 'ashishkumar',
                'email' => 'ashish@gmail.com',
                'password' => Hash::make('ashish')
            ],
        ];

        foreach($users as $user){
            User::create($user);
        }
	}

}