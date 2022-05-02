<?php
	include 'plantillas/Plantilla_Portrait.php';
	include 'barcode.php';

	$tipoJson = json_decode($_GET['type']);
    $cantidadJson = json_decode($_GET['cantidad']);

    $pdf = new FPDF('P','mm','A3');
	$pdf->AddPage('P',array(235,345));
	$pdf->SetAutoPageBreak(true,20);
    $i=0;
    $x=10;
    $y = 10;
    $count = 0;
    $salto = 0;
    $cant=0;
    for ($i=0; $i < count($tipoJson); $i++) { 
        $tipo = $tipoJson[$i];
        $cantidad = $cantidadJson[$i];


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

	    barcode('codigos/'.$folio.'.png', $folio, 30, 'horizontal', 'code39', true);

        while ($cant < $cantidad) {

            $pdf->Image('codigos/'.$folio.'.png',$x,$y,50,0,'PNG');
            $cant++;
            $count++;

            if ($count == 4) {
                $y = $y + 25;
                $x = 10;
                $count =0;
            }else{
                $x=$x+50;
            }
            $salto++;
            if ($salto == 48) {
                $pdf->AddPage('P',array(235,345));
                $y = 10;
                $x = 10;
                $count =0;
                $salto =0;
            }
		
	    }
        $cant=0;
    }

	/*
    for ($i=0; $i <= $cantidad; $i++) { 
        $pdf->Image('codigos/'.$folio.'.png',$x,$y,50,0,'PNG');
		$i++;
		$count++;

		if ($count == 5) {
			$y = $y + 20;
			$x = 10;
			$count =0;
		}else{
			$x=$x+50;
		}
    }
*/
	$pdf->Output('I', 'CodigoBarras.pdf');	
	
?>