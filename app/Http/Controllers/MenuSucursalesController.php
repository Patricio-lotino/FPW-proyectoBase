<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuSucursalesController extends Controller
{
    public function index(){
        return view('menuSucursales');
    }
}