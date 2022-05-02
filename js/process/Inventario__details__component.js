function details(id){
    $.ajax({
        url: '../view/Details__CGComponent.php',
        type: 'POST',
        data: "id="+ id,
        success: function(datos) {
            $("#detalles div").remove();
            $("#detalles").append(datos);
        }
    });

}