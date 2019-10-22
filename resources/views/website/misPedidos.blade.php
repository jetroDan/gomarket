@extends('website.layout.default')

@section('titulo', 'Mis pedidos')

@section("contenido")

<div class="container bloque-detalle">
	<div class="row">
		<div class="col-sm-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-sm-12 titulo-detalle" >
								<h5><span class=""></span> Mis pedidos</h5>
							</div>
                           
                           <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-3">    
                                <h4 class="product-name"><strong>Id Pedido</strong></h4>
                                   </div>
                                    <div class="col-sm-3">    
                                <h4 class="product-name"><strong>Fecha</strong></h4>
                                   </div>
                               <div class="col-sm-3">    
                                <h4 class="product-name"><strong>Estatus</strong></h4>
                                   </div>
                               <div class="col-sm-3">    
                                <h4 class="product-name"><strong>Total</strong></h4>
                                   </div>

                                </div>
							</div>
						</div>
					</div>
				</div>
				
				@foreach($pedidos as $pedido)
				<div class="panel-body">

					<a href="/detalle/Pedido/{{ $pedido->id}}" class="row">
                        					
						<div class="col-sm-3">    
							<h4><small>{{ $pedido->id}}</small></h4>
						</div>
						
						<div class="col-sm-3">
							<h4><small class="fecha">{{$pedido->domicilio->fechaEntrega}}</small></h4>
						</div>
						<div class="col-sm-3">
							<h4><small class="fecha">{{ $pedido->estado }}</small></h4>
						</div>
						<div class="col-sm-3">
							<h4><small class="fecha">${{number_format($pedido->total, 2) }}</small></h4>
						</div>
					
					</a>
                   
                    <hr>	
                    
                </div>	
                @endforeach				
            </div>	
		</div>
	</div>
</div>





@endsection