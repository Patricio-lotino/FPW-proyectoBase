<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListadoCategoriaController extends Controller
{
    public function index(){
        return view('listadoCategoria');
    }
}