<!DOCTYPE html>
<html lang="es">
<head>
	<title>@yield('titulo') | {{ config("app.name") }}</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" type="image/png" href="/assets/images/icons/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/vendor/bootstrap/css/bootstrap3.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/fonts/linearicons-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="/assets/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="/assets/vendor/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="/assets/vendor/MagnificPopup/magnific-popup.css">
	<link rel="stylesheet" type="text/css" href="/assets/vendor/perfect-scrollbar/perfect-scrollbar.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/util.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/custom.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/agency.css"><!--se agrego-->
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css"><!--se agrego-->
    <link href="assets/animate/animate.min.css" rel="stylesheet">
  
</head>
<body class="animsition">
    <header>
		<div class="container-menu-desktop ">
			<div class="wrap-menu-desktop ">
				<nav class="limiter-menu-desktop container">	
					<a href="/" class="logo">
						<img src="/assets/images/icons/LogoGomarket1.png" alt="IMG-LOGO">
					</a>
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="/">Inicio</a>
							</li>

							<li>
								<a href="/productos">Productos</a>
							</li>
							<li>
								<a href="/contacto">Contacto</a>
							</li>
							<li>
					            <a href="/inicioSesionAdmin">Administrador</a>
				            </li>
						</ul>
					</div>
					
					<div class="wrap-icon-header flex-w flex-r-m">
                       @if(\App\Models\Cliente::getUser() == null)
                        <a href="javascript:;" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-login">
							<i class="zmdi zmdi-account-o"></i>
						</a>
                       @else
                           <div class="usuario-sesion">
                               <a href="javascript:;" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
                                   {{ \App\Models\Cliente::getUser()->nombre }}
                                
                                </a>
                                <ul class="desplegable">
                                   <li>
                                        <a href="/misPedidos">Mis pedidos</a>
                                    </li>
                                    <li>
                                        <a href="/cerrar-sesion">Cerrar sesión</a>
                                    </li>
                                </ul>
                           </div>
                           
                       @endif
                        
						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-search">
							<i class="zmdi zmdi-search"></i>
						</div>

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="{{ \App\Models\Carrito::myCart()->count() }}">
							<i class="zmdi zmdi-shopping-cart color-hover-carrito"></i>
						</div>

					</div>
				</nav>
			</div>	
		</div>
<!-- lo que me falló -->		
		<div class="wrap-header-mobile">	
			<div class="logo-mobile">
				<a href="index.html"><img src="/assets/images/icons/LogoGomarket1.png" alt="Logo GoMarkt"></a>
			</div>
			
			<div class="wrap-icon-header flex-w flex-r-m m-r-15">
			    @if(\App\Models\Cliente::getUser() == null)
                    <a href="javascript:;" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 js-show-modal-login config-icono-usuario">
                        <i class="zmdi zmdi-account-o"></i>
                    </a>
                   @else
                       <div class="usuario-sesion">
                           <a href="javascript:;" class="dis-block icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11">
                               {{ \App\Models\Cliente::getUser()->nombre }}

                            </a>
                            <ul class="desplegable">
                               <li>
                                    <a href="/misPedidos">Mis pedidos</a>
                                </li>
                                <li>
                                    <a href="/cerrar-sesion">Cerrar sesión</a>
                                </li>
                            </ul>
                       </div>

                @endif
                        
			
			
				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 js-show-modal-search">
					<i class="zmdi zmdi-search"></i>
				</div>

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-r-11 p-l-10 icon-header-noti js-show-cart " data-notify="{{ \App\Models\Carrito::myCart()->count() }}">
					<i class="zmdi zmdi-shopping-cart color-hover-carrito"></i>
				</div>
			</div>
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>
		<div class="menu-mobile">
			<ul class="main-menu-m">
				<li>
					<a href="/">Inicio</a>
				</li>
				<li>
					<a href="/productos">Productos</a>
				</li>
				<li>
					<a href="/contacto">Contacto</a>
				</li>
				<li>
					<a href="/">Administrador</a>
				</li>
			</ul>
		</div>
		<div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
			<div class="container-search-header">
				<button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
					<img src="/assets/images/icons/icon-close2.png" alt="CLOSE">
				</button>

				<form method="get" action="/productos" class="wrap-search-header flex-w p-l-15">
					<button class="flex-c-m trans-04">
						<i class="zmdi zmdi-search"></i>
					</button>
					<input class="plh3" type="text" name="s" placeholder="Buscar...">
				</form>
			</div>
		</div>
