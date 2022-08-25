<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgregarController extends Controller
{
     /*public function listar(){
          return view('listado');
     }*/
     
     public function index(){
        return view('registro');
   }

   /*public function modificar(){
     return view('actualiza');
}*/

   /*public function guardar(Request $request){

     $this->validate($request, [
          'codigo' => 'required',
          'nombre' => 'required',
          'categoria' => 'required',
          'descripcion' => 'required',
          'cantidad' => 'integer',
          'precio' => 'integer'
     ]);

   return $input=$request->all();
   }*/
         
} 

