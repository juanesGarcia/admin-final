<?php
require('fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Arial bold 15
    $this->SetFont('Arial','B',18);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Lista de usuarios',0,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}

}



require 'cn.php';
$consulta = "SELECT * FROM usuario";
$resultado = $conexion->query($consulta);


$pdf = new PDF();
$pdf ->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);
$pdf->Image('img/logo.png',10,8,60);
$pdf->Ln(50);
$pdf->Cell(50,8,utf8_decode('Nombre'),1,0,'C',0);
$pdf->Cell(100,8,utf8_decode('Correo electrónico'),1,0,'C',0);
$pdf->Cell(40,8,utf8_decode('Contraseña'),1,1,'C',0);

while($row = $resultado->fetch_assoc()){
    $pdf->Cell(50, 10, $row['primernombre'], 1, 0, 'C', 0);
    $pdf->Cell(100, 10, $row['email'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10, $row['contraseña'], 1, 1, 'C', 0);
}

$pdf->Output();
?>