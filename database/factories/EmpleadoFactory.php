<?php

use Faker\Generator as Faker;

$factory->define(App\Empleado::class, function (Faker $faker) {
    return [
        //
        'nombre'=>$faker->name,
        'apellido'=>$faker->lastName,
        'direccion'=>$faker->address,
        'email'=>$faker->unique()->safeEmail,
        'telefono'=>$faker->phoneNumber,
    ];
});
