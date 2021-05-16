<?php

use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $classes =[FacturasSeeder::class,
            EmpleadoSeeder::class,
            ClientesSeeder::class,
            IdiomasSeeder::class,
        ];

        $this->call($classes);

    }
}
