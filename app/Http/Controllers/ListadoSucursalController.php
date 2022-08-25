<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListadoSucursalController extends Controller
{
    public function index(){
        return view('listadoSucursal');
    }
}