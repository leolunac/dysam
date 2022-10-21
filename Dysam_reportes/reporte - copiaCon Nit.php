<?php

require "conexion.php";
require "fpdf/fpdf.php";


$sql = "SELECT fecha, nombre,direccion,contacto FROM datos";
$resultado = $mysqli->query($sql);

$pdf = new FPDF("P", "mm", "letter");
$pdf->AddPage();

$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(22);
$pdf->Image("logo.png",10,5,20);

$pdf->Cell(170,9, utf8_decode("DISEÑO Y SERVICIOS AMBIENTALES - D&SAM S.A.S"), 1,1, "C");
$pdf->Cell(22);
$pdf->SetFont("Arial", "B", 8);
$pdf->Cell(170,5, utf8_decode("NIT: 901054419-2"), 1,1, "C");
$pdf->Cell(22);
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(170,9,"REPORTE INFORME TECNICO", 1,1, "C");
$pdf->Image("logo.png",10,5,20);
$pdf->SetFillColor(250,250,50);
$pdf->Ln(2);
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(22);
$pdf->Cell(20,5, "FECHA",1,0,"C");
$pdf->Cell(70,5, "NOMBRE",1,0,"C");
$pdf->Cell(40,5, "DIRECCION",1,0,"C");
$pdf->Cell(40,5, "CONTACTO",1,1,"C");

$pdf->SetFont("Arial", "", 10);
$pdf->Cell(22);

while ($fila = $resultado->fetch_assoc()) {
    
    $pdf->Cell(20,6, $fila['fecha'],1,0,"C");
    $pdf->Cell(70,6,utf8_decode($fila['nombre']),1,0,"C",);
    $pdf->Cell(40,6,utf8_decode( $fila['direccion']),1,0,"C");
    $pdf->Cell(40,6,utf8_decode( $fila['contacto']),1,1,"C");

} 
$pdf->Ln(1);
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(22);

$pdf->Cell(170,9,"BITACORA DE MANTENIMIENTO PREVENTIVOS", 1,1, "C");

$sql = "SELECT bomba1,voltaje1,corriente1,observaciones1,bomba2,voltaje2,corriente2,observaciones2,bomba3,voltaje3,corriente3,observaciones3,bomba4,voltaje4,corriente4,observaciones4,bomba5,voltaje5,corriente5,observaciones5,bomba6,voltaje6,corriente6,observaciones6, bomba7,voltaje7,corriente7,observaciones7,bomba8,voltaje8,corriente8,observaciones8,bomba9,voltaje9,corriente9,observaciones9,bomba10,voltaje10,corriente10,observaciones10 FROM datos";
$resultado1 = $mysqli->query($sql);
$pdf->Cell(22);
$pdf->SetFont("Arial", "B", 8);

$pdf->Cell(45,5, "BOMBAS",1,0,"C");
$pdf->Cell(30,5, "VOLTAJE(V)",1,0,"C");
$pdf->Cell(30,5, "CORRIENTE",1,0,"C");
$pdf->Cell(65,5, "OBSERVACIONES",1,0,"C");

$pdf->SetFont("Arial", "", 8);

