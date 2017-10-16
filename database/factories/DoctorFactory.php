<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Doctor::class, function (Faker $faker) {
	$gender = (mt_rand(0, 1)) ? 'female' : 'male';

    return [
        'name' => $faker->name($gender),
        'specialty' => $faker->jobTitle,
        'description' => $faker->text,
        'phone' => $faker->tollFreePhoneNumber,
        'photo' => ($gender == 'male') ? '/images/team-1.png' : '/images/team-2.png'
    ];
});
