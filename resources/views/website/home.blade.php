@extends('website.layout.default')

@section('titulo', 'Inicio')

@section("contenido")

    <section class="section-slide">
		<div class="wrap-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(/assets/images/slide11.png);">
				</div>
				<div class="item-slick1" style="background-image: url(/assets/images/slide13.png);">
				</div>
				<div class="item-slick1" style="background-image: url(/assets/images/slide-03.jpg);">
				</div>
			</div>
		</div>
	</section>
	<section>
<!--  //1ra  -->
    <div class="row">
       @foreach($categorias as $categoria)
            <div class="col-md-6 col-lg-4 p-b-30 m-lr-auto">
                <!-- Block1 -->
                <div class="block1 wrap-pic-w categoria-item">
                    <img src="{{ $categoria->imagen }}" alt="{{ $categoria->nombre }}">
                    <a href="/productos/{{ $categoria->slug }}" class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
                        <div class="block1-txt-child1 categoria flex-col-l">
                            <span class="block1-name ltext-102 trans-04 p-b-8">
                                {{ $categoria->nombre }}
                            </span>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
   <br><br>
    <div class="titulo-nosotros section-header wow fadeInc"><!--Nosotros-->
    <center>
  <b><h2>NOSOTROS</h2></b>
   <span class="section-divider"></span>
    <br>
    <div class="" >
      <img src="/assets/images/nosotros.jpg" class="img-fluid" height="900px" width="900px" alt="Responsive image">

    </div>
    <br><br>

    </center>
    <div class="row">
     <div class="col-6 col-md-1"></div>
     <div class="col-6 col-md-10 conf-texto-nosotros" ><p><h3>GoMarket GDL establece una nueva revolución en ventas de supermercado por internet, por medio de un nuevo concepto de marketing estructurado para surtir tu lista del súper de la manera más segura, fácil y rápida.</h3></p></div>
     <div class="col-6 col-md-1"></div>
   </div>
  </div>
</div>



    </div><!---Fin nosotroso-->
    <br><br>





<!-- #features -->
<!-- Team -->
<section class="bg-light" id="team">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center titulo-servicios section-header wow fadeInc">
        <h2 class="section-heading text-uppercase titulo-servicios ">Servicios</h2>
        <span class="section-divider"></span>
        <h3 class="section-subheading text-muted"></h3>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="/assets/images/compras.png" alt="">
            <i><a href="#" class="titulos-servicios"><b><h3>Apartado en tienda</h3></b></a></i>
          <p class="text-muted"><h3>Es la opción para aprovechar una salida, y evitar el
             disgusto de visitar una tienda y no encontrar lo que buscabas, además de ser una opción más económica.</h3></p>

        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="/assets/images/camion.png" alt="">
          <i><a href="#" class="titulos-servicios"><b><h3>Servicio a domicilio</h3></b></a></i>

          <p class="text-muted"><h3>Con la forma más sencilla e intuitiva de hacer tu lista de compras de mercado,
             te llevamos lo que necesites a donde lo solicites. En efectivo o con cargo a tu cuenta Paypal..¡Tu decides!</h3></p>

        </div>
      </div>
      <div class="col-sm-4">
        <div class="team-member">
          <img class="mx-auto rounded-circle" src="/assets/images/tarea.png" alt="">
          <i><a href="#" class="titulos-servicios"><b><h3>Cotizaciones</h3></b></a></i>
          <p class="text-muted"><h3>Ofrecemos la cotización más atractiva del mercado para cuando organices un evento
             y necesites suministros al mejor precio. ¿Entre más bueno y barato, mejor no? </h3></p>

        </div>
      </div>
    </div>

  </div>
</section><!-- Team -->

  <!-- #features -->


  <section id="features">
    <div class="container">

      <div class="row">
        <div class="col-lg-12 section-header wow fadeInc " data-wow-duration="1s">
                <h3 class="section-title titulo-movil">GOMARKET GDL MÓVIL</h3>
                <span class="section-divider"></span>  
            </div>   
        <div class="col-lg-12 offset-lg-4">
            
            <div class="row col-lg-12">

                <div class="col-lg-4 col-md-6 box wow fadeInRight efecto-deslizante">
                    <div class="icon">
                        <i class="ion-ios-speedometer-outline">  
                        <img src="/assets/images/descarga.png" height="65px" alt="" class="wow fadeInLeft"></i>
                    </div>
                    <h3 class="title"><a href=""></a></h3>
                    <p class="description"><h3>Pronto podrás descargar nuestra app móvil
                    para hacer tu lista de pedidos desde tu celular.</h3></p>
                </div>
                
                <div class="col-lg-4 col-md-6 box wow fadeInRight" data-wow-delay="0.1s">
                    <div class="icon"><i class="ion-ios-flask-outline"> <img src="/assets/images/app.png" height="65px" alt="" class="wow fadeInLeft"></i></div>
                    <h3 class="title"><a href=""></a></h3>
                    <p class="description"><h3>Podrás disfrutar de ventajas como notificaciones
                    de promociones y entrega de pedido.</h3>.</p>
                </div>
                
                <div class="col-lg-4 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                </div>
            
                
            </div>
            <div class="row col-lg-12">
                <div class="col-lg-4 col-md-6 box wow fadeInRight" data-wow-delay="0.2s">
                    <div class="icon"><i class="ion-social-buffer-outline"> <img src="/assets/images/dinero.svg" height="65px" alt="" class="wow fadeInLeft"></i></div>
                    <h3 class="title"><a href=""></a></h3>
                    <p class="description"><h3>Podrás realizar o consultar pagos, y hacer pedidos exprés desde donde estés.</h3></p>
                </div>
                <div class="col-lg-4 col-md-6 box wow fadeInRight" data-wow-delay="0.3s">
                    <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
                    <h3 class="title"><a href=""></a></h3>
                    <p class="description"><h2>ESPERALA PRONTO!!!</h2></p>
                </div>
              
                <div class="col-lg-4 col-md-5 features-img">
                    <img src="/assets/images/product.png" alt="" class="wow fadeInLeft">
                </div>
            </div>
         
            

          </div>
        </div>

        

      </div>

    </div>

  </section><!-- #features -->



</section>


@endsection

<section>

</section>