$pdf->Ln(5);
$pdf->Cell(22);
while ($fila = $resultado1->fetch_assoc()) {
    $pdf->Cell(45,5,utf8_decode ($fila['bomba1']),1,0,"L");
    $pdf->Cell(30,5,$fila['voltaje1'],1,0,"C");
    $pdf->Cell(30,5,$fila['corriente1'],1,0,"C");
    $pdf->Cell(65,5,utf8_decode ($fila['observaciones1']),1,0,"L");
    $pdf->Ln(5);
    $pdf->Cell(22);
    $pdf->Cell(45,5,utf8_decode( $fila['bomba2']),1,0,"L");
    $pdf->Cell(30,5, $fila['voltaje2'],1,0,"C");
    $pdf->Cell(30,5, $fila['corriente2'],1,0,"C");
    $pdf->Cell(65,5,utf8_decode( $fila['observaciones2']),1,0,"L");
    $pdf->Ln(5);
    $pdf->Cell(22);
    $pdf->Cell(45,5,utf8_decode($fila['bomba3']),1,0,"L");
    $pdf->Cell(30,5, $fila['voltaje3'],1,0,"C");
    $pdf->Cell(30,5, $fila['corriente3'],1,0,"C");
    $pdf->Cell(65,5,utf8_decode ($fila['observaciones3']),1,0,"L");
    $pdf->Ln(5);
    $pdf->Cell(22);
    $pdf->Cell(45,5,utf8_decode($fila['bomba4']),1,0,"L");
    $pdf->Cell(30,5, $fila['voltaje4'],1,0,"C");
    $pdf->Cell(30,5, $fila['corriente4'],1,0,"C");
    $pdf->Cell(65,5,utf8_decode($fila['observaciones4']),1,0,"L");
    $pdf->Ln(5);
    $pdf->Cell(22);
    $pdf->Cell(45,5,utf8_decode($fila['bomba5']),1,0,"L");
    $pdf->Cell(30,5, $fila['voltaje5'],1,0,"C");
    $pdf->Cell(30,5, $fila['corriente5'],1,0,"C");
    $pdf->Cell(65,5,utf8_decode($fila['observaciones5']),1,0,"L");
    $pdf->Ln(5);
    $pdf->Cell(22);
    $pdf->Cell(45,5,utf8_decode($fila['bomba6']),1,0,"L");
    $pdf->Cell(30,5, $fila['voltaje6'],1,0,"C");
    $pdf->Cell(30,5, $fila['corriente6'],1,0,"C");
    $pdf->Cell(65,5,utf8_decode($fila['observaciones6']),1,0,"L");
    $pdf->Ln(5);
    $pdf->Cell(22);
    $pdf->Cell(45,5,utf8_decode($fila['bomba7']),1,0,"L");
    $pdf->Cell(30,5, $fila['voltaje7'],1,0,"C");
    $pdf->Cell(30,5, $fila['corriente7'],1,0,"C");
    $pdf->Cell(65,5,utf8_decode($fila['observaciones7']),1,0,"L");
    $pdf->Ln(5);
    $pdf->Cell(22);
    $pdf->Cell(45,5,utf8_decode($fila['bomba8']),1,0,"L");
    $pdf->Cell(30,5, $fila['voltaje8'],1,0,"C");
    $pdf->Cell(30,5, $fila['corriente8'],1,0,"C");
    $pdf->Cell(65,5,utf8_decode($fila['observaciones8']),1,0,"L");
    $pdf->Ln(5);
    $pdf->Cell(22);
    $pdf->Cell(45,5,utf8_decode($fila['bomba9']),1,0,"L");
    $pdf->Cell(30,5, $fila['voltaje9'],1,0,"C");
    $pdf->Cell(30,5, $fila['corriente9'],1,0,"C");
    $pdf->Cell(65,5,utf8_decode($fila['observaciones9']),1,0,"L");
    $pdf->Ln(5);
    $pdf->Cell(22);
    $pdf->Cell(45,5,utf8_decode($fila['bomba10']),1,0,"L");
    $pdf->Cell(30,5, $fila['voltaje10'],1,0,"C");
    $pdf->Cell(30,5, $fila['corriente10'],1,0,"C");
    $pdf->Cell(65,5,utf8_decode($fila['observaciones10']),1,0,"L");
} 

$pdf->Ln(5);
$pdf->SetFont("Arial", "B", 12);
$pdf->Cell(22);

$pdf->Cell(170,9,"ACCESORIOS HIDRAULICOS", 1,1, "C");
$pdf->Cell(22);
$pdf->SetFont("Arial", "B", 8);
$pdf->Cell(40,5, "VALVULAS",1,0,"L");

$sql = "SELECT valvulas FROM datos";
$resultado0 = $mysqli->query($sql);
while ($fila = $resultado0->fetch_assoc()) {
    $pdf->SetFont("Arial", "B", 8);
    $pdf->Cell(130,5,utf8_decode($fila['valvulas']),1,0,"L");
}
$sql = "SELECT cheques,mecanicos,presostatos,manometros FROM datos";
$pdf->Ln(5);
$pdf->Cell(22);
$pdf->Cell(40,5, "CHEQUES",1,0,"L");
$resultado2 = $mysqli->query($sql);
while ($fila = $resultado2->fetch_assoc()) {
    $pdf->Cell(130,5,utf8_decode($fila['cheques']),1,0,"L");
    $pdf->SetFont("Arial", "B", 12);
    $pdf->Ln(5);
    $pdf->SetFont("Arial", "B", 8);
    $pdf->Cell(22);
    $pdf->Cell(40,5, "FLOTADORES MECANICOS",1,0,"L");
    $pdf->Cell(130,5,utf8_decode($fila['mecanicos']),1,0,"L");
    $pdf->SetFont("Arial", "B", 12);
    $pdf->Ln(5);
    $pdf->Cell(22);
    $pdf->SetFont("Arial", "B", 8);
    $pdf->Cell(40,5, "PRESOSTATOS",1,0,"L");
    $pdf->Cell(130,5,utf8_decode($fila['presostatos']),1,0,"L");
    $pdf->Ln(5);
    $pdf->Cell(22);
    $pdf->Cell(40,5, "MANOMETROS",1,0,"L");
    $pdf->Cell(130,5,utf8_decode($fila['manometros']),1,0,"L");
    $pdf->Ln(5);
    $pdf->SetFont("Arial", "B", 12);
    $pdf->Cell(22);
    $pdf->Cell(170,9,"CONTROLES DE NIVEL", 1,1, "C");
}
$sql = "SELECT cnivel FROM datos";
$resultado3 = $mysqli->query($sql);

