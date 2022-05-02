<?php
//include 'barcode.php';
include('Plantillas/Plantilla_Landscape.php');
/*include('../controller/Controller.php');

session_start();
$c = new Controller();
$id = $_SESSION['user_pel'];
$lista = $c->listarreserva7();
*/
//Titulo del documento
$pdf = new PDF('L','mm',array(90,180));
$pdf->AddPage('L','A4',0);
$pdf->AliasNbPages();

$fecha = date('m-d-Y h:i:s a', time());
$pdf->SetFont('Arial','I',10);
$pdf->Cell(200);
$pdf->Cell(30,5,"Fecha Generada: $fecha",0,1,'C');

$pdf->SetFont('Arial','B',18);
$pdf->Cell(95);
$pdf->Cell(75,12,'Codigos de Barras','B',1,'R',0);


//$pdf->Cell(75,12,count($lista),'B',1,'R',0);

/*if ($lista==null) {
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(1);
    $pdf->Cell(275,12,'No hay Registros en la base de datos',1,0,'C',1);
}else{
//Cuerpo de la tabla
for ($i=0; $i < count($lista); $i++) { 
    $res = $lista[$i];
    $pdf->SetFont('Arial','',12);
    $pdf->Cell(1);
    $pdf->Cell(40,12,$res->getId_usuario(),1,0,'L',1);
    $pdf->Cell(40,12,$res->getId_peluqueria(),1,0,'L',1);
    $pdf->Cell(60,12,$res->getId_servicio(),1,0,'L',1);
    $pdf->Cell(25,12,$res->getFecha(),1,0,'L',1);
    $pdf->Cell(20,12,$res->getHora(),1,0,'L',1);
    $pdf->Cell(25,12,$res->getId_estado(),1,0,'L',1);
    $pdf->Cell(55,12,$res->getTrabajador(),1,1,'L',1);
}
}*/
    $inicial = 10000000;//$_GET['inicial'];
    $type = 'PC';//$_GET['type'];
    $cantidad =10;// $_GET['cantidad'];

for ($i=0; $i < $cantidad; $i++) { 
        
    $code = $type.$inicial;
    
    //barcode('codigos/'.$code.'.png', $code, 50, 'horizontal', 'code128', true);
    $pdf->Image("codigos/$code.png",10,10,70,0,'PNG');
    //$pdf->Image('barcode.php?text=".$type.$inicial."&size=50&orientation=horizontal&codetype=Code39&print=true&sizefactor=1',10,10,50,0,'PNG');
    
    $inicial++;
    //$y = $y+15;
    
}

$pdf->Output('I','reporte.pdf');
?>