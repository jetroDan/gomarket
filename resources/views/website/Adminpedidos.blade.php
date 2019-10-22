@extends('website.layout.defaultAdmin')

@section('Administrador Pedidos', 'AdminPedidos')

@section("contenido")

   

<main class="content-main">
<!--banner-->	
       <div class="banner">
            <h2>
            <a href="/homeAdmin">Inicio</a>
            <i class="fa fa-angle-right"></i>
            <span>Pedidos</span>
            </h2>
        </div>
<!--//banner-->
		
<div class="banner">
   
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-filter" aria-hidden="true"></i>  Filtro
        <span class="caret"></span></button>
        <ul class="dropdown-menu">

          <li><a href="#">Pendiente</a></li>
          <li><a href="#">Enviado</a></li>
          <li><a href="#">Cancelado</a></li>
          <li><a href="#">Devolucion Aceptada</a></li>
          <li><a href="#">Devolucion Cancelada</a></li>

        </ul>
    </div>
    <hr>
 



<div class="container bloque-detalle">
	<div class="row">
		<div class="col-sm-11 col-md-10">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-sm-12 titulo-detalle" >
								<h5><span class=""></span> Mis pedidos</h5>
							</div>
                           
                           <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-2">    
                                        <h4 class="product-name"><strong>Id Pedido</strong></h4>
                                    </div>
                                    <div class="col-sm-2">    
                                        <h4 class="product-name"><strong>Fecha</strong></h4>
                                    </div>
                                    <div class="col-sm-2">    
                                        <h4 class="product-name"><strong>Estatus</strong></h4>
                                    </div>
                                    <div class="col-sm-2">    
                                        <h4 class="product-name"><strong>Total</strong></h4>
                                    </div>
                                    <div class="col-sm-4">    
                                        <h4 class="product-name"><strong>Admin</strong></h4>
                                    </div>   

                                </div>
							</div>
						</div>
					</div>
				</div>
				
				
                <div class="panel-body">
                    <div class="row">
                        <a href='/ejemploPedidoASurtir' class="">

                            <div class="col-sm-2">
                                <h4><small>001</small></h4>
                            </div>
                        </a>
                            <div class="col-sm-2">
                                <h4><small class="fecha">22/06/2019</small></h4>
                            </div>
                            
                            <div class="col-sm-2">
                                <select class="col-sm-2 form-control">
                                    <option>Pendiente</option>
                                    <option>Enviando</option>
                                    <option>Cancelado</option>
                                    <option>Devolucion Aceptada</option>
                                    <option>Devolucion Cancelada</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <h4><small class="fecha">$100 </small></h4>
                            </div>
                        

                        <div class="col-sm-1">
                            <button class="boton_editar-AdminPedidos"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                        </div>
                        <div class="col-sm-1">
                            <button class=boton_guardar-AdminPedidos><i class="fa fa-floppy-o"></i></button>
                        </div>
                        <div class="col-sm-1">
                            <button class="boton_eliminar-AdminPedidos"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </div>
                        
                    </div>
                    <hr>
                    <div class="row">
                        <a href="#" class="">

                            <div class="col-sm-2">
                                <h4><small>002</small></h4>
                            </div>

                            <div class="col-sm-2">
                                <h4><small class="fecha">22/06/2019</small></h4>
                            </div>
                            <div class="col-sm-2">
                                <select class="col-sm-2 form-control">
                                    <option>Pendiente</option>
                                    <option>Enviando</option>
                                    <option>Cancelado</option>
                                    <option>Devolucion Aceptada</option>
                                    <option>Devolucion Cancelada</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <h4><small class="fecha">$100 </small></h4>
                            </div>
                        </a>

                        <div class="col-sm-1">
                            <button class="boton_editar-AdminPedidos"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                        </div>
                        <div class="col-sm-1">
                            <button class=boton_guardar-AdminPedidos><i class="fa fa-floppy-o"></i></button>
                        </div>
                        <div class="col-sm-1">
                            <button class="boton_eliminar-AdminPedidos"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        </div>
                        
                    </div>
                    <hr>
                </div>
            </div>	
		</div>
	</div>
</div>
</div>
</main>

@endsection