$pdf->SetFont("Arial", "B", 10);

$pdf->Cell(22);

while ($fila = $resultado3->fetch_assoc()) {
    $pdf->Cell(170,7,utf8_decode($fila['cnivel']),1,0,"C");
}
$pdf->Ln(7);
$pdf->SetFont("Arial", "B", 12);

$pdf->Cell(22);

$pdf->Cell(170,9,"TANQUE HIDRONEUMATICO", 1,1, "C");
$sql = "SELECT capacidad,precarga,observacioness, capacidad1,precarga1,observacioness1, capacidad2,precarga2,observacioness2, capacidad3,precarga3,observacioness3 FROM datos";
$resultado4 = $mysqli->query($sql);

$pdf->Ln(0);
$pdf->Cell(22);
$pdf->SetFont("Arial", "B", 8);
$pdf->Cell(36,5, "CAPACIDAD",1,0,"C");
$pdf->Cell(36,5, "PRECARGA DE AIRE",1,0,"C");
$pdf->Cell(98,5, "OBSERVACIONES",1,0,"C");

$pdf->Ln(5);
$pdf->Cell(22);
$pdf->SetFont("Arial", "B", 6);

while ($fila = $resultado4->fetch_assoc()) {
    $pdf->Cell(36,5,utf8_decode($fila['capacidad']),1,0,"L");
    $pdf->Cell(36,5,utf8_decode( $fila['precarga']),1,0,"L");
    $pdf->Cell(98,5,utf8_decode($fila['observacioness']),1,0,"L");
    $pdf->Ln(5);
    $pdf->Cell(22);
    $pdf->Cell(36,5,utf8_decode($fila['capacidad1']),1,0,"L");
    $pdf->Cell(36,5,utf8_decode( $fila['precarga1']),1,0,"L");
    $pdf->Cell(98,5,utf8_decode($fila['observacioness1']),1,0,"L");
    $pdf->Ln(5);
    $pdf->Cell(22);
    $pdf->Cell(36,5,utf8_decode($fila['capacidad2']),1,0,"L");
    $pdf->Cell(36,5,utf8_decode($fila['precarga2']),1,0,"L");
    $pdf->Cell(98,5,utf8_decode($fila['observacioness2']),1,0,"L");
    $pdf->Ln(5);
    $pdf->Cell(22);
    $pdf->Cell(36,5, $fila['capacidad3'],1,0,"C");
    $pdf->Cell(36,5, $fila['precarga3'],1,0,"C");
    $pdf->Cell(98,5, $fila['observacioness3'],1,0,"L");

}
$pdf->Ln(5);
$pdf->SetFont("Arial", "B", 12);

$pdf->Cell(22);

$pdf->Cell(170,9,"TABLERO ELECTRICO", 1,1, "C");
$sql = "SELECT telectrico FROM datos";
$resultado5 = $mysqli->query($sql);

$pdf->SetFont("Arial", "B", 10);

$pdf->Cell(22);

while ($fila = $resultado5->fetch_assoc()) {
    $pdf->Cell(170,7,utf8_decode($fila['telectrico']),1,0,"C");
}
$pdf->Ln();
$pdf->SetFont("Arial", "B", 12);

$pdf->Cell(22);

$pdf->Cell(170,9,"NOVEDADES", 1,1, "C");
$sql = "SELECT novedades FROM datos";
$resultado6 = $mysqli->query($sql);

$pdf->SetFont("Arial", "B", 10);

$pdf->Cell(22);

while ($fila = $resultado6->fetch_assoc()) {
    $pdf->Cell(170,8,utf8_decode($fila['novedades']),1,0,"C");
}
$pdf->Ln(8);
$pdf->Cell(22);

$pdf->Cell(42,7, "PERSONAL EN OBRA",1,0,"C");
$pdf->Cell(44,7, "CARGO",1,0,"C");
$pdf->Cell(84,7, "FIRMA Y SELLO",1,0,"C");

$sql = "SELECT personal,cargo,firma FROM datos";
$resultado7 = $mysqli->query($sql);

$pdf->SetFont("Arial", "B", 10);

$pdf->Ln(7);
$pdf->Cell(22);
while ($fila = $resultado7->fetch_assoc()) {
    $pdf->Cell(42,20, $fila['personal'],1,0,"C");
    $pdf->Cell(44,20,utf8_decode($fila['cargo']),1,0,"C");
    $pdf->Cell(84,20, $fila['firma'],1,0,"C");
}

$pdf->output();