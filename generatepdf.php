<?php

include 'conn.php';
include 'fpdf/fpdf.php';


// $tablestart = "<table class='table'>";

// $logo = "Ebook";
// $rowstart = "<tr>";
// $datastart = "<td>";
// $dataend = "</td>";
// $rowend = "</tr>";

// $tableend = "</table>";

$id = $_GET['id'];
$query = "SELECT * FROM book_detail WHERE b_id = $id";
$run = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($run);
$pdf = new FPDF();
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 30);


   
    $pdf->Image('images/LOGO2.png',70,6,70);

    $pdf->Ln(47);
    
    $pdf->Cell(190, 15, $row['b_name'], 0, 0, 'C');
    // $pdf->Cell(95, 15, $row['Category_name'], 1, 0, 'C');

    



$pdf->Output(); 






?>