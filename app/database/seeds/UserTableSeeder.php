<?php

use Models\User;
use Faker\Factory;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$this->command->info('Deleting existing User table ...');
		DB::table('users')->delete();
		
		$count = 5;

		User::create([
			'first_name' => 'Test',
			'last_name' => 'User',
			'email' => 'test.user@gmail.com',
			'password' => 'testuser',
			'auth_email_verified' => true,
		])->addProfilePhoto('http://api.randomuser.me/0.2/portraits/women/18.jpg');

		User::create([
			'first_name' => 'Andreas',
			'last_name' => 'Heiberg',
			'email' => 'heibergandreas@gmail.com',
			'password' => 'password',
			'auth_email_verified' => true,
		])->addProfilePhoto('http://api.randomuser.me/0.2/portraits/men/42.jpg');

		$this->createUsersWithRandomUser();

		$this->command->info('Inserted '.$count.' sample records using Faker.');
	}

	public function createUsersWithFaker($count = 5)
	{
		$faker = Factory::create();

		// Always return the same users
		// $faker->seed(1);

		for($i = 0; $i < $count; $i++)
		{
			$first_name = $faker->firstName;
			
			User::create([
				'first_name' => $first_name,
				'last_name' => $faker->lastName,
				'email' => $faker->email,
				'password' => $first_name,
				'auth_email_verified' => true,
			]);
		}
	}

	public function createUsersWithRandomUser($count = 5)
	{
		$users = json_decode(CURL::get("http://api.randomuser.me/?results={$count}"), true);

		foreach ($users['results'] as $user)
		{
			$user = $user['user'];
			$picture = $user['picture'];
			
			User::create([
				'first_name' => ucfirst($user['name']['first']),
				'last_name' => ucfirst($user['name']['last']),
				'email' => $user['email'],
				'password' => ucfirst($user['name']['first']),
				'auth_email_verified' => true,
			])->addProfilePhoto($picture);

		}
	}

}