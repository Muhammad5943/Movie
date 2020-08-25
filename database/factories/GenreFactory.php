<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Genre;
use Faker\Generator as Faker;

$factory->define(Genre::class, function (Faker $faker) {
    return [
        'genre' => $faker->randomElement(['Action','Comedy','Horror','Science','Romance'])
    ];
});
