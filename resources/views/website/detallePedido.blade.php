@extends('website.layout.default')

@section('titulo', 'Detalle pedido')

@section("contenido")


<div class="container bloque-detalle">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-sm-12 titulo-detalle" >
								<h5><span class=""></span> Detalle de pedido</h5>
							</div>
							
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						
						<div class="col-sm-4">
							<h4 class="product-name"><strong>Id Pedido</strong></h4><h4><small>{{ $pedido->id}}</small></h4>
						</div>
						
						<div class="col-sm-4">
							<h4 class="product-name"><strong>Fecha</strong></h4><h4><small class="fecha">{{$pedido->domicilio->fechaEntrega}}</small></h4>
						</div>
						<div class="col-sm-4">
							<h4 class="product-name"><strong>Estatus</strong></h4><h4><small class="fecha">{{ $pedido->estado }}</small></h4>
						</div>
					</div>
                   
                    <hr>
                    
                    <div class="row">

                        <div class="col-sm-4">
                            <h4 class="product-name"><strong>Tipo Pedido</strong></h4><h4><small>{{ $pedido->tipoPedido}}</small></h4>
                        </div>
                        <div class="col-sm-4">
                            <h4 class="product-name"><strong>Tipo Pago</strong></h4><h4><small>{{ $pedido->tipoPago}}</small></h4>
                        </div>	
                        <div class="col-sm-4">
                            <h4 class="product-name"><strong>Tipo Envío</strong></h4><h4><small> {{ $pedido->tipoEnvio}}</small></h4>
                        </div>	
                    </div>	
                    	
					<hr>
					
					<div class="row">
						<div class="col-sm-12">
							<h4 class="product-name"><strong>Dirección</strong></h4><h4><small>{{ $pedido->domicilio->domicilio}}</small></h4>
						</div>						
                    </div>
                </div>					
            </div>	
		</div>
		
		<div class="col-sm-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-sm-12 titulo-detalle" >
								<h5><span class=""></span> Productos</h5>
							</div>
							
						</div>
					</div>
				</div>
				
				@foreach($pedido->articulos as $articulo)
				<div class="panel-body">
                        <div class="col-sm-2"><img class="img-responsive" src="{{$articulo->articulo->imagen}}">
                        </div>
						<div class="col-sm-6 producto-centrado">
							<h4 class="product-name"><strong>{{$articulo->articulo->nombre}}</strong></h4><h4><small>{{$articulo->articulo->descripcion}}</small></h4>
						</div>
						
						<div class="col-sm-4 precio-piezas-centrado">
							<div class="col-sm-7 text-center precio">
								<h6><strong>${{number_format($articulo->articulo->precioVenta, 2)}} <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-sm-5">
								<input type="text" class="form-control input-sm" readonly value="{{$articulo->cantidad}}">
							</div>							
						</div>
						
                </div>
                <hr>
                @endforeach
                <div class="panel-footer">
                        <div class="row text-center">
                            <div class="col-sm-12">
                                <h4 class="text-right">Total <strong>${{number_format($pedido->total, 2) }}</strong></h4>
                            </div>

                        </div>
                </div>						
            </div>
				
		</div>
	</div>
</div>
@endsection