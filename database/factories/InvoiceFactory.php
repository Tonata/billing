<?php
/**
 * Created by PhpStorm.
 * User: martian
 * Date: 3/1/2018
 * Time: 1:09 AM
 */
use Faker\Generator as Faker;


$factory->define(App\Models\Invoice::class, function (Faker\Generator $faker) {
    return [
        'invoice_date' => $faker->date,
        'total_amount' => $faker->price,
        'total_vat' => $faker->price,
        'total_amount_excl_vat' => $faker->price,

    ];
});
