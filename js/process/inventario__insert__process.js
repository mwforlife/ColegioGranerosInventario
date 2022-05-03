//Start Component Form Register
$(document).ready(function() {
    $('#CGComponentRegister').on('submit', function(e) {
        e.preventDefault();

        var data = $("#CGComponentRegister").serialize();

        $.ajax({
            url: '../view/Insert__CGComponent.php',
            type: 'POST',
            data: data,
            success: function(datos) {
                if (datos == 2 || datos == '2') {
                    swal.fire('¡Oh Oh!', 'Hubo Un error, Verifique los datos', 'error');
                } else if (datos == 3 || datos == '3') {
                    Swal.fire({
                        title: 'Felicidades Su componentes Ha sido registrado con exito',
                        showDenyButton: true,
                        showCancelButton: true,
                        confirmButtonText: 'OK',
                      }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            window.location = 'index.php';
                        } else if (result.isDenied) {
                            window.location = 'index.php';
                        }
                      })
                } else {
                    swal.fire('¡Owww!', datos, 'warning');
                }
            }
        });
    });
});
//END Component Form Register

//Start Ubication form register
$(document).ready(function() {
    $('#UbicacionForm').on('submit', function(e) {
        e.preventDefault();

        var data = $("#UbicacionForm").serialize();

        $.ajax({
            url: '../view/Insert__CGUbicacion.php',
            type: 'POST',
            data: data,
            success: function(datos) {
                if (datos == "false" || datos == false) {
                    swal.fire('¡Oh Oh!', 'Hubo Un error, Verifique los datos', 'error');
                } else if (datos == true || datos == 'true') {
                    Swal.fire({
                        title: 'Felicidades ',
                        text: 'Su Ubicacion Ha sido registrado con exito',
                        type: 'success',
                        confirmButtonText: 'OK',
                      }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            window.location = 'index.php';
                        } else if (result.isDenied) {
                            window.location = 'index.php';
                        }
                      })
                } else {
                    Swal.fire({
                        title: 'Ups!',
                        text: datos,
                        confirmButtonText: 'OK',
                      }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            window.location = 'index.php';
                        } else if (result.isDenied) {
                            window.location = 'index.php';
                        }
                      })
                }


            }

        });



    });
});
//END Ubication form register
//Start Docente Form Register
$(document).ready(function() {
    $('#CGDocente__Form').on('submit', function(e) {
        e.preventDefault();

        var data = $("#CGDocente__Form").serialize();

        $.ajax({
            url: '../view/Insert__CGDocente.php',
            type: 'POST',
            data: data,
            success: function(datos) {
                if (datos == "false" || datos == false) {
                    swal.fire('¡Oh Oh!', 'Hubo Un error, Verifique los datos', 'error');
                } else if (datos == true || datos == 'true') {
                    Swal.fire({
                        title: 'Felicidades ',
                        text: 'El Docente Ha sido registrado con exito',
                        type: 'success',
                        confirmButtonText: 'OK',
                      }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            window.location = 'index.php';
                        } else if (result.isDenied) {
                            window.location = 'index.php';
                        }
                      })
                } else {
                    swal.fire("Ups!", datos, "warning");
                }


            }

        });



    });
});
//END Docente Form Register


//Start TIPO Form Register
$(document).ready(function() {
    $('#TipoForm').on('submit', function(e) {
        e.preventDefault();

        var data = $("#TipoForm").serialize();

        $.ajax({
            url: '../view/Insert__CGTipoComponent.php',
            type: 'POST',
            data: data,
            success: function(datos) {
                if (datos == "false" || datos == false) {
                    swal.fire('¡Oh Oh!', 'Hubo Un error, Verifique los datos', 'error');
                } else if (datos == true || datos == 'true') {
                    Swal.fire({
                        title: 'Felicidades ',
                        text: 'El Tipo Ha sido registrado con exito',
                        type: 'success',
                        confirmButtonText: 'OK',
                      }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            window.location = 'index.php';
                        } else if (result.isDenied) {
                            window.location = 'index.php';
                        }
                      })
                } else {
                    Swal.fire({
                        title: 'Ups!',
                        text: datos,
                        confirmButtonText: 'OK',
                      }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            window.location = 'index.php';
                        } else if (result.isDenied) {
                            window.location = 'index.php';
                        }
                      })
                }
            }
        });
    });
});


