<?php
include '../controller/controller.php';

$valor = $_POST['StatusName'];

if (strlen($valor) < 0) {
    echo "No se puede dejar el campo vacio";
    return;
} else {
    $c = new Controller();
    $resulta = $c->InsertarStatusComponente($valor);
    echo $resulta;
}