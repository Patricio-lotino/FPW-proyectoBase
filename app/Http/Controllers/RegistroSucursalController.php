<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroSucursalController extends Controller
{
    public function index(){
        return view('registroSucursal');
   }
}