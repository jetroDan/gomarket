@extends('website.layout.default')

@section('titulo', 'Inicio Sesión Administrador')

@section("contenido")

<br>
 <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5 bloque-registro">
          <div class="img-loginAdmin d-none d-md-flex">

          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Administrador</h5>
            <h5 class="card-title text-center">Inicio sesión</h5>
            
            <form class="form-signin-admin">
                  <div class="form-label-group">
                    <input  id="cuentaAdmin" class="form-control" placeholder="Cuenta" required>
                    <label for="cuentaAdmin">Id ó Cuenta Administrador</label>
                  </div>

                  <div class="form-label-group">
                    <input type="password" id="cuentaAdmin" class="form-control" placeholder="Contraseña" required>
                    <label for="contrasenaAdmin">Contraseña</label>
                  </div>
                
                  <a href="/homeAdmin">  
                    <button href="/homeAdmin" class="btn btn-lg btn-primary btn-block text-uppercase" type="button">Entrar</button>
                  </a>  
                  
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection