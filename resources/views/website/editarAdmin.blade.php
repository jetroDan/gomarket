@extends('website.layout.defaultAdmin')

@section('titulo', 'Editar perfil')

@section("contenido")
 <div class="content-main">
 
 	<!--banner-->	
		    <div class="banner">
		    	<h2>
				<a href="/">Inicio</a>
				<i class="fa fa-angle-right"></i>
				<span>Perfil</span>
				</h2>
		    </div>
		<!--//banner-->
 	 <!--gallery-->
 	 <div class=" profile">

		<div class="profile-bottom">
			<h3><i class="fa fa-user"></i>Perfil</h3>
			<div class="profile-bottom-top">
                <div class="col-md-4 profile-bottom-img">
                    <img src="/assets/images/imgAdmin/pr.jpg" alt="">
                    
              
                </div>
			    <div class="col-md-8 profile-text">
				    <h6>Eduardo Razo</h6>
				    <table>
                        <div class="form-group">
                            <label for="usuarioAdmin">Usuario</label>
                            <input type="text" class="form-control" id="usuarioAdmin" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">Correo</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
                        </div>
                        <div class="form-group">
                            <label for="ContrasenaAdmin">Contraseña</label>
                            <input type="password" class="form-control" id="ContrasenaAdmin" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label for="ContrasenaAdmin" >Nueva Contraseña</label>
                            <input type="password" disabled="" class="form-control" id="ContrasenaAdmin" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label for="ContrasenaAdmin">Repite Contraseña</label>
                            <input type="password" disabled="" class="form-control" id="ContrasenaAdmin" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <label for="selector1" >Tipo de cuenta</label>
                        
                                <select name="selector1" id="selector1" class="form-control1">
                                    <option>Administrador</option>
                                    <option>Empleado</option>

                                </select>
                         
				        </div>
                       
                        <div class="form-group">
                            <label for="ContrasenaAdmin">RFC</label>
                            <input type="password"  class="form-control" id="ContrasenaAdmin" placeholder="RFC" >
                        </div>
                  
				    </table>
			    </div>
			    <div class="clearfix"></div>
                      <div class="col-md-12 profile-text">
                   <div class="form-group">
                        <label for="cambiarImagen">Cambiar imagen</label>
                            <input type="file" id="cambiarImagen">
                           
                         </div>
                    <div class="profile-btn col-md-4">
                        <button type="button" href="#" class="btn bg-red">Cancelar</button>
                        <div class="clearfix"></div>
			        </div>
                    <div class="profile-btn col-md-4">
                        <button type="button" href="#" class="btn bg-red">Editar</button>
                        <div class="clearfix"></div>
			        </div> 
                    <div class="profile-btn col-md-4">
                        <button type="button" href="#" class="btn bg-red">Guardar</button>
                        <div class="clearfix"></div>
			        </div>     
                    
                </div> 
                <div class="clearfix"></div>
			</div>
<!--			
			<div class="profile-bottom-bottom">
			<div class="col-md-4 profile-fo">
				<h4>23,5k</h4>
				<p>Followers</p>
				<a href="#" class="pro"><i class="fa fa-plus-circle"></i>Follow</a>
			</div>
			<div class="col-md-4 profile-fo">
				<h4>348</h4>
				<p>Following</p>
				<a href="#" class="pro1"><i class="fa fa-user"></i>View Profile</a>
			</div>
			<div class="col-md-4 profile-fo">
				<h4>23,5k</h4>
				<p>Snippets</p>
				<a href="#"><i class="fa fa-cog"></i>Opciones</a>
			</div>
			
			<div class="clearfix"></div>
			</div>
-->			
			
			
			 
			
		</div>
	</div>
</div>
@endsection