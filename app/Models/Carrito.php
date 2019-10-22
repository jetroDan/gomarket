<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    protected $table = "carritos";
    
    public function articulo()
    {
        return $this->belongsTo(Articulo::class, "idArticulo", "id");
    }
    
    
    /**
     * Obtiene una consulta del carrito de la cuenta
     */

    public static function myCart()
    {
        $query = Carrito::query();


        if (Cliente::getUser() != null) {
            $query = Carrito::where("idCliente", Cliente::getUser()->id)->has("articulo");
        }
        else {
            $query = Carrito::where("idSesion", session()->getId())
                ->where("idCliente", null)->has("articulo");
        }

        $query->where('comprado', 0);


        return $query;
    }
    
    public static function getTotal()
    {
      $total = 0;
        foreach(static::myCart()->get() as $producto){
            $total += $producto->cantidad * $producto->articulo->precioVenta;
            
        }
        
        return $total;
    }
    
}
