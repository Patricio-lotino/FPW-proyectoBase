<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuProductosController extends Controller
{
    public function index(){
        return view('menuProductos');
    }
}
