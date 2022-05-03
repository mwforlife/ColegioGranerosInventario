function searchComponent(){
    var id = $('#ComponentID').val();
    if (id.length == 0) {
        $('#ComponentID').focus();
        Swal.fire('Error!', 'Debe ingresar un ID', 'error');
        return false;
    }
        
    $.ajax({
        url: '../view/Details__CGComponent1.php',
        type: 'POST',
        data: 'id='+id,
        success: function(datos) {
            $('#detalles__componente').html(datos);
        }
    });


}