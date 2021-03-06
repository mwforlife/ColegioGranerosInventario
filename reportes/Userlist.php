<?php
include('Plantillas/Plantilla_Landscape.php');
include('../controller/controller.php');

$c = new Controller();
$lista = $c->ListarUsuarios();

//Titulo del documento
$pdf = new PDF('L','mm',array(90,180));
$pdf->AddPage('L','A4',0);
$pdf->AliasNbPages();

$fecha = date('m-d-Y h:i:s', time());

$pdf->SetFont('Arial','B',18);
$pdf->Cell(95);
$pdf->Cell(75,12,'Listado de Usuarios','B',1,'R',0);

//Encabezado de la tabla
$pdf->SetFillColor(232,232,230);
$pdf->SetFont('Times','B',14);
$pdf->Cell(7);
$pdf->Cell(20,12,'ID',1,0,'C',1);
$pdf->Cell(60,12,'Nombre',1,0,'C',1);
$pdf->Cell(40,12,'Apellido',1,0,'C',1);
$pdf->Cell(60,12,'Correo',1,0,'C',1);
$pdf->Cell(35,12,'Tipo',1,0,'C',1);
$pdf->Cell(35,12,'Login',1,0,'C',1);


$pdf->SetFont('Arial','B',18);
$pdf->Cell(95);
$pdf->Cell(75,12,count($lista),'B',1,'R',0);

if ($lista==null) {
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(7);
    $pdf->Cell(270,12,'No hay Registros en la base de datos',1,0,'C',1);
}else{
//Cuerpo de la tabla
for ($i=0; $i < count($lista); $i++) { 
    $t = $lista[$i];
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(7);
    $pdf->Cell(20,12,$t->getId(),1,0,'C',1);
    $pdf->Cell(60,12,$t->getNombre(),1,0,'C',1);
    $pdf->Cell(40,12,$t->getApellido(),1,0,'C',1);
    $pdf->Cell(60,12,$t->getEmail(),1,0,'C',1);
    $pdf->Cell(35,12,$t->getTipo(),1,0,'C',1);
    $pdf->Cell(35,12,$t->getLogin(),1,1,'C',1);
}
}

$pdf->Output('I','reporte-'.$fecha.'.pdf');