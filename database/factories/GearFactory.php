<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Gear;
use Faker\Generator as Faker;

$factory->define(Gear::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 3, $variableNbWords = true)
    ];
});
