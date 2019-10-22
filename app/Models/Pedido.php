<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use App\Models\PedidoArticulo;
use App\Models\PedidoDomicilio;

class Pedido extends Model
{
    use SoftDeletes;
    protected $table = "pedidos";
    
    public function articulos (){
        return $this->hasMany(PedidoArticulo::class, "idPedido", "id");
    }
    
    public function domicilio (){
        return $this->hasOne(PedidoDomicilio::class, "idPedido", "id");
    }
    
    
    public static function crearPedido($request)
    {

        $subtotal = Carrito::getTotal();
        

        $pedido = new Pedido();
        $pedido->idCliente = Cliente::getUser()->id;
        $pedido->tipoPago = $request->tipoPago;
        $pedido->tipoEnvio = $request->tipoPedido;
        $pedido->tipoPedido = "Por Carrito";
        $pedido->estado = "Pendiente";
        $pedido->idPago = "none";
        $pedido->subtotal = $subtotal;
        $pedido->descuento = 0;
        $pedido->total = $subtotal+10;
        $pedido->save();
        
        $domicilio = new PedidoDomicilio();
        $domicilio->idPedido = $pedido->id;
        $domicilio->domicilio = $request->calle.", ".$request->numExt.", ".$request->colonia.", ".$request->codigoPostal.", ".$request->ciudad.", ".$request->estado.", ".$request->municipio.", ".$request->telefono.", Entre calles: ".$request->entreCalles.", Referencias: ".$request->referencias;
        $domicilio->save();

        foreach (Carrito::myCart()->get() as $carrito){
            $pedidoArticulo = new PedidoArticulo();
            $pedidoArticulo->idPedido = $pedido->id;
            $pedidoArticulo->idArticulo = $carrito->idArticulo;
            $pedidoArticulo->cantidad = $carrito->cantidad;
            $pedidoArticulo->subtotal = $carrito->articulo->precioVenta;
            $pedidoArticulo->descuento = 0;
            $pedidoArticulo->total = $carrito->articulo->precioVenta * $carrito->cantidad;
            $pedidoArticulo->save();
        }


        Carrito::myCart()->update([
            'comprado' => 1,
        ]);

        return $pedido;
    }
    
    
}
