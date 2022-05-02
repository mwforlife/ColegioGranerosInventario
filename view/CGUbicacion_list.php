<?php
require '../controller/controller.php';

$c = new Controller();

$lista = $c->ListarUbicacion();

if (count($lista)>0) {
    for ($i=0; $i < count($lista); $i++) { 
        $CGCU = $lista[$i];
        echo "<option value='".$CGCU->getId()."'>".$CGCU->getNombre()."</option>";
    }
}