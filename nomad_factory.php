<?php

// Database seeder
// Please visit https://github.com/fzaninotto/Faker for more options

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Nomad_model::class, function (Faker\Generator $faker) {

    return [
        'nomad_version' => $faker->word(),
        'nomad_login_version' => $faker->word(),
        'nomad_enabled' => $faker->boolean(),
        'nomad_login_enabled' => $faker->boolean(),
        'nomad_user' => $faker->word(),
        'addomain' => $faker->word(),
        'kerberos_realm' => $faker->word(),
        'use_keychain' => $faker->boolean(),
        'local_password_sync' => $faker->boolean(),
    ];
});
