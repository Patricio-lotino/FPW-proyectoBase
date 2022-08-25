<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuCategoriasController extends Controller
{
    public function index(){
        return view('menuCategorias');
    }
}