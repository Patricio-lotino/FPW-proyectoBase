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
        DB::table('productos')->insert(array(
            [
                'codigo' => '20001',
                'nombre' => 'Escritorio americano',
                'descripcion' => 'Escritorio sencillo solo con cubierta',
                'categoria_id' => '2',
                ],
            [
                'codigo' => '10001',
                'nombre' => 'Repisa un cuerpo',
                'descripcion' => 'Repisa de vidrio de un cuerpo',
                'categoria_id' => '1',
            ],
            [
                'codigo' => '30001',
                'nombre' => 'Colchon 1 plaza',
                'descripcion' => 'Colchon de una plaza de origen nacional',
                'categoria_id' => '3',
            ],
            [
                'codigo' => '10002',
                'nombre' => 'Mesa con 4 sillas',
                'descripcion' => 'Mesa con 4 sillas metalicas origen chino',
                'categoria_id' => '1',
            ]
            ));  
    }
}
