window.onload = function() {
    listarEstadoComponente();
    listarTipoComponente();
    listarUbicacionComponente();
    listarStatusComponente();
}


function listarEstadoComponente(){
    $.ajax({
        url: '../view/CGComponent_estado.php',
        type: 'POST',
        data: 'none',
    })
    .done(function(datos){
        $("#CGEstadoComponente").append(datos);      
    })
    .fail(function(){
        swal.fire("Error", "Error de Conexion","error");
    })
}

function listarTipoComponente(){
    $.ajax({
        url: '../view/CGComponent_type.php',
        type: 'POST',
        data: 'none',
    })
    .done(function(datos){
        $("#CGTipoComponente").append(datos);      
    })
    .fail(function(){
        swal.fire("Error", "Error de Conexion","error");
    })
}

function listarStatusComponente(){
    $.ajax({
        url: '../view/CGComponent_status.php',
        type: 'POST',
        data: 'none',
    })
    .done(function(datos){
        $("#CGStatus").append(datos);      
    })
    .fail(function(){
        swal.fire("Error", "Error de Conexion","error");
    })
}


function listarUbicacionComponente(){
    $.ajax({
        url: '../view/CGUbicacion_list.php',
        type: 'POST',
        data: 'none',
    })
    .done(function(datos){
        $("#CGUbicacion").append(datos);      
    })
    .fail(function(){
        swal.fire("Error", "Error de Conexion","error");
    })
}