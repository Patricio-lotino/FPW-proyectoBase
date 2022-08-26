<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListadoSucursalController extends Controller
{
    public function index(){
        return view('listadoSucursal');
    }

    public function agregar(){
        return view("registroSucursal");
    }

    public function guardar(Request $request){
        $this->validate($request, [
            'nombre' => 'required',
            'ciudad' => 'required'
        ]);
        return $input = $request->all();
    }
}