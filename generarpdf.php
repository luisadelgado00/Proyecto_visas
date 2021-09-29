<?php
include "fpdf/fpdf.php";
 
$porcentaje=($_GET['porcentaje']);
$mensaje=($_GET['mensaje']);


$pdf = new FPDF();

$pdf->Addpage();
$pdf->SetFont("Arial","",30);
$pdf->Sety(0);
$pdf->Setx(10);
$pdf->Cell(160,60, "Resultado:");

$pdf->Sety(10);
$pdf->Setx(90);
$pdf->Cell(10,60, $porcentaje);

$pdf->Sety(10);
$pdf->Setx(10);
$pdf->Cell(10,60,"Probabilidad del");



$pdf->Sety(10);
$pdf->Setx(110);
$pdf->Cell(10,60,"%");
$pdf->Output('reporteResultados.pdf','D');

?>