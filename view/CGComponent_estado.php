<?php
require '../controller/controller.php';

$c = new Controller();

$lista = $c->ListarEstadoComponente();

if (count($lista)>0) {
    for ($i=0; $i < count($lista); $i++) { 
        $CGCE = $lista[$i];
        echo "<option value='".$CGCE->getId()."'>".$CGCE->getNombre()."</option>";
    }
}