<?php
include '../controller/controller.php';

$valor = $_POST['TipoName'];

if (strlen($valor) < 0) {
    echo "No se puede dejar el campo vacio";
    return;
} else {
    $c = new Controller();
    $resulta = $c->InsertarTipo($valor);
    echo $resulta;
}