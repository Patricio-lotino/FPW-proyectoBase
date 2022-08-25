<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdXSuc extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'prodXsuc';

    public function productos(){
        return $this->hasMany(Producto::class); 
    }

    public function sucursales(){
        return $this->hasMany(Sucursal::class); 
    }
}
