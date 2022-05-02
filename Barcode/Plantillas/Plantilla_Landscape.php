<?php
include 'fpdf/fpdf.php';

class PDF extends FPDF{
    function Header(){
        $this->AddLink();
        $this->Image('plantillas/log.png',10,10,55,0,'','www.wilkenstech.host');
        $this->SetFont('Arial','B',18);
        $this->Cell(120);
        $this->Cell(30,10,'Colegio Graneros',0,1,'C');
        $this->SetFont('Arial','I',14);
        $this->Cell(120);
        $this->Cell(30,5,'Nuevo Style',0,1,'C');
        $this->Ln(10);

    }


    function Footer(){
        $this->SetY(-18);
        $this->SetFont('Arial','I',12);
        $this->AddLink();
        $this->Cell(5,10,'www.Colegiograneros.cl',0,0,'L');
        $this->SetFont('Arial','I',10);
        $this->Cell(0,10,utf8_decode('Página').$this->PageNo().' de {nb}',0,0,'C');
    }
}

?>