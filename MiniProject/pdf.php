<?php
require('pdf_generate\fpdf185\fpdf.php');
include 'config.php';

session_start();
$conn = OpenCon();
$sql = "SELECT * FROM marks WHERE registernumber='{$_SESSION['reg']}' AND semester='{$_SESSION['sem']}' AND iat='{$_SESSION['iat']}'";
$result = mysqli_query($conn, $sql);

$sql_dep = "SELECT * FROM users WHERE registernumber='{$_SESSION['reg']}' AND semester='{$_SESSION['sem']}'";
$res_dep=mysqli_query($conn,$sql_dep);
$data_dep=$res_dep->fetch_array();
$i=0;



$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 20);
$pdf->SetFillColor(214,212,194);
$pdf->Cell(190, 30, "{$_SESSION['iat']} INTERNAL ASSESSMENT TEXT RESULT",'B',1, 'C');
$pdf->SetFont('Arial', '', 14);
$pdf->Cell(190, 10, "REGISTER NUMBER : {$_SESSION['reg']}",0,1, 'L');
$pdf->Cell(190, 10, "SEMESTER : {$_SESSION['sem']}",0,1, 'L');
$pdf->Cell(190, 10, "DEPARTMENT : {$data_dep['department']}",0,1, 'L');

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(10, 15, 'S/n', 0, 0, 'C',true);
$pdf->Cell(60, 15, 'SUBJECT CODE ', 0, 0, 'C',true);
$pdf->Cell(70, 15, 'SUBJECT NAME ', 0, 0, 'C',true);
$pdf->Cell(45, 15, 'MARK', 0, 1, 'C',true);
// $pdf->Cell(190, 5, '', 'B', 1, 'C');

// $pdf->Cell(45,15,"H",1,1,'C');
$pdf->SetFont('Arial', '', 12);
while ($data = $result->fetch_assoc()) {
    $i++;
    $pdf->Cell(10, 15, "$i", 0, 0, 'C');
    $pdf->Cell(60, 15, "{$data['subjectcode']}", 0, 0, 'C');
    $pdf->Cell(70, 15, "{$data['subjectname']}", 0, 0, 'C');
    $pdf->Cell(45, 15, "{$data['mark']}", 0, 1, 'C');
}
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(190, 15, '', 'B', 1, 'C');

$pdf->Cell(190, 15, "TOTAL PERCENTAGE : {$_SESSION['per']} %", 0, 1, 'R');
$pdf->Cell(190, 15, "STATUS : {$_SESSION['status']}", 0, 1, 'R');
$pdf->SetFont('Arial', '', 10);
// $pdf->Cell(190, 25, "Note: ", 0, 1, 'L');
// $pdf->Cell(190, 5, "1.Marks are out of 100", 0, 1, 'L');
// $pdf->Cell(190, 5, "1.Minimum passing Mark is 45", 0, 1, 'L');


$pdf->Output();
?>