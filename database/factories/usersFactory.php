<?php
use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
	return [
		'first_name' => $faker->firstName,
		'last_name' => $faker->lastName,
		'email' => $faker->unique()->safeEmail,
		'email_verified_at' => now(),
		'password' => Hash::make($faker->password), // password
		'remember_token' => Str::random(10),
		'descr' => $faker->realText($maxNbChars = 200),
		'title' => $faker->jobTitle,
	];
});

$factory->state(App\User::class, 'jury', function (Faker $faker) {
	return [
		'jury' => true,
	];
});

$factory->state(App\User::class, 'admin', function (Faker $faker) {
	return [
		'admin' => true,
	];
});

$factory->state(App\User::class, 'banned', function (Faker $faker) {
	return [
		'banned' => true,
	];
});