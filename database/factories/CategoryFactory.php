<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'id_category' => 99999,
        'tx_name_category' => $faker->name,
        'created_at' => now()
    ];
});
