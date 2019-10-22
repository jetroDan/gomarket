<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    public function articuloCategorias(){
        return $this->hasMany(ArticuloCategoria::class, "idArticulo", "id");
    }
    
    use SoftDeletes;
    protected $table = "articulos";
}
