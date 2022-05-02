<?php
require '../controller/controller.php';

$c = new Controller();

$lista = $c->ListarStatusComponentes();

if (count($lista)>0) {
    for ($i=0; $i < count($lista); $i++) { 
        $CGCS = $lista[$i];
        echo "<option value='".$CGCS->getId()."'>".$CGCS->getNombre()."</option>";
    }
}