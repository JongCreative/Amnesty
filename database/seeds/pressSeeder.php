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
	}
}
