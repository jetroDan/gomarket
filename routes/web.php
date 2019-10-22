<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::pattern('slug','[a-zA-Z0-9\-]+');
Route::model('articulo', \App\Models\Articulo::class);
Route::model('pedido', \App\Models\Pedido::class);


Route::group(['prefix'=>'admin', "namespace" => "admin"], function(){
    Route::get('/', 'SiteController@index');
    Route::get('/iniciar-sesion', 'SiteController@login');
    
});

Route::group(["namespace" => "website"], function(){
//De tipo get
    Route::get('/', 'SiteController@index');
    Route::get('/detalle/Pedido/{pedido}', 'SiteController@detallePedido');
    Route::get('/productos/{slug?}', 'SiteController@productos');
    Route::get('/contacto', 'SiteController@contacto');
    Route::get('/carrito', 'SiteController@carrito');
    Route::get('/{slug}/{articulo}', 'SiteController@detalleProducto');
    Route::get('/pedido', 'SiteController@pedido');
    Route::get('/registro', 'SiteController@registro');
    Route::get('/recuperarContrasena', 'SiteController@recuperarContrasena');
    
    Route::get('/formulario', 'SiteController@formulario');
    
    Route::get("/cerrar-sesion", "SiteController@cerrarSesion");
    Route::get("/misPedidos", "SiteController@misPedidos");
    Route::get('/inicioSesionAdmin', 'SiteController@inicioSesionAdmin');
    Route::get('/homeAdmin', 'SiteController@homeAdmin');
    Route::get('/graficas', 'SiteController@graficas');
    Route::get('/editarAdmin', 'SiteController@editarAdmin');
    Route::get('/AdminPedidos', 'SiteController@AdminPedidos');
    Route::get('/ejemploPedidoASurtir', 'SiteController@ejemploPedidoASurtir');
    
    //De tipo post
    Route::post('/iniciarSesion/cliente', 'SiteController@iniciarSesion');
    Route::post('/registrar/cliente', 'SiteController@postClienteRegistro');
    Route::post('/agregar/articulo', 'SiteController@postAgregarProductoCarrito');
    Route::post('/finalizar/compra', 'SiteController@postFinalizarCompra');
    
    
    
});
