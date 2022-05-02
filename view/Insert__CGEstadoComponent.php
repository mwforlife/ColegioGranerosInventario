<?php
include '../controller/controller.php';

$valor = $_POST['EstadoName'];

if (strlen($valor) < 0) {
    echo "No se puede dejar el campo vacio";
    return;
} else {
    $c = new Controller();
    $resulta = $c->InsertarEstadoComponente($valor);
    echo $resulta;
}