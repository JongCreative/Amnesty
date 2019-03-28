<?php

use Illuminate\Database\Seeder;

class sponsorsSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		factory(App\Sponsor::class, 10)->states('person')->create();
		factory(App\Sponsor::class, 10)->states('company')->create();

	}
}
