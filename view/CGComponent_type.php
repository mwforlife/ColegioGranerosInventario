<?php
require '../controller/controller.php';

$c = new Controller();

$lista = $c->ListarTipoComponente();

if (count($lista)>0) {
    for ($i=0; $i < count($lista); $i++) { 
        $CGCT = $lista[$i];
        echo "<option value='".$CGCT->getId()."'>".$CGCT->getNombre()."</option>";
    }
}