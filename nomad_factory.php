<?php

// Database seeder
// Please visit https://github.com/fzaninotto/Faker for more options

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Nomad_model::class, function (Faker\Generator $faker) {

    return [
        'nomad_version' => $faker->numerify('1.#.#'),
        'nomad_login_version' => $faker->numerify('1.#.#'),
        'nomad_enabled' => $faker->boolean(),
        'nomad_login_enabled' => $faker->boolean(),
        'nomad_user' => $faker->firstName(),
        'addomain' => $faker->domainName(),
        'kerberos_realm' => $faker->domainName(),
        'use_keychain' => $faker->boolean(),
        'local_password_sync' => $faker->boolean(),
    ];
});
