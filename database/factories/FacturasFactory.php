<?php

use Faker\Generator as Faker;


$factory->define(App\facturas::class, function (Faker $faker) {
    $types = ['10%','17%','8%','16%','2%','21%'];
    $products =['libro','curso'];
    return [
        'empresa'=>$faker->name,
        'producto'=>$faker->randomElement($products),
        'unidades'=>$faker->numberBetween(1,10000),
        'total'=>$faker->randomFloat(2,10,50000),
        'impuesto'=>$faker->randomElement($types),

    ];
});
