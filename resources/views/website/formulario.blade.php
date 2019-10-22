@extends('website.layout.default')

@section('titulo', 'Detalle Producto')

@section("contenido")
<section style="padding-top: 60px;">

    <br><br><br><br>
    <section>
        <form>
            <div class="container">
                <h2>DATOS PERSONALES</h2>

                <center>
                    <!--
                  <div class="container">

                  <div class="row">
                    <div class="col">
                      <label for="">Correo electrònico</label>
                      <input type="email" class="form-control" placeholder="" required="on">
                    </div>
                    <div class="col">
                      <label for="">Contraseña anterior</label>
                      <input type="password" class="form-control" placeholder="" required="on">
                    </div>
                    <div class="col">
                      <label for="">Contraseña nueva</label>
                      <input type="password" class="form-control" placeholder="" required="on">
                    </div>
                  </div>
                </div>
            -->

                    <div class="row">
                        <div class="col">
                            <label for="">Correo electrónico*</label>
                            <input type="name" class="form-control" placeholder="" required="on">
                        </div>
                        <div class="col">
                            <label for="">Contraseña anterior*</label>
                            <input type="text" class="form-control" placeholder="" required="on">
                        </div>
                        <div class="col">
                            <label for="">Contraseña nueva*</label>
                            <input type="text" class="form-control" placeholder="" required="on">
                        </div>
                        <div class="col">
                            <label for="">ID Clinte*</label>
                            <input type="text" class="form-control" placeholder="" required="on">
                        </div>

                    </div>
                    <br><br>
                </center>

                <center>

                    <div class="row">
                        <div class="col">
                            <label for="">Nombre*</label>
                            <input type="name" class="form-control" placeholder="" required="on">
                        </div>
                        <div class="col">
                            <label for="">Apellido paterno*</label>
                            <input type="text" class="form-control" placeholder="" required="on">
                        </div>
                        <div class="col">
                            <label for="">Apellido materno*</label>
                            <input type="text" class="form-control" placeholder="" required="on">
                        </div>
                        <div class="col">
                            <label for="">Teléfono*</label>
                            <input type="phone" class="form-control" placeholder="" required="on">
                        </div>


                    </div>
                    <br>

                    <div class="row">

                        <div class="col">
                            <label for="">Curp*</label>
                            <input type="text" class="form-control" placeholder="" required="on">
                        </div>
                        <div class="col">
                            <label for="">RFC*</label>
                            <input type="text" class="form-control" placeholder="" required="on">
                        </div>
                        <div class="col">
                            <label for=""></label>

                        </div>
                        <div class="col">
                            <label for=""></label>

                        </div>

                    </div>
                    <br>
                </center>
            </div>
    
    <div class="container">
			<h2>DIRECCIÓN 1</h2>
			<center>
    
			      <div class="row">
			        <div class="col">
			          <label for="">Calle*</label>
			          <input type="text" class="form-control" placeholder="" required="on">
			        </div>
			        <div class="col">
			          <label for="">Colonia*</label>
			          <input type="text" class="form-control" placeholder="" required="on">
			        </div>
			        <div class="col">
			          <label for="">Número exterior*</label>
			          <input type="text" class="form-control" placeholder="" >
			        </div>
			        <div class="col">
			          <label for="">Número interior*</label>
			          <input type="text" class="form-control" placeholder="" required="on">
			        </div>
			      </div>
    
			    <br><br>

			      <div class="row">
			        <div class="col">
			          <label for="">Código postal*</label>
			          <input type="text" class="form-control" placeholder="" required="on">
			        </div>
			        <div class="col">
			          <label for="">Municipio*</label>
			          <input type="text" class="form-control" placeholder="" required="on">
			        </div>
			        <div class="col">
			          <label for="">Ciudad*</label>
			          <input type="text" class="form-control" placeholder="" required="on">
			        </div>
			        <div class="col">
			          <label for="">Estado*</label>
			          <input type="text" class="form-control" placeholder="" required="on">
			        </div>
			      </div>
						<br><br>
						 <button type="submit" class="btn btn-success">Guardar</button>
           </div>
            </center>
        </form>  
        <br><br><br><br>
    </section>
</section>
@endsection
