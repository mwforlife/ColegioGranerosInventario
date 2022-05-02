function login(){
    var usu = $("#txtusu").val();
    var pas = $("#txtpas").val();
    
    if(usu == ""){
        swal.fire("Error de Digito", "Ingrese su nombre de usuario", "warning");
        $(".txtusu").focus();
        return;
    }

    if(pas == ""){
        swal.fire("Error de Digito", "Ingrese su contraseña", "warning");
        $(".txtpas").focus();
        return;
    }

    var parametros = "usuario="+usu+"&password="+pas;

    $.ajax({
        url: 'view/Login.php',
        type: 'POST',
        data: parametros,
    })
    .done(function(datos){
        if (datos==1) {
            window.location ="Inventario";
        } else {
            swal.fire("Error de Digito", datos, "warning");
            //swal.fire("Error", "Usuario o contraseña incorrectos", "warning");
        }     
    })
    .fail(function(){
        swal.fire("Error", "Error de Conexion","error");
    })
}