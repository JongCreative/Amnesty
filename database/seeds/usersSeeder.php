<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		DB::table('users')->insert([
			'first_name' => 'Admin',
			'last_name' => 'Account',
			'email' => 'admin@gmail.com',
			'password' => bcrypt('AdminPassword'),
			'admin' => true,
		]);

		factory(App\User::class, 50)
			->create();

		factory(App\User::class, 6)->states('jury')->create();
		factory(App\User::class, 6)->states('admin')->create();
		factory(App\User::class, 10)->states('banned')->create();

	}
}