<?php 

Class UserTableSeeder extends Seeder {
	/**
	* Fill  db with user(s)
	*
	* @return void 
	*/ 

	public function run()
	{
		DB::table('users')->delete();

		$faker = Faker\Factory::create();

		User::create([
			'username' => $_ENV['DEFAULT_USERNAME'],
			'email' => $_ENV['DEFAULT_EMAIL'],
			'password' => $_ENV['DEFAULT_PASSWORD']
		]);
		for ($i=0; $i < 100; $i++) 
		{ 
			$title = $faker->sentence((rand(5,7)));

			$user = User::create([
				'username' => $faker->unique()->userName,
				'email' => $faker->unique()->email,
				'password' => $faker->domainWord  
			]);
		}

	}
}
