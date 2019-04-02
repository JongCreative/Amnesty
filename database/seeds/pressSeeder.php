<?php

use Illuminate\Database\Seeder;

class pressSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory(App\Press::class, 30)->create();

		DB::table('contests')->insert([
			'id' => config('contest.contest'),
			'theme' => config('contest.theme'),
			'region' => config('contest.region'),
		]);
	}
}
