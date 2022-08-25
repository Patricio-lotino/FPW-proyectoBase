<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistroCategoriaController extends Controller
{
    public function index(){
        return view('registroCategoria');
   }
}
