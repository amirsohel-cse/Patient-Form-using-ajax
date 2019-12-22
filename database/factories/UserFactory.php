<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

    $factory->define(App\District::class, function (Faker $faker) {
        return [
            'dis_name' => $faker->city,
            'div_id' => $faker->numberBetween(1,6),
            'dis_phone_extension' => $faker->numberBetween(1,9999999),

    ];
    });

    $factory->define(App\Thana::class, function (Faker $faker) {
        return [
        'thana_name' => $faker->city,
        'dis_id' => $faker->numberBetween(1,64),
        'thana_phone_extension' => $faker->numberBetween(1,99999999),

    ];
});
