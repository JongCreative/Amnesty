<?php

use Illuminate\Database\Seeder;

class series extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
      	'id' = 0,
      	'first_name' = Str::random(10),
       	'last_name' = Str::random(10),
       	'email' = Str::random(10) . '@gmail.com',
       	'password' = bcrypt(Str::random(10)),
      ])

      DB::table('users')->insert([
       	'id' = 0,
       	'user_id' = 0,
       	'title' = 'No series',
       	'description' = Str::random(10),
      ])
    }
}
