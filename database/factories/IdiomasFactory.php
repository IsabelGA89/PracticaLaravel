<?php

use Faker\Generator as Faker;
use App\Empleado as empleado;

$factory->define(App\Idiomas::class, function (Faker $faker) {
    $languajes = ['Ingles','Castellano','Frances','Aleman','Portugues','Chino'];
    return [
        'idioma'=>$faker->randomElement($languajes),
        'codigo'=>$faker->countryCode,
    ];
});
