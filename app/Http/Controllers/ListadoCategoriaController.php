<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListadoCategoriaController extends Controller
{
    public function index(){
        return view('listadoCategoria');
    }

    public function agregar(){
        return view("registroCategoria");
    }

    public function guardar(Request $request){
        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);
        return $input = $request->all();
    }
}