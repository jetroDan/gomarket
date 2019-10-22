<?php

namespace App\Http\Controllers\website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;
use App\Models\Articulo;
use Illuminate\Support\Facades\Hash;
use App\Models\Cliente;
use App\Models\Carrito;
use App\Models\Pedido;
use Illuminate\Support\Facades\Validator;


class SiteController extends Controller
{
    function index(){
        
        $categorias = Categoria::get();
        
        //
        //Categoria::where("nombre", "like", "sadiujk")->get();
        
        return view("website.home",[
            "categorias" => $categorias
            
        ]);
    }
    
    function productos(Request $request, $slug = null){
        $productos = Articulo::query();
        
        if($slug == "menor-mayor"){
            $productos->orderBy("precioVenta", "asc");
        }
        else if($slug == "mayor-menor"){
            $productos->orderBy("precioVenta", "desc");
        }
        else if($slug != null){
            $cat = Categoria::where("slug", $slug)->first();
            if($cat != null){
                $productos->whereHas("articuloCategorias", function($productos) use ($cat){
                    $productos->where("idCategoria", $cat->id);
                });
            }
            
            
        }
        
        if($request->s){
            $productos->where(function($productos) use ($request){
                $productos->orwhere("nombre", "like", "%".$request->s."%");
                $productos->orwhere("descripcion", "like", "%".$request->s."%");
            });
        }
        
        return view("website.productos",[
            "productos" => $productos->paginate(50)]);
        
    }
    
    function contacto(){
        return view("website.contacto");
    }
    
    function carrito(){
        return view("website.carrito");
    }
    
    function detalleProducto($slug, Articulo $articulo){
        return view("website.detalleProducto",["articulo" => $articulo]);
    }
    
    function pedido(){
        return view("website.pedido");
    }
    
    function registro(){
        return view("website.registro");
    }
    
    function recuperarContrasena(){
        return view("website.recuperarContraseña");
    }
    
    function detallePedido(Pedido $pedido){
        return view("website.detallePedido",[
            "pedido" => $pedido
        ]);
    }
    
    function formulario(){
        return view("website.formulario");
    }
    
    function misPedidos(){
        $pedidos = Pedido::where("idCliente", Cliente::getUser()->id)->get();
        return view("website.misPedidos",[
            "pedidos" => $pedidos
        ]);
    }
    
    function inicioSesionAdmin(){
        return view("website.inicioSesionAdmin");
    }
    
    function homeAdmin(){
        return view("website.homeAdmin");
    }
    
    function graficas(){
        return view("website.graficas");
    }

    function editarAdmin(){
        return view("website.editarAdmin");
    }
    
    function AdminPedidos(){
        return view("website.AdminPedidos");
    }
    
    function ejemploPedidoASurtir(){
        return view("website.ejemploPedidoASurtir");
    }
    
    
    
    // Registro
    
    public function postClienteRegistro(Request $request){

        DB::beginTransaction();

        try{

            if($request->get("contrasena") != $request->get("contrasenaC")){
                return ['success' => false, 'message' => "La contraseña no es igual a la contraseña de confirmación"];
            }

            if(Cliente::where('correo', $request->correo)->first() == null){

                $user = new Cliente();
                $user->nombre = $request->nombre;
                $user->apellidos = $request->apellidoP ." ".$request->apellidoM;
                $user->correo = $request->correo;               
                $user->contrasena = Hash::make($request->contrasena);
                $user->save();
//cantidades de los carritos
                foreach(Carrito::myCart()->get() as $cart){
                    $item = Carrito::where('id', $cart->id)->first();
                    $item->idCliente = $user->id;
                    $item->save();
                }


            }
            else{
                return ['success' => false, 'message' => "El correo ya está registrado"];
            }

        }
        catch (QueryException $e){
            DB::rollback();
            return ['success' => false, 'message' => "Ocurrió un error inesperado", 'exception' => $e->getMessage()];
        }

        DB::commit();
        
        session()->put("usuario_id", $user->id);
     

//para mandar correos
    /*    Mail::to($user->email)
            ->send(new UsuarioResgistrado($user));  */


        return ['success' => true, 'message' => "Te has registrado correctamente"];
    }

