<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Genre;
use App\Movie;
use App\Quality;
use App\Year;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => 'can you write something',
        'director' => $faker->name,
        'writer' => $faker->name,
        'actor' => $faker->name,
        'country' => $faker->country,
        'video' => $faker->randomElement(['video.mp4','video.3gp','video.flv']),
        'image' => $faker->randomElement(['image.jpg','image.png','image.svg']),
        'quality_id' => Quality::inRandomOrder()->pluck('id')->first(),
        'genre_id' => Genre::inRandomOrder()->pluck('id')->first(),
        'year_id' => Year::inRandomOrder()->pluck('id')->first()
    ];
});
