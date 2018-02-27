<?php

use Faker\Generator as Faker;
/**
 * Created by PhpStorm.
 * User: martian
 * Date: 2/27/2018
 * Time: 1:43 AM
 */
$factory->define(App\Models\License::class, function (Faker $faker) {
    return [
        'holder' => 1,
        'start_date' => $faker->date(),
        'end_date' =>  $faker->date()
    ];
});
