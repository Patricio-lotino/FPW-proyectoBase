<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListadoController extends Controller
{
    public function index(){
        return view('listado')
        ->with('listado', array('0001 - Cloro - Desinfectante - Líquido para desinfectar superficies - 1000 - 1200',
<<<<<<< HEAD
        '0002 - Desodorante - Aromatizador - Desodorante ambiental en aerosol - 2500 - 2300',
        '0003 - Ariel - Detergente - Producto para lavar ropa - 5000 - 9500'));
   }
}
=======
        '0002 - Desodorante - Aromatizador - Desodorante ambiental en aerosol - 2500 - 2300'));
   }

   
}

>>>>>>> b43478d601de0a51de5d00d24bacf5dc6b9d53ac
