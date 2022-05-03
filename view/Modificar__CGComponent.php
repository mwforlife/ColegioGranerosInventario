<?php
include '../controller/Controller.php';

$id = $_POST['id'];

$c = new Controller();

$comp = $c->BuscarComponentes($id);

if ($comp != null) {
    echo "<div class='container'>";
    echo "<div class='row'>";
    echo "<div class='col-md-12'>";
    echo "<input hidden type='text' class='form-control' name='id' id='nombre' value='" .$id . "' disabled>";
    echo "</div>";
    echo "</div>";


    echo "<form action='#' name='Modify__Form' method='post'>";
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo "<label>Nombre: </label>";
    echo "<input type='text' class='form-control' name='nombre' value='" . $comp->getNombre() . "'>";
    echo '</div>';
    echo '</div>';
    
    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo "<label>Folio: </label>";
    echo "<input type='text' class='form-control' name='folio' value='" . $comp->getFolio() . "' disabled>";
    echo '</div>';
    echo '</div>';

    echo '<div classs="row">';
    echo '<div clas="col-md-12">';
    echo "<label>Tipo: </label>";
    echo "<input type='text' class='form-control' id='nombre' value='" . $comp->getTipo() . "' disabled>";
    echo '</div>';
    echo '</div>';

    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo "<label>Descripcion: </label>";
    echo "<textarea class='form-control' id='descripcion' >" . $comp->getDescripcion() . "</textarea>";
    echo '</div>';
    echo '</div>';


    echo '<div class="row">';
    echo '<div class="col-md-12">';
    echo "<label>Observación: </label>";
    echo "<textarea class='form-control' id='descripcion' >" . $comp->getObservacion() . "</textarea>";
    echo '</div>';
    echo '</div>';
    echo '<div class="row">';
    echo '<div class="col-md-12 d-flex justify-content-center">';
    echo "<button type='reset' class='btn btn-warning' id='btnReset' name='btnReset'>Restablecer</button>";
    echo "<button type='submit' class='btn btn-primary' id='btnModificar' name='btnModificar'>Modificar</button>";
    echo '</div>';
    echo '</div>';
    echo "</form>";
    echo '</div>';
}else{
    echo '<div classs="row">';
    echo '<div clas="col-md-12">';
    echo "<p class='text-center'>¡Oh Oh! Tuvimos un pequeño problema <br> Intenté de nuevo </p>";
    echo '</div>';
    echo '</div>';
}