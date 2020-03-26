<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\GearSet;
use Faker\Generator as Faker;

$factory->define(GearSet::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'service_status' => $faker->randomElement($array = array (0, 1)),
        'gear_id' => Gear::all()->random()
    ];
});
