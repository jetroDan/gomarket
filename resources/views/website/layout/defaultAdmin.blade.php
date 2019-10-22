<!DOCTYPE HTML>
<html lang="es">
<head>
<title>@yield('titulo') | {{ config("app.name") }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href=/assets/cssAdmin/bootstrap.min.css rel='stylesheet' type='text/css'/>
<!-- Custom Theme files -->
<link href="/assets/cssAdmin/style.css" rel='stylesheet' type='text/css' />
<link href="/assets/cssAdmin/font-awesome.css" rel="stylesheet"> 
<script src="/assets/jsAdmin/jquery.min.js"> </script>
<!-- Mainly scripts -->
<script src="/assets/jsAdmin/jquery.metisMenu.js"></script>
<script src="/assets/jsAdmin/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="/assets/cssAdmin/custom.css" rel="stylesheet">
<script src="/assets/jsAdmin/custom.js"></script>
<script src="/assets/jsAdmin/screenfull.js"></script>
<script src="/assets/jsAdmin/Chart.js"></script>    
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});
			

			
		});
		</script>

<!----->

<!--pie-chart--->
<script src="/assets/jsAdmin/pie-chart.js" type="text/javascript"></script>
 <script type="text/javascript">

        $(document).ready(function () {
            $('#demo-pie-1').pieChart({
                barColor: '#3bb2d0',
                trackColor: '#eee',
                lineCap: 'round',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-2').pieChart({
                barColor: '#fbb03b',
                trackColor: '#eee',
                lineCap: 'butt',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

            $('#demo-pie-3').pieChart({
                barColor: '#ed6498',
                trackColor: '#eee',
                lineCap: 'square',
                lineWidth: 8,
                onStep: function (from, to, percent) {
                    $(this.element).find('.pie-value').text(Math.round(percent) + '%');
                }
            });

           
        });

    </script>
<!--skycons-icons-->
<script src="/assets/jsAdmin/skycons.js"></script>
<!--//skycons-icons-->

</head>
<body>
<div id="wrapper">

<!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
             <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <h1> <a class="navbar-brand" href="/homeAdmin">G-GDL Admin</a></h1>         
			   </div>
			 <div class=" border-bottom">
        	<div class="full-left">
        	  
			<form class=" navbar-left-right">
              <input type="text"  value="Buscar..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search...';}">
              <input type="submit" value="" class="fa fa-search">
            </form>
            <div class="clearfix"> </div>
           </div>
     
       
            <!-- Brand and toggle get grouped for better mobile display -->
		 
		   <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="drop-men" >
		        <ul class=" nav_1">
		           
		    		<li class="dropdown at-drop">
		              <a href="#" class="dropdown-toggle dropdown-at " data-toggle="dropdown"><i class="fa fa-globe"></i> <span class="number">5</span></a>
		              <ul class="dropdown-menu menu1 " role="menu">
		                <li><a href="#">
		               
		                	<div class="user-new">
		                	<p>Nuevo usuario registrado</p>
		                	<span>Hace 40 minutos</span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-user-plus"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                	</a></li>
		                
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>Gustavo canceló un pedido</p>
		                	<span>Hace 4 horas</span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-times"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>El estatus  del servidor es estable</p>
		                	<span>Ayer a las  08:30 am</span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-info"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#">
		                	<div class="user-new">
		                	<p>Nuevos pedidos esperan aprovación</p>
		                	<span>Semana pasada</span>
		                	</div>
		                	<div class="user-new-left">
		                
		                	<i class="fa fa-rss"></i>
		                	</div>
		                	<div class="clearfix"> </div>
		                </a></li>
		                <li><a href="#" class="view">Ver todos los mensajes</a></li>
		              </ul>
		            </li>
					<li class="dropdown">
		              <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span class=" name-caret">Abraham<i class="caret"></i></span><img src="/assets/images/imgAdmin/wo.jpg"></a>
		              <ul class="dropdown-menu " role="menu">
		                <li><a href="editarAdmin/"><i class="fa fa-user"></i>Editar Perfíl</a></li>
		                <li><a href="inbox.html"><i class="fa fa-envelope"></i>Inbox</a></li>
		                <li><a href="calendar.html"><i class="fa fa-calendar"></i>Calendario</a></li>
		                <li><a href="inbox.html"><i class="fa fa-clipboard"></i>Tareas</a></li>
		                <li><a href="/"><i class="fa fa-sign-out">
		                
		                </i>Salir</a></li>
		              </ul>
		            </li>
		           
		        </ul>
		     </div><!-- /.navbar-collapse -->
			<div class="clearfix">
       
     </div>
	  
		    <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
				
                    <li>
                        <a href="/homeAdmin" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                    </li>
                   
                    
                    
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-shopping-basket nav_icon" aria-hidden="true"></i> <span class="nav-label">Artículos</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-search nav_icon"></i>Buscar artículo</a></li>
                           
                            <li><a href="#" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Alta artículo</a></li>
                            
                            <li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Editar artículo</a></li>
			
						<li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Eliminar artículo</a></li>

					   </ul>
                    </li>
                    
                    <li>
                        <a href="/AdminPedidos" class=" hvr-bounce-to-right"><i class="fa fa-shopping-cart nav_icon" aria-hidden="true"></i><span class="nav-label">Pedidos</span></a>
                        
                    </li>
                    
                    
                    
					 <li>
                        <a href="inbox.html" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Newsletter</span> </a>
                    </li>
                    
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Promociones</span> </a>
                    </li>
                    
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i> <span class="nav-label">Reportes</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/graficas" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Graphs</a></li>
                            
                            <li><a href="#" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Inventario</a></li>
                            
                            <li><a href="#" class=" hvr-bounce-to-right"> <i class="fa fa-file-text-o nav_icon"></i>Por surtir</a></li>
                            
					   </ul>
                    </li>
                    
<!--                    
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span class="nav-label">Menu Levels</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="/graficas" class=" hvr-bounce-to-right"> <i class="fa fa-area-chart nav_icon"></i>Graphs</a></li>
                            
                            <li><a href="maps.html" class=" hvr-bounce-to-right"><i class="fa fa-map-marker nav_icon"></i>Maps</a></li>
			
						<li><a href="typography.html" class=" hvr-bounce-to-right"><i class="fa fa-file-text-o nav_icon"></i>Typography</a></li>

					   </ul>
                    </li>
                    
                    
                    <li>
                        <a href="gallery.html" class=" hvr-bounce-to-right"><i class="fa fa-picture-o nav_icon"></i> <span class="nav-label">Gallery</span> </a>
                    </li>
                     <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">Pages</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="404.html" class=" hvr-bounce-to-right"> <i class="fa fa-info-circle nav_icon"></i>Error 404</a></li>
                            <li><a href="faq.html" class=" hvr-bounce-to-right"><i class="fa fa-question-circle nav_icon"></i>FAQ</a></li>
                            <li><a href="blank.html" class=" hvr-bounce-to-right"><i class="fa fa-file-o nav_icon"></i>Blank</a></li>
                       </ul>
                    </li>
                     <li>
                        <a href="layout.html" class=" hvr-bounce-to-right"><i class="fa fa-th nav_icon"></i> <span class="nav-label">Grid Layouts</span> </a>
                    </li>
                   
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-list nav_icon"></i> <span class="nav-label">Forms</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="forms.html" class=" hvr-bounce-to-right"><i class="fa fa-align-left nav_icon"></i>Basic forms</a></li>
                            <li><a href="validation.html" class=" hvr-bounce-to-right"><i class="fa fa-check-square-o nav_icon"></i>Validation</a></li>
                        </ul>
                    </li>
                   
                    <li>
                        <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-cog nav_icon"></i> <span class="nav-label">Settings</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="signin.html" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Signin</a></li>
                            <li><a href="signup.html" class=" hvr-bounce-to-right"><i class="fa fa-sign-in nav_icon"></i>Singup</a></li>
                        </ul>
                    </li>
-->                    
                </ul>
            </div>
			</div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
        
        <main>
            @yield('contenido')
        </main>
       
		
		<div class="copy">
            <p> &copy; 2018 TECNOGO. Todos los derechos reservados .</p>
	    </div>
		<div class="clearfix"> </div>
       </div>
     </div>
<!---->
<!--scrolling js-->
	<script src="/assets/jsAdmin/jquery.nicescroll.js"></script>
	<script src="/assets/jsAdmin/scripts.js"></script>
	<!--//scrolling js-->
	<script src="/assets/jsAdmin/bootstrap.min.js"> </script>
</body>
</html>
