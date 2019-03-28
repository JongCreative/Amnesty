<?php

use Faker\Generator as Faker;

$factory->define(App\Sponsor::class, function (Faker $faker) {
	return [
		'contribution' => $faker->text($maxNbChars = 200),
	];
});

$factory->state(App\Sponsor::class, 'person', function (Faker $faker) {
	return [
		'name' => $faker->name,
		'title' => $faker->jobTitle,
	];
});

$factory->state(App\Sponsor::class, 'company', function (Faker $faker) {
	return [
		'name' => $faker->company,
		'title' => 'company',
	];
});