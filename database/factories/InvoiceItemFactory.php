<?php
/**
 * Created by PhpStorm.
 * User: martian
 * Date: 3/1/2018
 * Time: 1:09 AM
 */
use Faker\Generator as Faker;


$factory->define(App\Models\InvoiceItem::class, function (Faker\Generator $faker) {
    return [
        'description' => $faker->word,
        'qty' => $faker->number,
        'unit_price' => $faker->price,
        'discount' => $faker->price,
        'vat_amount' => $faker->price,
        'vat' => $faker->price,
        'amount_excl_vat'  => $faker->price

    ];
});

