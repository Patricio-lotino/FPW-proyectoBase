<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarprodXsuc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodXsuc')->insert(array(
            [
                'producto_id' => '1',
                'sucursal_id' => '3',
                'cantidad' => '100',
                'precio' => '50000',
                ],
            [
                'producto_id' => '2',
                'sucursal_id' => '2',
                'cantidad' => '150',
                'precio' => '35000',
            ],
            [
                'producto_id' => '3',
                'sucursal_id' => '1',
                'cantidad' => '50',
                'precio' => '80000',
            ],
            [
                'producto_id' => '4',
                'sucursal_id' => '2',
                'cantidad' => '20',
                'precio' => '120000',
            ]
            ));   
    }
}
