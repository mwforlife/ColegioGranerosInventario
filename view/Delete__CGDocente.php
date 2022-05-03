<?php
include '../controller/controller.php';

$id = $_POST['id'];

$c = new Controller();

$c->EliminarDocente($id);
