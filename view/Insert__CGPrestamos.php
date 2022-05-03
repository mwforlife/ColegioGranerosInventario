<?php
include '../controller/controller.php';

$c = new Controller();

$id = $_POST['ComponentID'];
$doc = $_POST['CGPrestatario__Component'];
$fecha_prest = $_POST['CGFecha__Prestamos'];
$observacion = $_POST['CGObservacion__Prestamos'];

if (strlen($id) > 0 && strlen($doc) > 0 && strlen($fecha_prest) > 0 && strlen($observacion) > 0) {
    $result = $c->InsertarPrestamo($id, $doc,1, $fecha_prest,null, $observacion);
    echo $result;
} else {
    echo "Hay Campos Vacios";
}