<!--  Modal inicio de sesion Usuario-->        
        @if(\App\Models\Cliente::getUser() == null)
        <div class="modal-login-header flex-c-m trans-04 js-hide-modal-login">
			<div class="container-login-header">
				<button class="flex-c-m btn-hide-modal-login trans-04 js-hide-modal-login">
					<img src="/assets/images/icons/icon-close2.png" alt="CLOSE">
				</button>
<!--  Form Usuario inicio de sesion-->
				<form id="inicio-sesion" class="wrap-login-header flex-w p-l-15">
                    
                    <div class="form-group title">
                        <h2>Bienvenido</h2>
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Correo electrónico">
                    </div>
            
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Contraseña">
                    </div>
                    
					<button type="submit">
						Iniciar sesión
					</button>
					
                    <ul class="options">
                        <li>
                            <a href="/registro">Registrarme</a>
                        </li>
                        <li>
                            <a class="last" href="/recuperarContrasena">Olvidé mi contraseña</a>
                        </li>
                    </ul>
                    
				</form>
			</div>
		</div>
       @endif


                            
	</header>
    <div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Carrito
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>
			
			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
                    @foreach(\App\Models\Carrito::myCart()->get() as $producto)
                        <li class="header-cart-item flex-w flex-t m-b-12">
                            <div class="header-cart-item-img">
                                <img src="{{ $producto->articulo->imagen }}" alt="{{ $producto->articulo->nombre }}">
                            </div>

                            <div class="header-cart-item-txt p-t-8">
                                <a href="/{{ $producto->articulo->SKU }}/{{ $producto->articulo->id}}" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
                                    {{ $producto->articulo->nombre }}
                                </a>

                                <span class="header-cart-item-info">
                                    {{ $producto->cantidad }} x ${{ number_format($producto->articulo->precioVenta, 2) }}
                                </span>
                            </div>
                        </li>
                    @endforeach
				</ul>
				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: ${{ number_format(\App\Models\Carrito::getTotal(), 2) }}
					</div>

					<div class="header-cart-buttons flex-w w-full" conf-boton-carrito>
						<a href="/carrito" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							Ver carrito
						</a>

						<a href="/pedido" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Comprar
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
    <main>
        @yield('contenido')
    </main>
    
    <footer class="bg3 p-t-75 p-b-32 footer">
		<div class="container contenedro-footer">
			<div class="row columnas-footer">
				<div class="direccion-footer col-sm-6 col-lg-3 p-b-50 ">
					<h4 class="stext-301 cl0 p-b-30">
						Menú
					</h4>

					<ul>
                        <li class="p-b-10">
							<a href="/" class="stext-107 cl7 hov-cl1 trans-04">
								Inicio
							</a>
						</li>
                        <li class="p-b-10">
							<a href="/" class="stext-107 cl7 hov-cl1 trans-04">
								Quiénes somos
							</a>
						</li>
						
						<li class="p-b-10">
							<a href="/productos" class="stext-107 cl7 hov-cl1 trans-04">
								Productos
							</a>
						</li>
						
						<li class="p-b-10">
							<a href="/productos" class="stext-107 cl7 hov-cl1 trans-04">
								Pedidos
							</a>
						</li>

						<li class="p-b-10">
							<a href="/contacto" class="stext-107 cl7 hov-cl1 trans-04">
								Cancelaciones
							</a>
						</li>
					</ul>
             </div>
              <div class="direccion-footer-2 col-sm-6 col-lg-3 p-b-50 ">
                    <ul>
                        
                        <li class="p-b-10">
							<a href="/contacto" class="stext-107 cl7 hov-cl1 trans-04">
								Tipo de pago
							</a>
						</li>
                        <li class="p-b-10">
							<a href="/productos" class="stext-107 cl7 hov-cl1 trans-04">
								Aviso de Privacidad
							</a>
						</li>
                        <li class="p-b-10">
							<a href="/" class="stext-107 cl7 hov-cl1 trans-04">
								Terminos y condiciones
							</a>
						</li>
                        <li class="p-b-10">
							<a href="/contacto" class="stext-107 cl7 hov-cl1 trans-04">
								Contacto
							</a>
						</li>
					</ul>
                    
                    
				</div>
                
				<div class="col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Dirección
					</h4>

					<p class="parrafo-direccion stext-107 cl7 size-201">
						Luis J. Jiménez 577, Colonia Primero de Mayo, C.P. 44979 Guadalajara, Jalisco, México
                        Teléfono: + 52 (33) 3030-0900
					</p>

					<div class="redes-footer p-t-27">
						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-whatsapp"></i>
						</a>

						<a href="#" class="fs-18 cl7 hov-cl1 trans-04 m-r-16">
							<i class="fa fa-twitter"></i>
						</a>
					</div> 
				</div>
				<div class="newsletter-footer col-sm-6 col-lg-3 p-b-50">
					<h4 class="stext-301 cl0 p-b-30">
						Newsletter
					</h4>

					<form>
						<div class="wrap-input1 w-full p-b-4">
							<input class="input1 bg-none plh1 stext-107 cl7 color-input-newsletter" type="text" name="email" placeholder="email@example.com">
							<div class="focus-input1 trans-04"></div>
						</div>

						<div class="p-t-18">
							<button class="flex-c-m stext-101 cl0 size-103 bg1 bor1 hov-btn2 p-lr-15 trans-04 color-hover">
								Suscribirme
							</button>
						</div>
					</form>
				</div>
			</div>

			<div class="p-t-40 icono-paypal-footer">
				<div class="flex-c-m flex-w p-b-18">
					<a href="#" class="m-all-1">
						<img src="/assets/images/icons/icon-pay-01.png" alt="ICON-PAY">
                    </a>
				</div>
			</div>
		</div>
	</footer>
    
    
    <script src="/assets/vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="/assets/vendor/jquery/jquery3-1.11.1.min"></script>
	<script src="/assets/vendor/animsition/js/animsition.min.js"></script>
	<script src="/assets/vendor/bootstrap/js/popper.js"></script>
	<script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/assets/vendor/bootstrap/js/bootstrap3.min.js"></script>
	<script src="/assets/vendor/select2/select2.min.js"></script>
	<script>
        
        
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });

        
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
	</script>
	<script src="/assets/vendor/daterangepicker/moment.min.js"></script>
	<script src="/assets/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="/assets/vendor/slick/slick.min.js"></script>
	<script src="/assets/js/slick-custom.js"></script>
	<script src="/assets/vendor/parallax100/parallax100.js"></script>
	<script>
        $('.parallax100').parallax100();
	</script>
	<script src="/assets/vendor/MagnificPopup/jquery.magnific-popup.min.js"></script>
	<script>
		$('.gallery-lb').each(function() {
			$(this).magnificPopup({
		        delegate: 'a',
		        type: 'image',
		        gallery: {
		        	enabled:true
		        },
		        mainClass: 'mfp-fade'
		    });
		});
	</script>
	<script src="/assets/vendor/isotope/isotope.pkgd.min.js"></script>
	<script src="/assets/vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});

		/*---------------------------------------------*/

	
	</script>
	<script src="/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			$(this).css('position','relative');
			$(this).css('overflow','hidden');
			var ps = new PerfectScrollbar(this, {
				wheelSpeed: 1,
				scrollingThreshold: 1000,
				wheelPropagation: false,
			});

			$(window).on('resize', function(){
				ps.update();
			})
		});
	</script>
	<script src="/assets/js/main.js"></script>
	<script src="/assets/js/registro.js"></script>
</body>
</html>