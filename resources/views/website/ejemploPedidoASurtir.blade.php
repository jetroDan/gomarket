@extends('website.layout.defaultAdmin')

@section('titulo', 'Detalle Pedido')

@section("contenido")
<main class="content-main">
<!--banner-->	
       <div class="banner">
            <h2>
            <a href="/homeAdmin">Inicio</a>
            <i class="fa fa-angle-right"></i>
            <a href="/AdminPedidos">Pedidos</a>
            <i class="fa fa-angle-right"></i>
            <span>Detalle Pedido a Surtir</span>
            </h2>
        </div>
<!--//banner-->
    <div class="banner">
   
        <div class="container bloque-detalle">
            <div class="row">
                <div class="col-sm-10 col-md-9 col-lg-11 ">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <div class="row">
                                    <div class="col-sm-10 titulo-detalle" >
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
                        </div><!--.panel-heading-->


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
                        </div>
                    </div>	
                </div>
            </div>
            
            <div class="row">
		<div class="col-sm-10 col-md-9 col-lg-11"><!--Contenido detalle producto-->
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-sm-12 titulo-detalle" >
								<h4><span class=""></span> Detalle de pedido</h4>
							</div>
							
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						
						<div class="col-sm-4">
							<h4 class="product-name"><strong>Id Pedido</strong></h4><h4><small>001</small></h4>
						</div>
						
						<div class="col-sm-4">
							<h4 class="product-name"><strong>Fecha</strong></h4><h4><small class="fecha">22/06/2019</small></h4>
						</div>
						<div class="col-sm-4">
							<h4 class="product-name"><strong>Estatus</strong></h4><h4><small class="fecha">Pendiente</small></h4>
						</div>
					</div>
                   
                    <hr>
                    
                    <div class="row">

                        <div class="col-sm-4">
                            <h4 class="product-name"><strong>Tipo Pedido</strong></h4><h4><small>Por carrito</small></h4>
                        </div>
                        <div class="col-sm-4">
                            <h4 class="product-name"><strong>Tipo Pago</strong></h4><h4><small>En efectivo</small></h4>
                        </div>	
                        <div class="col-sm-4">
                            <h4 class="product-name"><strong>Tipo Envío</strong></h4><h4><small>A domicilio</small></h4>
                        </div>	
                    </div>	
                    	
					<hr>
					
					<div class="row">
						<div class="col-sm-12">
							<h4 class="product-name"><strong>Dirección</strong></h4><h4><small>Santa luz 19 </small></h4>
						</div>						
                    </div>
                </div>					
            </div>	
		</div>
		
		<div class="col-sm-10 col-md-9 col-lg-11">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-sm-12 titulo-detalle" >
								<h4><span class=""></span> Productos</h4>
							</div>
							
						</div>
					</div>
				</div>
				
				
				<div class="panel-body">
                        
						<div class="col-sm-3 producto-centrado">
							<h4 class="product-name"><strong>Cerveza Heineken</strong></h4>
						</div>
						<div class="col-sm-4 producto-centrado">
							<h4 class="product-name"><strong><span class="text-muted">Heineken clara de 360 ml</span></strong></h4>
						</div>
						<div class="col-sm-5 precio-piezas-centrado">
						    <div class="col-sm-4 text-center precio">
								<h4><strong>CERVHEIN0190</strong></h4>
							</div>
							<div class="col-sm-4 text-center precio">
								<h4><strong>$16.00 </strong></h4>
							</div>
							<div class="col-sm-2 text-center precio">
								<h4><strong>2</strong></h4>
							</div>
                            <div class="col-sm-2 text-center precio">
								<h4><strong><span class="text-muted">pzs</span></strong></h4>
							</div>
														
						</div>
						
                </div>
                <hr>
              
                <div class="panel-footer">
                        <div class="row text-center">
                            <div class="col-sm-12">
                                <h4 class="text-right">Total <strong>$40.90</strong></h4>
                            </div>

                        </div>
                </div>						
            </div>
				
		</div>
	</div>
        </div><!--.bloque-detalle-->
    </div><!--.contenedor banner-->
</main>

@endsection