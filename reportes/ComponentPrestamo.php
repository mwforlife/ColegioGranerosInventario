<?php
include('Plantillas/Plantilla_Landscape.php');
include('../controller/controller.php');

$c = new Controller();
$lista = $c->ListarPrestamos();

//Titulo del documento
$pdf = new PDF('L','mm',array(90,180));
$pdf->AddPage('L','A4',0);
$pdf->AliasNbPages();


$pdf->SetFont('Arial','B',18);
$pdf->Cell(95);
$pdf->Cell(100,12,'Listado de Componentes en prestamo','B',1,'R',0);

//Encabezado de la tabla
$pdf->SetFillColor(232,232,230);
$pdf->SetFont('Times','B',14);
$pdf->Cell(7);
$pdf->Cell(60,12,'Identificador',1,0,'C',1);
$pdf->Cell(60,12,'Componentes',1,0,'C',1);
$pdf->Cell(90,12,'Prestatario',1,0,'C',1);
$pdf->Cell(60,12,'Fecha',1,0,'C',1);


$pdf->SetFont('Arial','B',18);
$pdf->Cell(95);
$pdf->Cell(75,12,count($lista),'B',1,'R',0);

if ($lista==null) {
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(7);
    $pdf->Cell(260,12,'No hay Registros en la base de datos',1,0,'C',1);
}else{
//Cuerpo de la tabla
for ($i=0; $i < count($lista); $i++) { 
    $t = $lista[$i];
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(7);
    $pdf->Cell(60,12,$t->getId(),1,0,'C',1);
    $pdf->Cell(60,12,$t->getId_com(),1,0,'C',1);
    $pdf->Cell(90,12,$t->getId_doc(),1,0,'C',1);
    $pdf->Cell(60,12,$t->getFecha_prest(),1,0,'C',1);
}
}
$pdf->Output('I','reporte.pdf');