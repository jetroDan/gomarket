<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoArticulo extends Model
{
    protected $table = "articuloPedido";
    
    public function articulo (){
        return $this->belongsTo(Articulo::class, "idArticulo", "id");
        
    }
    
}
