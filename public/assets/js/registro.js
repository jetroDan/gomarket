$(function(){
    $("#formRegistro").submit(function(e) {
        e.preventDefault();
        var data = $("#formRegistro").serialize();
        
        $.post('/registrar/cliente', data, function (response) {
            if(response.success){
                swal({
                    title: "Operación exitosa",
                    text: response.message,
                    type: 'success',
                    showCancelButton: false,
                    confirmButtonColor: 'rgb(26, 98, 172)',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Ok'
                }).then(
                    function () {
                        location.href ="/";
                    }
                );
            }
            else{
                swal({
                    title: 'Error',
                    text: response.message,
                    type: 'error',
                    showCancelButton: false,
                    confirmButtonColor: 'rgb(26, 98, 172)',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Ok'
                });
            
            }
        }, "json")
            .fail(function () {
                swal({
                    title: 'Error',
                    text: "Ocurrió un error inesperado",
                    type: 'error',
                    showCancelButton: false,
                    confirmButtonColor: 'rgb(26, 98, 172)',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Ok'
                });
            });
        
    });
    

    
    $("#inicio-sesion").submit(function(e) {
        e.preventDefault();
        var data = $("#inicio-sesion").serialize();
        
        $.post('/iniciarSesion/cliente', data, function (response) {
            if(response.success){
                location.href ="/";
            }
            else{
                swal({
                    title: 'Error',
                    text: response.message,
                    type: 'error',
                    showCancelButton: false,
                    confirmButtonColor: 'rgb(26, 98, 172)',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Ok'
                });
            
            }
        }, "json")
            .fail(function () {
                swal({
                    title: 'Error',
                    text: "Ocurrió un error inesperado",
                    type: 'error',
                    showCancelButton: false,
                    confirmButtonColor: 'rgb(26, 98, 172)',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Ok'
                });
            });
        
    });
    
    
     $("#formulario-detalle").submit(function(e) {
        e.preventDefault();
        var data = $("#formulario-detalle").serialize();
        
        $.post('/agregar/articulo', data, function (response) {
            if(response.success){
                location.reload();
            }
            else{
                swal({
                    title: 'Error',
                    text: response.message,
                    type: 'error',
                    showCancelButton: false,
                    confirmButtonColor: 'rgb(26, 98, 172)',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Ok'
                });
            
            }
        }, "json")
            .fail(function () {
                swal({
                    title: 'Error',
                    text: "Ocurrió un error inesperado",
                    type: 'error',
                    showCancelButton: false,
                    confirmButtonColor: 'rgb(26, 98, 172)',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Ok'
                });
            });
        
    });
    
    
    $("#formulario-pedido").submit(function(e) {
        e.preventDefault();
        var data = $("#formulario-pedido").serialize();
        
        $.post('/finalizar/compra', data, function (response) {
            if(response.success){
                swal({
                    title: "Operación exitosa",
                    text: response.message,
                    type: 'success',
                    showCancelButton: false,
                    confirmButtonColor: 'rgb(26, 98, 172)',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Ok'
                }).then(
                    function () {
                        location.href ="/detalle/Pedido/"+response.detalle_compra.id;
                    }
                );
            }
            else{
                swal({
                    title: 'Error',
                    text: response.message,
                    type: 'error',
                    showCancelButton: false,
                    confirmButtonColor: 'rgb(26, 98, 172)',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Ok'
                });
            
            }
        }, "json")
            .fail(function () {
                swal({
                    title: 'Error',
                    text: "Ocurrió un error inesperado",
                    type: 'error',
                    showCancelButton: false,
                    confirmButtonColor: 'rgb(26, 98, 172)',
                    cancelButtonColor: '#aaa',
                    confirmButtonText: 'Ok'
                });
            });
        
    });
});
