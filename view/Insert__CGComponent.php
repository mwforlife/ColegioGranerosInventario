<?php
include '../controller/controller.php';

$c = new Controller();

$nombre = $_POST['CGComponente'];
$estado = $_POST['CGEStadoComponente'];
$ubicacion = $_POST['CGUbicacion'];
$tipo = $_POST['CGTipoComponente'];
$descripcion = $_POST['CGDescripcion'];
$observacion = $_POST['CGObservacion'];
$status = $_POST['CGStatus'];

$error ="";

if (strlen($nombre) == 0) {
    $error .= "El nombre del componente es obligatorio\n";
}

if ($estado == 0) {
    $error .= "El estado del componente es obligatorio\n";
}

if ($ubicacion == 0) {
    $error .= "La ubicacion del componente es obligatorio\n";
}

if ($tipo == 0) {
    $error .= "El tipo del componente es obligatorio\n";
}

if ($status == 0) {
    $error .= "El status del componente es obligatorio\n";
}

if (strlen($descripcion) == 0) {
    $error .= "La descripcion del componente es obligatorio\n";
}

if (strlen($observacion) == 0) {
    $error .= "La observacion del componente es obligatorio\n";
}

if (strlen($error) > 0) {
    echo $error;
    return;
}else{
    $folio =1;
    switch ($tipo) {
        case 1:
            $folio= "PCCG2022";
            break;
        case 2:
            $folio ="MONCG2022";
            break;
        case 3:
            $folio ="TECCG2022";
            break;
        case 4:
            $folio ="MOUCG2022";
            break;
        case 5:
            $folio ="IMPCG2022";
            break;
        case 6:
            $folio ="PACG2022";
            break;
        case 7:
            $folio ="PROCG2022";
            break;
        case 8:
            $folio ="MOCG2022";
            break;
        case 9:
            $folio ="WEBCG2022";
            break;
        case 10:
            $folio ="ADHMDPCG2022";
            break;
        case 11:
            $folio ="ADVGACG2022";
            break;
        case 12:
            $folio ="ADMNHMDCG2022";
            break;
        case 13:
            $folio ="ADUSBCHMCG2022";
            break;
        case 14:
            $folio ="NOTECG2022";
            break;
        case 15:
            $folio ="TABCG2022";
            break;
        case 16:
            $folio ="ATRCG2022";
            break;
        case 17:
            $folio ="MICCG2022";
            break;
        case 18:
            $folio ="UPSCG2022";
            break;
        case 19:
            $folio ="DDCG2022";
            break;
        case 20:
            $folio ="PULCG2022";
            break;
        case 21:
            $folio ="COCDCG2022";
            break;
        case 22:
            $folio ="OTRCG2022";
            break;
    }

        $result = $c->InsertarComponente($folio, $nombre, $ubicacion, $descripcion, $observacion, $tipo, $estado, $status);
        
        if ($result==1) {
            echo 3;
        }else if($result == 2){
            echo 2;
        }else{
            echo $result;
        }
    
}