    public function iniciarSesion(Request $request){

        $user = Cliente::where("correo", $request->email)->first();

        if($user != null){
            if(Hash::check($request->password, $user->contrasena)) {


                $exist = false;

                foreach (Carrito::myCart()->get() as $productSession){

                    $exist = false;

                    foreach (Carrito::where('idCliente', $user->id)->get() as $productUser){
                        
                        if($productSession->idArticulo == $productUser->idArticulo){
                            $cantidad = $productUser->cantidad;
                           

                            if($cantidad > $productUser->unidadInvent){
                                Carrito::where('id', $productUser->id)
                                    ->update(['cantidad' => $productUser->unidadInvent]);
                            }
                            else {
                                Carrito::where('id', $productUser->id)
                                    ->update(['cantidad' => $cantidad]);
                            }

                            Carrito::where('id', $productSession->id)->where('id', $productSession->id)->delete();

                            $exist = true;
                            continue;
                        }

                    }

                    if(!$exist){
                        $productSession->idCliente = $user->id;
                        $productSession->save();
                    }

                }

               
;
              
             session()->put("usuario_id", $user->id);
                

                return ["success" => true, "message" => "El inicio fue exitoso"];
            }
            else{
                return ["success" => false, "message" => "El correo no es correcto"];
            }
        }
        else{
            return ["success" => false, "message" => "El correo no es correcto"];
        }

    }

    public function cerrarSesion(){
        Session()->flush();

        return redirect('/');
    }
    
    
    
    public function postAgregarProductoCarrito(Request $request){
        $producto = Articulo::find($request->get('idArticulo'));

        $cart = Carrito::myCart()->where('idArticulo', $producto->id)->first();
        

        DB::beginTransaction();
        try{
            if($cart != null){
                if($request->get("cantidad") == null || $request->get("cantidad") < 1){
                    $cart->cantidad += 1;
                }
                else{
                    $cart->cantidad += $request->get("cantidad");
                }
            }
            else{
                $cart = new Carrito();
                if(Cliente::getUser() != null){
                    $cart->idCliente = Cliente::getUser()->id;
                }
                $cart->idSesion = session()->getId();
                $cart->idArticulo = $producto->id;
            
                if($request->get("cantidad") == null || $request->get("cantidad") < 1){
                    $cart->cantidad = 1;
                }
                else{
                    $cart->cantidad = $request->get("cantidad");
                }


            }
            $cart->save();
        }
        catch (QueryException $e){
            return ['success' => false, 'message' =>"Ocurrio un error inesperado", 'exception' => $e->getMessage()];
        }

        DB::commit();


        return ["success" => true, "message" => "El producto se agregó al carrito"];

    }
    
    
    public function postFinalizarCompra(Request $request){

        if(Carrito::myCart()->count() < 1){
            return ['success' => false, 'message' => "Necesitas agregar productos al carrito"];
        }


        $change = null;

        $validator = Validator::make($request->all(),[
            'tipoPedido' => 'required',
            'nombre' => 'required',
            'apellidoP' => 'required',
            'apellidoM' => 'required',
            'calle' => 'required',
            'numExt' => 'required',            
            'colonia' => 'required',
            'codigoPostal' => 'required',
            'ciudad' => 'required',
            'estado' => 'required',
            'municipio' => 'required',
            'telefono' => 'required',
            'llamadaConfirmacion' => 'required',
            'direccionPrincipal' => 'required',
            'tipoPago' => 'required',
            
//            'conekta_token' => 'sometimes',
//            'conekta_cardholder' => 'required_with:conekta_token',
//            'conekta_phone' => 'required_with:conekta_token'
        ], [
          
            'domicilio.required' => "Se requiere proporcione el domicilio",
            'ciudad.required' => "Se requiere la ciudad",
//            'municipio.required' => __("messages.state_required"),
//            'municipio.required' => __("messages.state_required"),
            'estado.required' => "Se requiere proporcione el estado",
            'pais.required' => "Se requiere proporcione el país",
            'metodo_envio.required' => "Se requiere proporcione el método de envío",
            'telefono_contacto.required' => "Se requiere proporcione el teléfono",
            'forma_pago.required' => "Se requiere proporcione la forma de pago",
        ]);

        if ($validator->fails()) {
            foreach ($validator->messages()->all() as $error) {
                return ['success' => false, 'message' => $error];
            }
        }
        
        DB::beginTransaction();

        try {

            $pedido = Pedido::crearPedido($request);
            $pedido->save();

            $redirectTo = '/detalle/compra-' . $pedido->id;
            $url = false;
            $detalle_compra = '/detalle/compra-';
            
            $ficha = '';
            if($request->get('forma_pago') == 'paypal'){


            }
            else if($request->get('forma_pago') == 'efectivo'){

            }

            DB::commit();

            $detalle_compra = $detalle_compra . $pedido->id;

            return ['success' => true, 'url' => $url, 'redirect_to' => $redirectTo, 'detalle_compra' => $pedido];

           
        }catch (\Exception $e){
            DB::rollback();
            $message = 'Unexpected error';
            if($e->getMessage() != null){
                $message = $e->getMessage();
            }
            return response(["success" => false, "message" => $message,
                'exception' => $e->getMessage() . ", " . $e->getFile() . ": " . $e->getLine()]);
        }

    }


    
}
