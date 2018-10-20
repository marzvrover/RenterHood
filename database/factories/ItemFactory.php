<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'name' => $faker->word . ' ' . $faker->word,
        'description' => $faker->paragraph,
        'postal_code' => $faker->mt_rand(10000, 99999),
        'price' => mt_rand(0,100000000),
        'picture' => 'img/stock_item.png',
    ];
});
