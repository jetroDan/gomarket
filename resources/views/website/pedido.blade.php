@extends('website.layout.default')

@section('titulo', 'Pedido')

@section("contenido")

<div class="container section-pedido">
    <form id="formulario-pedido" class="row" >
        <div class="col-sm-9">
            <section class="row Datos_de_entrega">
                <div class="col-sm-12">
                    <h5>Datos de Entrega de pedido</h5>
                </div>
                
                <div class="col-sm-12">
                    <div class="row">
                       <div class="col-sm-3 check-envio">
                           <label>
                               <input type="radio" name="tipoPedido" value="Envío a domicilio" checked> &nbsp;Pedido a domicilio
                           </label>

                       </div>
                       <div class="col-sm-3 check-envio">
                           <label>
                               <input type="radio" name="tipoPedido" value="Apartado en tienda" checked> &nbsp;Apartado en tienda
                           </label>
                       </div>
                    </div>
                </div>
                

                <div class="col-sm-4">
                    <div class="Nombre item-formulario">

                        <label for="">Nombre*</label>
                        <input class="form-control" type="text" name="nombre" placeholder=""  required="on">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="ApellidoMaterno item-formulario">
                        <label for="">Apellido paterno*</label>
                        <input class="form-control" type="text" name="apellidoP" placeholder=""  required="on">

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="Calle item-formulario">

                        <label for="">Apellido Materno*</label>
                        <input class="form-control" type="text" name="apellidoM" placeholder=""  required="on">

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="Ciudad item-formulario">

                        <label for="">Calle*</label>
                        <input class="form-control" type="text" name="calle" placeholder=""  required="on">

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="Ciudad item-formulario">

                        <label for="">Número Ext.*</label>
                        <input class="form-control" type="text" name="numExt" placeholder=""  required="on">

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="Ciudad item-formulario">

                        <label for="">&nbsp;</label>
                        <input class="form-control" type="text" name="vacio" placeholder="Núm Int."  >

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="Colonia item-formulario">

                        <label for="">Colonia*</label>
                        <input class="form-control" type="text" name="colonia" placeholder=""  required="on">

                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="Codigo item-formulario">
                        <label for="">Código postal*</label>
                        <input class="form-control" type="text" name="codigoPostal" placeholder=""  required="on">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="Ciudad item-formulario">
                        <label for="">Ciudad*</label>
                        <input class="form-control" type="text" name="ciudad" placeholder=""  required="on">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="Estado item-formulario">
                        <label for="">Estado*</label>
                        <input class="form-control" type="text" name="estado" placeholder=""  required="on">
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="Municipio item-formulario">
                        <label for="">Municipio*</label>
                        <input class="form-control" type="text" name="municipio" placeholder=""  required="on">
                    </div>
                </div>
                
                <div class="col-sm-4">
                    <div class="Telefono item-formulario">
                        <label for="">Teléfono*</label>
                        <input class="form-control" type="text" name="telefono" placeholder=""  required="on">
                    </div>
                </div>
            
             

                <div class="col-sm-12 datos-adicionales">
                    <h5>Datos adicionales</h5>
                </div>
                <div class="col-sm-12">
                    <div class="Ciudad">
                        <input class="form-control" type="text" name="entreCalles" placeholder="Entre calles"  >
                    </div>
                </div>
                      

                <div class="col-sm-12">
                    <div class="Ciudad">
                        <label for="">&nbsp;</label>
                        <input class="form-control" type="text" name="referencias" placeholder="Referencias"  >
                    </div>
                </div>
                
                <div class="col-sm-12 ">
                    <div class="row">
                        <div class="col-sm-6 check-confirmacion">
                            <label><input type="checkbox" name="llamadaConfirmacion"> &nbsp;Deseo llamada de confirmación</label>
                        </div>

                        <div class="col-sm-6 check-confirmacion">
                            <label><input type="checkbox" name="direccionPrincipal" > &nbsp;Seleccionar como dirección principal</label>
                        </div>
                    </div>
                </div>
               
               
          

                <!--metodoDePago-->
                <section class="row metodoDePago col-sm-12">
                  
                    <div class="col-sm-12">
                        <div class=row>
                            <div class="col-sm-12 ">
                                <h5>Método de pago</h5>
                            </div>


                            <div class="col-sm-6 check-envio">
                                <label>
                                    <input type="radio" name="tipoPago" value="PayPal" checked> &nbsp;Pago con PayPal
                                </label>
                            </div>

                            <div class="col-sm-6 check-envio">
                                <label>
                                    <input type="radio" name="tipoPago" value="En efectivo" checked> &nbsp;Pago en efectivo
                                </label>

                            </div>
                        </div>
                    </div>
               
                </section>


            </section>
        </div>
        <div class="col-sm-3">
           <div class="cuadro-costo">
               <ul>
                    <li>
                        <p>Subtotal</p>
                        <p>${{ number_format(\App\Models\Carrito::getTotal(), 2) }}</p>
                    </li>
                    <li>
                        <p>Costo de entrega</p>
                        <p>$10.00</p>
                    </li>
                    <li>
                        <p>Descuentos</p>
                        <p>$00.00</p>
                    </li>
                    <li>
                        <p class="total">Total</p>
                        <p class="boldPrecio">${{ number_format(\App\Models\Carrito::getTotal()+10, 2) }}</p>
                    </li>

                </ul>
                <button type="submit" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">FINALIZAR PEDIDO</button>
           </div>
        </div>
    </form>
</div>
              
              

              


        
            
            












@endsection
