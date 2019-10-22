@extends('website.layout.default')

@section('titulo', 'Registrar')

@section("contenido")


  <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5 bloque-registro">
          <div class="card-img-left d-none d-md-flex">
             <!-- Background image for card set in CSS! -->
          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Crear cuenta</h5>
            <form id="formRegistro" class="form-signin">
              <div class="form-label-group">
                <input type="text" id="nombreUsuario" class="form-control" placeholder="Nombre" required autofocus name="nombre">
                <label for="nombreUsuario">Nombre</label>
              </div>

              <div class="form-label-group">
                <input type="text" id="apellidoP" name="apellidoP" class="form-control" placeholder="Apellido paterno" required>
                <label for="apellidoP">Apellido paterno</label>
              </div>
              
              <div class="form-label-group">
                <input type="text" id="apellidoM" class="form-control" placeholder="Apellido materno" required name="apellidoM">
                <label for="apellidoM">Apellido materno</label>
              </div>          
                            
              <hr>

              <div class="form-label-group">
                <input type="email" id="correo" class="form-control" placeholder="Correo electrónico" required name="correo">
                <label for="correo">Correo electrónico</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="contrasena" class="form-control" placeholder="Contraseña (8 caracteres mínimo)" required name="contrasena">
                <label for="contrasena">Contraseña (8 caracteres mínimo)</label>
              </div>
              
              <div class="form-label-group">
                <input type="password" id="confirmarContraseña" class="form-control" placeholder="Confirma contraseña" required name="contrasenaC">
                <label for="confirmarContraseña">Confirma contraseña</label>
              </div>

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Crear cuenta</button>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection