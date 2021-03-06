function delete__component(id){
  Swal.fire({
      title: '¿Estas Seguro de Eliminar Este Componente?',
      showDenyButton: true,
      confirmButtonText: 'Si, Eliminar',
      denyButtonText: `No, Cancelar`,
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        $.ajax({
          url: '../view/Delete__CGComponent.php',
          type: 'POST',
          data: 'id='+id,
          success: function(datos) {
              
               Swal.fire('Eliminado!', '', 'success');
               window.location = 'index.php';

          }
      });

      } else if (result.isDenied) {
        Swal.fire('Genial!', '', 'info')
      }
    });
}


function delete__docente(id){
  Swal.fire({
      title: '¿Estas Seguro de Eliminar este Docente?',
      showDenyButton: true,
      confirmButtonText: 'Si, Eliminar',
      denyButtonText: `No, Cancelar`,
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        $.ajax({
          url: '../view/Delete__CGDocente.php',
          type: 'POST',
          data: 'id='+id,
          success: function(datos) {
              
               Swal.fire('Eliminado!', '', 'success');
               window.location = 'index.php';

          }
      });

      } else if (result.isDenied) {
        Swal.fire('Genial!', '', 'info')
      }
    });
}


function deleteuser(id){
  Swal.fire({
      title: '¿Estas Seguro de Eliminar este Usuario?',
      showDenyButton: true,
      confirmButtonText: 'Si, Eliminar',
      denyButtonText: `No, Cancelar`,
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        $.ajax({
          url: '../view/Delete__CGUser.php',
          type: 'POST',
          data: 'id='+id,
          success: function(datos) {
              
               Swal.fire('Eliminado!', '', 'success');
               window.location = 'index.php';

          }
      });

      } else if (result.isDenied) {
        Swal.fire('Genial!', '', 'info')
      }
    });
}