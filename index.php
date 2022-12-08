<?php
if($_POST){
    require('tfpdf/tfpdf.php');
    $org = $_POST['org'];
    $term = $_POST['term'];
    $doj = $_POST['doj'];
    $lok = $_POST['lok'];
    $licz = $_POST['licz'];
    $pol = $_POST['pol'];
    $fin = $_POST['fin'];
    $wyz = $_POST['wyz'];
    $zakw = $_POST['zakw'];
    $op = $_POST['op'];
    $op2 = $_POST['op2'];
    $op3 = $_POST['op3'];
    $data = date('d-m-Y', strtotime($_POST['data']));

    $title = 'Karta Biwaku';

    $pdf = new tFPDF();
    $pdf -> AddPage();
    $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
    $pdf->SetFont('DejaVu','',14);
    $pdf->SetTitle($title);
    $pdf->SetFont('Arial','B',30);
    $w = $pdf->GetStringWidth($title)+6;
    $pdf->SetX((210-$w)/2);
    $pdf->SetDrawColor(255,255,255,0);
    $pdf->SetFillColor(255,255,255,0);
    $pdf->SetTextColor(0,102,51,0);
    $pdf->SetLineWidth(1);
    $pdf->Cell($w, 9, $title, 1, 1, 'C', true);
    $pdf->Ln(10);

    $pdf->SetTextColor(0,0,0,1);
    $pdf->SetFont('DejaVu','','12');
    $pdf->SetDrawColor(0,102,51,0);
    $pdf->SetLineWidth(0);
    
    $pdf->SetX((80-$w)/2);
    $pdf->Cell(80, 10, 'Organizator:', 1, 0, 'C');
    $pdf->Cell(123, 10, $org, 1, 1, 'C');

    $pdf->SetX((80-$w)/2);
    $pdf->Cell(80, 10, 'Termin:', 1, 0, 'C');
    $pdf->Cell(123, 10, $term, 1, 1, 'C');

    $pdf->SetX((80-$w)/2);
    $pdf->Cell(80, 10, 'Lokalizacja:', 1, 0, 'C');
    $pdf->Cell(123, 10, $lok, 1, 1, 'C');

    $pdf->SetX((80-$w)/2);
    $pdf->Cell(80, 10, 'Dojazd:', 1, 0, 'C');
    $pdf->Cell(123, 10, $doj, 1, 1, 'C');

    $pdf->SetX((80-$w)/2);
    $pdf->Cell(80, 10, 'Liczba uczestników ogółem:', 1, 0, 'C');
    $pdf->Cell(123, 10, $licz, 1, 1, 'C');

    $pdf->SetX((80-$w)/2);
    $pdf->Cell(80, 10, 'Numer polisy i nazwa ubezpieczyciela:', 1, 0, 'C');
    $pdf->Cell(123, 10, $pol, 1, 1, 'C');

    $pdf->SetX((80-$w)/2);
    $pdf->Cell(80, 10, 'Zapewnienie środków finansowych:', 1, 0, 'C');
    $pdf->Cell(123, 10, $fin, 1, 1, 'C');

    $pdf->SetX((80-$w)/2);
    $pdf->Cell(80, 10, 'Sposób wyżywienia:', 1, 0, 'C');
    $pdf->Cell(123, 10, $wyz, 1, 1, 'C');

    $pdf->SetX((80-$w)/2);
    $pdf->Cell(80, 10, 'Warunki zakwaterowania:', 1, 0, 'C');
    $pdf->Cell(123, 10, $zakw, 1, 1, 'C');
    $pdf->Ln(10);

    $pdf->SetX((210-$w)/2);
    $pdf->SetDrawColor(255,255,255,0);
    $pdf->SetFont('DejaVu','',15);
    $pdf->Cell ($w, 9, 'DEKLARACJA W SPRAWIE ŻYCIA I ZDROWIA DZIECI NA BIWAKU', 1, 0, 'C');
    $pdf->Ln(7);

    $pdf->SetX((210-$w)/2);
    $pdf->SetDrawColor(255,255,255,0);
    $pdf->SetFont('DejaVu','',12);
    $pdf->Cell ($w, 10, 'W poczuciu pełnej osobistej odpowiedzialności przed własnym sumieniem, rodzicami', 1, 0, 'C');
    $pdf->Ln(4);
    $pdf->SetX((210-$w)/2);
    $pdf->Cell ($w, 10,'i społeczeństwem za bezpieczeństwo życia i zdrowia powierzonych mej opiece dzieci na biwaku', 1, 0, 'C');
    $pdf->Ln(4);
    $pdf->SetX((210-$w)/2);
    $pdf->Cell ($w, 10,'zorganizowanym przez', 1, 0, 'C'); $pdf->Cell (1, 10,$org, 1, 0, 'C');
    $pdf->Ln(4);
    $pdf->SetX((210-$w)/2);
    $pdf->Cell ($w, 10,'w', 1, 0, 'C'); $pdf->Cell (1, 10,$lok, 1, 0, 'C');
    $pdf->Ln(4);
    $pdf->SetX((210-$w)/2);
    $pdf->Cell ($w, 10,'w terminie', 1, 0, 'C'); $pdf->Cell (1, 10,$term, 1, 0, 'C');
    $pdf->Ln(4);
    $pdf->SetX((210-$w)/2);
    $pdf->Cell ($w, 10,'oświadczam co następuje:', 1, 0, 'C');
    $pdf->Ln(9);

    $pdf->SetX((210-$w)/2);
    $pdf->SetFont('DejaVu','',10);
    $pdf->Cell ($w, 10,'1. z należytą uwagą i zrozumieniem zapoznałam/em się z przepisami dotyczącymi bezpieczeństwa życia', 1, 0, 'C') ;
    $pdf->Ln(4);
    $pdf->Cell ($w, 10,'i zdrowia dzieci i młodzieży;', 1, 0, 'C');
    $pdf->Ln(6);
    $pdf->SetX((204-$w)/2);
    $pdf->SetFont('DejaVu','',10);
    $pdf->Cell ($w, 10,'2. zobowiązuję się do przestrzegania i stosowania zawartych w tych przepisach wskazówek, w czasie', 1, 0, 'C') ;
    $pdf->Ln(4);
    $pdf->Cell ($w, 10,'pełnienia przeze mnie obowiązków na biwaku;', 1, 0, 'C');
    $pdf->Ln(6);
    $pdf->SetX((204-$w)/2);
    $pdf->SetFont('DejaVu','',10);
    $pdf->Cell ($w, 10,'3. uzyskałam/em pisemną zgodę rodziców lub opiekunów prawnych na uczestnictwo dzieci w biwaku.', 1, 0, 'C') ;
    $pdf->Ln(15);

    $pdf->SetX((210-$w)/2);
    $pdf->SetDrawColor(255,255,255,0);
    $pdf->SetFont('DejaVu','',15);
    $pdf->Cell ($w, 10,'Opiekunowie', 1, 0, 'C');
    $pdf->Ln(12);

    $pdf->SetTextColor(0,0,0,1);
    $pdf->SetFont('DejaVu','','12');
    $pdf->SetDrawColor(0,102,51,0);
    $pdf->SetLineWidth(0);
    $pdf->SetX((115-$w)/2);
    $pdf->Cell(170, 10, $op, 1, 0, 'C');
    $pdf->Ln(10);

    $pdf->SetX((115-$w)/2);
    $pdf->Cell(170, 10, $op2, 1, 0, 'C');
    $pdf->Ln(10);

    $pdf->SetX((115-$w)/2);
    $pdf->Cell(170, 10, $op3, 1, 0, 'C');
    $pdf->Ln(10);


    
    
    
    
    $pdf->Output();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zgłaszanie Biwaku - Chorągiew Wielkopolska ZHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main-block">
        <div class="header">
            Karta Biwaku
        </div>
        <div class="body">
            <form action='' method="POST">
                <input type="text" name="org" placeholder="Organizator" required>
                <input type="text" name="term" placeholder="Termin biwaku (np. 16.03.2023 r. - 18.03.2023 r.)" required>
                <input type="text" name="lok" placeholder="lokalizacja (dokładny adres)" required>
                <input type="text" name="doj" placeholder="Dojazd (sposób dojazdu, np. autokar)" required>
                <input type="text" name="licz" placeholder="Liczba uczestników ogółem (razem z kadrą)" required>
                <input type="text" name="pol" placeholder="Numer polisy i nazwa ubezpieczyciela" required>
                <input type="text" name="fin" placeholder="Zapewnienie środków finansowych (np. Wpłaty Uczestników)" required>
                <input type="text" name="wyz" placeholder="Sposób wyżywienia (np. catering)" required>
                <input type="text" name="zakw" placeholder="Warunki zakwaterowania (np. Pokoje, łóżka piętrowe, pościel)" required>
                <input type="text" name="op" placeholder="Imię i nazwisko pełnoletniego opiekuna" required>
                <input type="text" name="op2" placeholder="Imię i nazwisko pełnoletniego opiekuna" required>
                <input type="text" name="op3" placeholder="Imię i nazwisko pełnoletniego opiekuna" required>
                <input type="submit" value="Generuj">
            </form>
        </div>
    </div>
</body>
</html>