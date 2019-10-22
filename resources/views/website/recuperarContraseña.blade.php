@extends('website.layout.default')

@section('titulo', 'Recuperar Contraseña')

@section("contenido")

<br>
 <div class="container">
    <div class="row">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card card-signin flex-row my-5 bloque-registro">
          <div class="imagen-recuperarContra d-none d-md-flex">

          </div>
          <div class="card-body">
            <h5 class="card-title text-center">Recuperar Contraseña</h5>
            <h6>Ingresa el correo electrónico que registraste</h6>
            
            <form class="form-signin">
             

              <div class="form-label-group">
                <input type="email" id="correo" class="form-control" placeholder="Correo electrónico" required>
                <label for="correo">Correo electrónico</label>
              </div>
              
              
              

              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Enviar</button>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection