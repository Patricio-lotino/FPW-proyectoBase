<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'sucursales';

    public function prodXsuc(){
        return $this->belongsTo(ProdXSuc::class, 'prodXsuc_id');  
    }
}
