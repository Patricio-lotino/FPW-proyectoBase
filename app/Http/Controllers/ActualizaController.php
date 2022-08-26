<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActualizaController extends Controller
{
    //public function index(){
        //return view('actualiza');
   //}

   public function agregar(){
    return view("actualiza");
}

public function guardar(Request $request){
    $this->validate($request, [
        'nombre' => 'required',
        'descripcion' => 'required',
        'precio' => 'integer'
    ]);
    return $input = $request->all();
}

  }
