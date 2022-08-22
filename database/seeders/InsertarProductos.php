<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('producto')->insert(array(
            [
                'codigo' => '20001',
                'nombre' => 'Escritorio americano',
                'descripcion' => 'Escritorio sencillo solo con cubierta',
                'cantidad' => '150',
                'precio' => '55000',
                'categoria_id' => '2',
                'sucursal_id' => '3',
            ],
            [
                'codigo' => '10001',
                'nombre' => 'Repisa un cuerpo',
                'descripcion' => 'Repisa de vidrio de un cuerpo',
                'cantidad' => '100',
                'precio' => '30000',
                'categoria_id' => '1',
                'sucursal_id' => '2',
            ],
            [
                'codigo' => '30001',
                'nombre' => 'Colchon 1 plaza',
                'descripcion' => 'Colchon de una plaza de origen nacional',
                'cantidad' => '200',
                'precio' => '35000',
                'categoria_id' => '3',
                'sucursal_id' => '1',
            ],
            [
                'codigo' => '10002',
                'nombre' => 'Mesa con 4 sillas',
                'descripcion' => 'Mesa con 4 sillas metalicas origen chino',
                'cantidad' => '50',
                'precio' => '75000',
                'categoria_id' => '1',
                'sucursal_id' => '3',
            ]
            ));  
    }
}
