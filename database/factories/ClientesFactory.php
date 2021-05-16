<?php

use Faker\Generator as Faker;

$factory->define(App\Clientes::class, function (Faker $faker) {
    return [
        //
        'nombre'=>$faker->name,
        'direccion'=>$faker->address,
        'email'=>$faker->unique()->safeEmail,

    ];
});
