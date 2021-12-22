<?php

require("vendor/fpdf182/fpdf.php");
define('EURO',chr(128));

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial', 'B', '18');
    $pdf->Cell('12');

//    VASTE GEGEVENS FLEVOSAP //

    $pdf->image('images/Flevosap-logo.png', '10', '10', '50', '40' );
    $pdf->Cell('130', '20',  '','0','0');//end of line
    $pdf->Cell('130', '20', '','0','1');//end of line
    $pdf->Cell('130', '20', '','0','0');//end of line
    $pdf->Cell('59', '5', 'FACTUUR','0','1');//end of line
    $pdf->Cell('10', '30', '','0','1');//end of line

    $pdf->SetFont('Arial', '','12');

    $pdf->Cell('130', '7', 'Flevosap','0','0');
    $pdf->Cell('25', '7', 'Datum: '.$currentDate = date("j/n/Y"), '0', '0');
    $pdf->Cell('59', '7', '','0','1');//end of line
    $pdf->Cell('130', '7', 'Biddinghuizen, Nederland, 8256 PE','0','1');
    $pdf->Cell('130', '7', 'Tel: +31 (0)321-33 25 25','0','0');
    $pdf->Cell('25', '7', '','0','0');
    $pdf->Cell('34', '7', '','0','1');//end of line
    $pdf->Cell('130', '7', 'info@flevosap.nl','0','0');


    $pdf->Cell('130', '20', '','0','1');
    $pdf->Cell('130', '7', ''.$voornaam .' ' .$achternaam,'0','0');
    $pdf->Cell('59', '7', '','0','1');//end of line
    $pdf->Cell('130', '7', ''.$adres .', ' .$woonplaats .', '.$postcode ,'0','1');
    $pdf->Cell('130', '7', 'Tel:' .' ' .$telefoonnummer,'0','0');
    $pdf->Cell('25', '7', '','0','0');
    $pdf->Cell('34', '7', '','0','1');//end of line
    $pdf->Cell('130', '7', '' .$email,'0','0');

    $pdf->SetFont('Arial', 'B', '12');
    $pdf->Cell('130', '20', '','0','1');
    $pdf->Cell('63', '6', 'Product','B','0', 'C');
    $pdf->Cell('63', '6', 'Aantal','B','0', 'C');
    $pdf->Cell('63', '6', 'Prijs','B','1', 'C');
    $pdf->Cell('130', '6', '','0','1');

//    PRODUCT TABEL WAAR GEGEVENS WORDEN OPGEROEPEN UIT DE DATABASE //

foreach($products as $product)
    {
    $pdf->SetFont('Arial', '','12');

    $pdf->Cell('63', '10', ''.$product['name'],'B','0');
    $pdf->Cell('63', '10',''.$product['amount']. ' x '.EURO .' ' .$product['price'],'B','0', 'C');
    $pdf->Cell('63', '10', ''.EURO .' ' .$product['totalPrice'],'B','1', 'C');//end of line
    }
    $pdf->SetFont('Arial', 'B', '12');
    $pdf->Cell('130', '10', '','0','1');
    $pdf->Cell('126', '10', '','0','0');
    $pdf->Cell('30', '10', 'Totaal aantal: ','0','0');
    $pdf->Cell('33', '10', '' .' '.array_sum(array_map(function ($item){return $item['amount'];}, $products)),'0','1', '');

    $pdf->Cell('126', '10', '','0','0');
    $pdf->Cell('30', '10', 'Totaal prijs:','T','0');//end of line
    $pdf->Cell('33', '10', ''.EURO .' ' .array_sum(array_map(function ($item){return $item['totalPrice'];}, $products)),'T','1', '');//end of line


    $pdf->Output('I', 'flevosap.pdf', true);

