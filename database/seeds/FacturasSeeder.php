<?php

use Illuminate\Database\Seeder;



class FacturasSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\facturas::class)->times(10)->create();
    }
}
