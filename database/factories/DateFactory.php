<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Date;
use Faker\Generator as Faker;

$factory->define(Date::class, function (Faker $faker) {
    return [
        'day' => $faker->numberBetween(1, 31),
        'month' => $faker->name,
        'year' => $faker->numberBetween(1960, 2020),
    ];
});
