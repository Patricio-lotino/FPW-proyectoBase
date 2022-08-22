<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgregarController extends Controller
{
   public function agregar(){
        return view('registro');
   }

   public function guardar(Request $request){
   // dd($request);

   //return "Codigo: ". $request->input('codigo');
     $this->validate($request, [
          'codigo' => 'required',
          'nombre' => 'required',
          'categoria' => 'required',
          'descripcion' => 'required',
          'cantidad' => 'integer',
          'precio' => 'integer'
     ]);

   return $input=$request->all();
   }
}