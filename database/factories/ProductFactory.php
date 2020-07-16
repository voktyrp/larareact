<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) 
{
    return 
    [
        'title' => $faker->company,
        'info' => $faker->word(1, 5),
        'price' => $faker->randomDigit,
        'category_id' => $faker->numberBetween(1, 3),
    ];
});
