<?php
include '../controller/controller.php';

$c = new Controller();

$nombre = $_POST['CGUser__nombre'];
$apellido = $_POST['CGUser__apellido'];
$email = $_POST['CGUser__email'];
$tipo = $_POST['CGUser__tipo'];
$login = $_POST['CGUser__login'];
$password = $_POST['CGUser__password'];

if (strlen($nombre) > 0 && strlen($apellido) > 0 && strlen($email) > 0 && strlen($tipo) > 0 && strlen($login) > 0 && strlen($password) > 0) {
    $toten = sha1($email);
    $result = $c->InsertarUsuario($nombre, $apellido, $email, $login, sha1($password),$tipo, $toten);
    echo $result;
}else{
    echo "Faltan datos";
}
