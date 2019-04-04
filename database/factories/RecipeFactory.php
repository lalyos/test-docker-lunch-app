<?php

use App\Recipe;
use Faker\Generator as Faker;

$factory->define(Recipe::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3, true),
        'description' => $faker->paragraphs(3, true),
        'image' => $faker->imageUrl(300, 200, 'food'),
        'calories' => rand(150, 300),
    ];
});
