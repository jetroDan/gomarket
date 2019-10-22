<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::dropIfExists('pedidoDomicilio');
        Schema::dropIfExists('vehiculos');
        Schema::dropIfExists('articuloPedido');
        Schema::dropIfExists('pedidos');
        Schema::dropIfExists('articuloCotizacion');
        Schema::dropIfExists('cotizaciones');
        Schema::dropIfExists('carritos');
        Schema::dropIfExists('sugerenciasDudas');
        Schema::dropIfExists('articuloCategorias');
        Schema::dropIfExists('articulos');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('empleados');
        Schema::dropIfExists('clientes');
        
        Schema::create('vehiculos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('placas', 10);
            $table->string('color', 30);
            $table->string('modelo', 30);
            $table->string('año', 10);
            $table->string('fabricante' , 10);
            $table->timestamps();
            $table->softDeletes();
        });

    
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 30);
            $table->string('apellidos', 30);
            $table->string('domicilio')->nullable();
            $table->string('NSS', 10)->nullable();
            $table->string('puestoEmpleado', 30)->nullable();
            $table->string('sueldo' , 30);
            $table->string('curp')->nullable();
            $table->string('correo')->nullable();
            $table->string('contraseña')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 30);
            $table->string('apellidos', 30);
            $table->string('domicilio')->nullable();
            $table->string('curp')->nullable();
            $table->string('rfcCliente' , 30)->nullable();
            $table->string('correo')->nullable();
            $table->string('contrasena')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
        
        Schema::create('sugerenciasDudas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCliente')->unsigned();
            $table->text('sugerencias');
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign("idCliente")->references("id")->on("clientes")->onDelete("cascade");
        });
        
        Schema::create('categorias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPadre')->unsigned()->nullable();
            $table->string('slug');
            $table->string('nombre');
            $table->string('imagen');
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign("idPadre")->references("id")->on("categorias");
        });

        Schema::create('articulos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('SKU');
            $table->string('nombre', 30);
            $table->string('marca', 30);
            $table->string('imagen');
            $table->string('descripcion' , 100);
            $table->double('precioVenta', 10, 2);
            $table->double('precioReal', 10, 2);
            $table->string('prestacion', 30);
            $table->string('ubicacion' , 10);
            $table->string('tipoUnidad' , 30);
            $table->double('precioUnidad', 10, 2);
            $table->string('departamento' , 30);
            $table->integer('unidadMax' );
            $table->integer('unidadInvent');
            $table->integer('piezasCotizacion');
            $table->double('precioCotizacion', 10, 2);
            $table->double('impuestos', 10, 2);
            $table->timestamps();
            $table->softDeletes();
        });
            
        Schema::create('articuloCategorias', function (Blueprint $table) {
            $table->integer('idArticulo')->unsigned();
            $table->integer('idCategoria')->unsigned();
            
            $table->primary(["idArticulo","idCategoria"]);
            
            $table->foreign("idCategoria")->references("id")->on("categorias")->onDelete("cascade");
            $table->foreign("idArticulo")->references("id")->on("articulos")->onDelete("cascade");
        });
        
        Schema::create('carritos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCliente')->unsigned()->nullable();
            $table->string('idSesion')->nullable();
            $table->integer('idArticulo')->unsigned()->nullable();
            $table->integer('cantidad');
            $table->boolean("comprado")->default(0);
            $table->timestamps();
            
            $table->foreign("idCliente")->references("id")->on("clientes")->onDelete("cascade");
            $table->foreign("idArticulo")->references("id")->on("articulos")->onDelete("cascade");
        });
        
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCliente')->unsigned();
            $table->double('subtotal', 10, 2);
            $table->double('descuento', 10, 2);
            $table->double('total', 10, 2);
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign("idCliente")->references("id")->on("clientes")->onDelete("cascade");
        });
        
        Schema::create('articuloCotizacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCotizacion')->unsigned();
            $table->integer('idArticulo')->unsigned();
            $table->integer('cantidad');
            $table->double('subtotal', 10, 2);
            $table->double('descuento', 10, 2);
            $table->double('total', 10, 2);
            $table->timestamps();
            
            $table->foreign("idCotizacion")->references("id")->on("cotizaciones")->onDelete("cascade");
            $table->foreign("idArticulo")->references("id")->on("articulos")->onDelete("cascade");
        });

        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idCliente')->unsigned();
            $table->string('tipoPago' , 30);
            $table->string('tipoEnvio', 30);
            $table->string('tipoPedido', 30);
            $table->string('estado', 30);
            $table->string('idPago');
            $table->string('estadoPago')->nullable();
            $table->double('subtotal', 10, 2);
            $table->double('descuento', 10, 2);
            $table->double('tarifaApartado', 10, 2)->default(0.0);
            $table->double('tarifaDomicilio', 10, 2)->default(0.0);
            $table->double('total', 10, 2);
            $table->json('extras')->nullable();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreign("idCliente")->references("id")->on("clientes")->onDelete("cascade");
        });

        Schema::create('pedidoDomicilio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPedido')->unsigned();
            $table->integer('idVehiculo')->unsigned()->nullable();
            $table->integer('idEmpleado')->unsigned()->nullable();
            $table->string('domicilio');
            $table->date('fechaEntrega')->nullable();
            $table->boolean("default")->default(0);
            $table->timestamps();
            
            $table->foreign("idPedido")->references("id")->on("pedidos")->onDelete("cascade");
            $table->foreign("idVehiculo")->references("id")->on("vehiculos")->onDelete("cascade");
            $table->foreign("idEmpleado")->references("id")->on("empleados")->onDelete("cascade");
        });
        
        Schema::create('articuloPedido', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idPedido')->unsigned();
            $table->integer('idArticulo')->unsigned();
            $table->integer('cantidad');
            $table->double('subtotal', 10, 2);
            $table->double('descuento', 10, 2);
            $table->double('total', 10, 2);
            $table->timestamps();
            
            $table->foreign("idPedido")->references("id")->on("pedidos")->onDelete("cascade");
            $table->foreign("idArticulo")->references("id")->on("articulos")->onDelete("cascade");
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidoDomicilio');
        Schema::dropIfExists('vehiculos');
        Schema::dropIfExists('articuloPedido');
        Schema::dropIfExists('pedidos');
        Schema::dropIfExists('articuloCotizacion');
        Schema::dropIfExists('cotizaciones');
        Schema::dropIfExists('carritos');
        Schema::dropIfExists('sugerenciasDudas');
        Schema::dropIfExists('articulos');
        Schema::dropIfExists('empleados');
        Schema::dropIfExists('clientes');
    }
}
