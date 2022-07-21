<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BajaController extends Controller
{
    public function index(){
        return view('baja');
   }
}
