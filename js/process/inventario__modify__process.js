function modificar(id){
    $.ajax({
        url: '../view/Modificar__CGComponent.php',
        type: 'POST',
        data: "id="+ id,
        success: function(datos) {
            $("#detalles div").remove();
            $("#detalles").append(datos);
        }
    });

}