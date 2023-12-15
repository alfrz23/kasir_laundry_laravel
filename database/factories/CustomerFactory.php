<?php

use Faker\Generator as Faker;
use App\Customer;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'nik' => $faker->bankAccountNumber,
        'name' => $faker->name,
        'address' => $faker->address,
        'phone' => $faker->phoneNumber,
        'courier_id' => '1',
        'point' => $faker->numberBetween(0, 10),
        'deposit' => $faker->numberBetween(0, 1000)
    ];
});
