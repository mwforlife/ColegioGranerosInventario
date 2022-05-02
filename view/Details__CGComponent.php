<?php
include '../controller/Controller.php';

$id = $_POST['id'];

$c = new Controller();

$comp = $c->BuscarComponentes($id);

if ($comp != null) {
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo "<label>Nombre: </label>";
    echo "<input type='text' class='form-control' id='nombre' value='" . $comp->getNombre() . "' disabled>";
    echo '</div>';
    echo '</div>';
    
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo "<label>Folio: </label>";
    echo "<input type='text' class='form-control' id='nombre' value='" . $comp->getFolio() . "' disabled>";
    echo '</div>';
    echo '</div>';

    echo '<div classs="row">';
    echo '<div clas="col-md-12">';
    echo "<label>Tipo: </label>";
    echo "<input type='text' class='form-control' id='nombre' value='" . $comp->getTipo() . "' disabled>";
    echo '</div>';
    echo '</div>';

    echo '<div classs="row">';
    echo '<div clas="col-md-12">';
    echo "<label>Estado: </label>";
    echo "<input type='text' class='form-control' id='nombre' value='" . $comp->getEstado() . "' disabled>";
    echo '</div>';
    echo '</div>';

    echo '<div classs="row">';
    echo '<div clas="col-md-12">';
    echo "<label>Status: </label>";
    echo "<input type='text' class='form-control' id='nombre' value='" . $comp->getStatus() . "' disabled>";
    echo '</div>';
    echo '</div>';


    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo "<label>Descripcion: </label>";
    echo "<textarea class='form-control' id='descripcion'  disabled>" . $comp->getDescripcion() . "</textarea>";
    echo '</div>';
    echo '</div>';


    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo "<label>Observación: </label>";
    echo "<textarea class='form-control' id='descripcion' disabled>" . $comp->getObservacion() . "</textarea>";
    echo '</div>';
    echo '</div>';
    echo '<div class="row">';
}else{
    echo '<div classs="row">';
    echo '<div clas="col-md-12">';
    echo "<p class='text-center'>¡Oh Oh! Tuvimos un pequeño problema <br> Intenté de nuevo </p>";
    echo '</div>';
    echo '</div>';
}