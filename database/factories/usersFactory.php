<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
				'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => Hash::make($faker->password);, // password
        'remember_token' => Str::random(10),
        'descr' => $faker->text($maxNbChars = 200),
    ];
});
