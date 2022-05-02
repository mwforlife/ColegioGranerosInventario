<?php
require '../controller/controller.php';

$c = new Controller();

$lista = $c->ListarComponentes();

if (count($lista)>0) {
    for ($i=0; $i < count($lista); $i++) { 
        $CGC = $lista[$i];
        echo "<tr>";
        echo "<td>".$CGC->getId()."</td>";
        echo "<td>".$CGC->getNombre()."</td>";
        echo "<td>".$CGC->getEstado()."</td>";
        echo "<td>".$CGC->getUbicacion()."</td>";
        echo "<td><span class='badge bg-success'><a href='#' onclick(detalles(".$CGC->getId()."))><img src='../img/svg__icon/details.svg' alt=''></a></span></td>";
        echo "<td><span class='badge bg-warning'><a href='#' onclick(modificar(".$CGC->getId()."))><img src='../img/svg__icon/edit.svg' alt=''></a></span></td>";
        echo "<td><span class='badge bg-danger'><a href='#' onclick(eliminar(".$CGC->getId()."))><img src='../img/svg__icon/delete.svg' alt=''></a></span></td>";
        echo "</tr>";
    }
}