@extends('website.layout.default')

@section('titulo', 'Productos')

@section("contenido")

<section style="padding-top: 100px;">
    <div class="bg0 m-t-23 p-b-140">
		<div class="container">
			<div class="flex-w flex-sb-m p-b-52">

				<div class="flex-w flex-c-m m-tb-10">
					<div class="flex-c-m stext-106 cl6 size-104 bor4 pointer hov-btn3 trans-04 m-r-8 m-tb-4 js-show-filter">
						<i class="icon-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-filter-list"></i>
						<i class="icon-close-filter cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						 Filtrar
					</div>

					<div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-4 js-show-search">
						<i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
						<i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
						Buscar
					</div>
				</div>
				
				<!-- Search product -->
				<div class="dis-none panel-search w-full p-t-10 p-b-15">
					<form class="bor8 dis-flex p-l-15">
						<button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
							<i class="zmdi zmdi-search"></i>
						</button>

						<input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="s" placeholder="Buscar...">
					</form>	
				</div>

				<!-- Filter -->
				<div class="dis-none panel-filter w-full p-t-10">
					<div class="wrap-filter flex-w bg6 w-full p-lr-40 p-t-27 p-lr-15-sm">
                        
                        <div class="filter-col2 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Categorias
							</div>

							<ul>
								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04 filter-link-active">
										Todas
									</a>
								</li>

								<li class="p-b-6">
									<a href="#" class="filter-link stext-106 trans-04">
										Tecnología
									</a>
								</li>
							</ul>
						</div>

                        
						<div class="filter-col1 p-r-15 p-b-27">
							<div class="mtext-102 cl2 p-b-15">
								Ordenar por
							</div>

							<ul>
								

								<li class="p-b-6">
									<a href="/productos/menor-mayor" class="filter-link stext-106 trans-04">
										Precio: Menor a Mayor
									</a>
								</li>

								<li class="p-b-6">
									<a href="/productos/mayor-menor" class="filter-link stext-106 trans-04">
										Precio: Mayor a Menor
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
    
            <div class="row">
          @foreach($productos as $producto)
            
                <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                    <!-- Block2 -->
                    <div class="block2">
                        <div class="block2-pic hov-img0">
                            <img  src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}" >

                            <a href="/{{ $producto->SKU }}/{{ $producto->id}}" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 color-verProducto " >
                                Ver producto 
                            </a>
                        </div>

                        <div class="block2-txt flex-w flex-t p-t-14">
                            <div class="block2-txt-child1 flex-col-l ">
                                <a href="/{{ $producto->SKU }}/{{ $producto->id}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                   {{ $producto->nombre }}
                                </a>

                                <span class="stext-105 cl3">
                                   ${{ number_format($producto->precioVenta, 2) }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            
             @endforeach
             <div class="col-sm-12">
                 {{ $productos->links() }}
             </div>
            </div>
            
		</div>
    </div>
</section>

@endsection