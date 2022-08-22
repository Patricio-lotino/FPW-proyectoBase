<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgregarController extends Controller
{
   public function agregar(){
        return view('registro');
   }

   public function guardar(Request $request){
<<<<<<< HEAD
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
=======
     dd($request);
          //$this->validate($request,[
               //'codigo' => 'required',
               //'nombre' => 'required',
               //'categoria' => 'required',
               //'descripcion' => 'required',
               //'cantidad' => 'integer',
               //'precio' => 'integer'
                 
          
          
     }
>>>>>>> b43478d601de0a51de5d00d24bacf5dc6b9d53ac
}