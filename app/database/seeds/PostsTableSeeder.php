<?php 

Class postsTableSeeder extends Seeder {
	/**
	* Fill  db with user(s)
	*
	* @return void 
	*/ 

	public function run()
	{

		DB::table('posts')->delete();

		$faker = Faker\Factory::create();

		for ($i=0; $i < 100; $i++) 
		{ 
			$title = $faker->word;

			$post = Post::create([
				'title' => $title,
				'body' => $faker->sentence($nbWords = 6),
				'slug' => $title,
				'user_id' => rand(1,100)
			]);
		}

	}	

}