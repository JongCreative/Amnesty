<?php

use Faker\Generator as Faker;

$factory->define(App\Press::class, function (Faker $faker) {
	return [
		'link' => $faker->url,
		'title' => $faker->realText($maxNbChars = 15),
		'source' => $faker->domainWord,
		'date' => $faker->dateTime,
		'descr' => $faker->realText($maxNbChars = 400),
	];
});
