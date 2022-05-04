<?php
include 'fpdf/fpdf.php';

class PDF extends FPDF{
    function Header(){
        $this->AddLink();
        $this->Image('plantillas/log.png',10,10,35,0,'','www.colegiograneros.cl/Inventario');
        $this->SetFont('Arial','B',18);
        $this->Cell(120);
        $this->Cell(30,10,'Colegio Graneros',0,1,'C');
        $this->SetFont('Arial','I',14);
        $this->Cell(120);
        $this->Cell(30,5,'Sistema de Inventario - Reportes',0,1,'C');
        $this->Ln(10);
       

    }


    function Footer(){
        $this->SetY(-18);
        $this->SetFont('Arial','I',12);
        $this->AddLink();
        $this->Cell(5,10,'Inicio',0,0,'L',0,'http://www.colegiograneros.cl/Inventario');
        $this->SetFont('Arial','I',10);
        $this->Cell(0,10,utf8_decode('Página').$this->PageNo().' de {nb}',0,0,'C');

        $fecha = date('m-d-Y h:i:s a', time());

        
        $this->SetFont('Arial','I',10);
        $this->Cell(0,10," $fecha",0,0,'R');
    }
}

?>