//Start TIPO Form Register
$(document).ready(function() {
    $('#EstadoForm').on('submit', function(e) {
        e.preventDefault();

        var data = $("#EstadoForm").serialize();

        $.ajax({
            url: '../view/Insert__CGEstadoComponent.php',
            type: 'POST',
            data: data,
            success: function(datos) {
                if (datos == "false" || datos == false) {
                    swal.fire('¡Oh Oh!', 'Hubo Un error, Verifique los datos', 'error');
                } else if (datos == true || datos == 'true') {
                    Swal.fire({
                        title: 'Felicidades ',
                        text: 'El Estado Ha sido registrado con exito',
                        type: 'success',
                        confirmButtonText: 'OK',
                      }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            window.location = 'index.php';
                        } else if (result.isDenied) {
                            window.location = 'index.php';
                        }
                      })
                } else {
                    Swal.fire({
                        title: 'Ups!',
                        text: datos,
                        confirmButtonText: 'OK',
                      }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            window.location = 'index.php';
                        } else if (result.isDenied) {
                            window.location = 'index.php';
                        }
                      })
                }
            }
        });
    });
});


//Start TIPO Form Register
$(document).ready(function() {
    $('#StatusForm').on('submit', function(e) {
        e.preventDefault();

        var data = $("#StatusForm").serialize();

        $.ajax({
            url: '../view/Insert__CGStatusComponent.php',
            type: 'POST',
            data: data,
            success: function(datos) {
                if (datos == "false" || datos == false) {
                    swal.fire('¡Oh Oh!', 'Hubo Un error, Verifique los datos', 'error');
                } else if (datos == true || datos == 'true') {
                    Swal.fire({
                        title: 'Felicidades ',
                        text: 'El Status Ha sido registrado con exito',
                        type: 'success',
                        confirmButtonText: 'OK',
                      }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            window.location = 'index.php';
                        } else if (result.isDenied) {
                            window.location = 'index.php'; 
                        }
                      })
                } else {
                    Swal.fire({
                        title: 'Ups!',
                        text: datos,
                        confirmButtonText: 'OK',
                      }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                      })
                }
            }
        });
    });
});

//Start User Form Register
$(document).ready(function() {
    $('#CGUser__Form').on('submit', function(e) {
        e.preventDefault();

        var data = $("#CGUser__Form").serialize();

        $.ajax({
            url: '../view/Insert__CGUser.php',
            type: 'POST',
            data: data,
            success: function(datos) {
                if (datos == "false" || datos == false) {
                    swal.fire('¡Oh Oh!', 'Hubo Un error, Verifique los datos', 'error');
                } else if (datos == true || datos == 'true') {
                    Swal.fire({
                        title: 'Felicidades ',
                        text: 'El Ussuario Ha sido registrado con exito',
                        type: 'success',
                        confirmButtonText: 'OK',
                      }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            window.location = 'index.php';
                        } else if (result.isDenied) {
                            window.location = 'index.php'; 
                        }
                      })
                } else {
                    Swal.fire({
                        title: 'Ups!',
                        text: datos,
                        confirmButtonText: 'OK',
                      }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                      })
                }
            }
        });
    });
});


//Start Prestamos Form Register
$(document).ready(function() {
    $('#PrestamosForm').on('submit', function(e) {
        e.preventDefault();

        var data = $("#PrestamosForm").serialize();

        $.ajax({
            url: '../view/Insert__CGPrestamos.php',
            type: 'POST',
            data: data,
            success: function(datos) {
                if (datos == "false" || datos == false) {
                    swal.fire('¡Oh Oh!', 'Hubo Un error, Verifique los datos', 'error');
                } else if (datos == true || datos == 'true') {
                    Swal.fire({
                        title: 'Felicidades ',
                        text: 'El Prestamo Ha sido registrado con exito',
                        type: 'success',
                        confirmButtonText: 'OK',
                      }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                        if (result.isConfirmed) {
                            window.location = 'index.php';
                        } else if (result.isDenied) {
                            window.location = 'index.php'; 
                        }
                      })
                } else {
                    Swal.fire({
                        title: 'Ups!',
                        text: datos,
                        confirmButtonText: 'OK',
                      }).then((result) => {
                        /* Read more about isConfirmed, isDenied below */
                      })
                }
            }
        });
    });
});