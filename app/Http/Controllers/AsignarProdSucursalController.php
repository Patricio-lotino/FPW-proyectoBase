<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AsignarProdSucursalController extends Controller
{
   public function index(){
        return view('asignacion');
   }

   public function agregar(){
      return view("asignacion");
  }

  public function guardar(Request $request){
      $this->validate($request, [
          'playaBlanca' => 'integer',
          'elCorralero' => 'integer',
          'campoLindo' => 'integer'
      ]);
      return $input = $request->all();
  }
}