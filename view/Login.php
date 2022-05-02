<?php
include '../controller/controller.php';

$c = new Controller();

$usu = $_POST['usuario'];
$pass = sha1($_POST['password']);

$u = $c->CGUser__login($usu, $pass);

if ($u!="Error de Usuario o Contraseña" || !is_string($u)) {
    session_start();
    $_SESSION['id_usu'] = $u->getId();
    $_SESSION['nombre'] = $u->getNombre();
    $_SESSION['apellido'] = $u->getApellido();
    $_SESSION['email'] = $u->getEmail();
    $_SESSION['tipo'] = $u->getTipo();
    $_SESSION['toten'] = $u->getToten();
    $_SESSION['modify'] = $u->getModify();
    echo 1;
} else {
   echo $u;
}
