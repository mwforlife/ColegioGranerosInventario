<?php
include '../controller/controller.php';

$ubicacion = $_POST['UbicacionName'];

if (strlen($ubicacion) <= 0) {
    echo "Debe ingresar una ubicacion";
    return;
}else{
    $c = new Controller();
    $respuesta = $c->InsertarCGUbicacion($ubicacion);
    echo $respuesta;
}


