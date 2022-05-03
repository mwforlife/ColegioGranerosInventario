<?php
include '../controller/controller.php';

$c = new Controller();

$campo = $_POST['campo'];

if(strlen($campo)<=0){
    echo "<div class='alert alert-danger' role='alert'>
            <strong>Error!</strong> No se ha ingresado ningun Dato.
          </div>";
          return;
}

$lista = $c->BuscarTodosLosComponentes($campo);

if (count($lista)>0) {
    echo "<div>";
    echo "<h3 class='text-white'>Resultados de la busqueda:</h3>";
    echo "<table class='table table-dark table-striped table-bordered table-hover'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Nombre</th>";
    echo "<th>Estado</th>";
    echo "<th>Ubicación</th>";
    echo "<th>Tipo</th>";
    echo "<th>Estado</th>";
    echo "<th>Status</th>";
    echo "<th>Detalles</th>";
    echo "<tr>";
    echo "</thead>";
    echo "<tbody>";
    for ($i=0; $i < count($lista); $i++) { 
        $CGC = $lista[$i];
        echo "<tr>";
        echo "<td>".$CGC->getId()."</td>";
        echo "<td>".$CGC->getNombre()."</td>";
        echo "<td>".$CGC->getEstado()."</td>";
        echo "<td>".$CGC->getUbicacion()."</td>";
        echo "<td>".$CGC->getTipo()."</td>";
        echo "<td>".$CGC->getEstado()."</td>";
        echo "<td>".$CGC->getStatus()."</td>";
        echo "<td><span class='badge bg-success'><a href='#' type='button' data-bs-toggle='modal' data-bs-target='#modaldetails' onclick='details(".$CGC->getId().")'><img src='../img/svg__icon/details.svg' alt=''></a></span></td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
    echo "</div>";
}else{
    echo "<div class='alert alert-danger' role='alert'>No se encontraron resultados</div>";
}