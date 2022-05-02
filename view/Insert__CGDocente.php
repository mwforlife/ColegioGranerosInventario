<?php
include '../controller/controller.php'; //incluye el controlador

    $c = new Controller();  // Instancia del controlador

    $name = $_POST['CGDocente__name']; // Nombre del docente
    $apellido = $_POST['CGDocente__apellido']; // Apellido del docente
    $contact = $_POST['CGDocente__contact']; // Contacto del docente

    if (strlen($name) > 0 && strlen($apellido) > 0 && strlen($contact) > 0) {    // Si los campos no estan vacios
        $result = $c->InsertarDocente($name, $apellido, $contact); // Inserta el docente
        echo $result; // Imprime el resultado de la operacion
    }else{ // Si los campos estan vacios
        echo "Hay Campos Vacios"; // Imprime que hay campos vacios
    } 
    