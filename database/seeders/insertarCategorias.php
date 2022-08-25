<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class insertarCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert(array(
            [
                'nombre' => 'Muebles de cocina',
                'descripcion' => 'Todo tipo de mobiliario para la cocina',
            ],
            [
                'nombre' => 'Muebles de oficina',
                'descripcion' => 'Todo tipo de mobiliario para la oficina',
            ],
            [
                'nombre' => 'Muebles de dormitorio',
                'descripcion' => 'Todo tipo de mobiliario para el dormitorio',
            ]
            ));
    }
}
