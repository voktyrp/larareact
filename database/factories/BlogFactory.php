<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->userName,
        'information' => $faker->text(30),
        'date' => $faker->numberBetween(1, 31),
    ];
});
