@extends('website.layout.default')

@section('titulo', 'Carrito')

@section("contenido")
<form class="bg0 p-t-75 p-b-85">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tbody><tr class="table_head">
									<th class="column-1">Producto</th>
									<th class="column-2"></th>
									<th class="column-3">Precio</th>
									<th class="column-4">Cantidad</th>
									<th class="column-5">Total</th>
								</tr>
                            @foreach(\App\Models\Carrito::myCart()->get() as $producto)
								<tr class="table_row">
								
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="{{ $producto->articulo->imagen }}" alt="{{ $producto->articulo->nombre }}">
										</div>
									</td>
									<td class="column-2">{{ $producto->articulo->nombre }}</td>
									<td class="column-3">${{ number_format($producto->articulo->precioVenta, 2) }}</td>
									<td class="column-4">
										<div class="wrap-num-product flex-w m-l-auto m-r-0">
											<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-minus"></i>
											</div>

											<input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product1" value="{{ $producto->cantidad }}">

											<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
												<i class="fs-16 zmdi zmdi-plus"></i>
											</div>
										</div>
									</td>
									<td class="column-5">${{ number_format($producto->articulo->precioVenta * $producto->cantidad, 2) }}</td>
								</tr>
								@endforeach

							</tbody></table>
						</div>


					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Total Carrito
						</h4>

						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									Total: ${{ number_format(\App\Models\Carrito::getTotal(), 2) }}
								</span>
							</div>
						</div>
                  
                        
                        <div class="flex-w flex-t bor12 p-t-27 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Descuentos:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									$0
								</span>
							</div>
						</div>

         
						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									Total: ${{ number_format(\App\Models\Carrito::getTotal(), 2) }}
								</span>
							</div>
						</div>
                        
                        

						<a href="/pedido" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Comprar
						</a>
					</div>
				</div>
			</div>
		</div>
	</form>



@endsection
