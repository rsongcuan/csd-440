<?php
/*
Ryan Songcuan
10/9/22
Module 11 Assignment
*/

$db = new mysqli("127.0.0.1", "student1", "pass", "baseball_01");

if ($db->connect_error) {
    die('Connection failed: ' . $db->connect_error);
}

$sql = 'SELECT * FROM films';

$rs = mysqli_query($db, $sql);

if (!$rs) {
    exit("Error in SQL");
}

require('./fpdf.php');

class RyanPDF extends FPDF
{
    function Header()
    {
        $this->SetFont('Arial', 'BU', 16);
        $this->SetTextColor(107,142,35);
        $this->Cell(0, 10, 'Top 20 Highest-Grossing Films of All Time', 0, 0, 'C');
        $this->ln(15);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }
}

$pdf = new RyanPDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$width_cell = array(15,75,30,18,53);

//General Info about the Topic
$pdf->SetFont('Arial','B',10);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(0, 5, 'The first film to be considered the "Highest Grossing" film was "The Birth of a Nation."',0,1,'C');
$pdf->Cell(0, 5, 'It held this title for 25 years, and since then, 11 other films have taken the title.',0,1,'C');
$pdf->Cell(0, 5, 'Below is the list of the current top 20 highest grossing films.',0,1,'C');
$pdf->Cell(0, 5, 'This list is not adjusted for inflation.',0,0,'C');
$pdf->ln(15);

//Table Header
$pdf->SetFillColor(245,222,179);
$pdf->Cell($width_cell[0],10, 'Rank', 1, 0, 'C',true);
$pdf->Cell($width_cell[1],10, 'Movie Title', 1, 0, 'C',true);
$pdf->Cell($width_cell[2],10, 'Gross', 1, 0, 'C',true);
$pdf->Cell($width_cell[3],10, 'Year', 1, 0, 'C',true);
$pdf->Cell($width_cell[4],10, 'Director(s)', 1, 1, 'C',true);

//Table Data
$pdf->SetFillColor(107,142,35);
$pdf->SetFont('Arial','',10);
$fill = false;

if (mysqli_num_rows($rs) > 0) {
    while ($row = mysqli_fetch_assoc($rs)) {
        $pdf->Cell($width_cell[0],10, $row['id'], 1, 0, 'C', $fill);
        $pdf->Cell($width_cell[1],10, $row['title'], 1, 0, 'C',$fill);
        $pdf->Cell($width_cell[2],10, "$" . number_format($row['gross']), 1, 0, 'C',$fill);
        $pdf->Cell($width_cell[3],10, $row['year'], 1, 0, 'C',$fill);
        $pdf->Cell($width_cell[4],10, $row['director'], 1, 1, 'C',$fill);
        $fill = !$fill;
    }
}

//Table Footer
$pdf->SetFillColor(245,222,179);
$pdf->SetFont('Arial','B',10);
$pdf->Cell($width_cell[0],10, 'Rank', 1, 0, 'C',true);
$pdf->Cell($width_cell[1],10, 'Movie Title', 1, 0, 'C',true);
$pdf->Cell($width_cell[2],10, 'Gross', 1, 0, 'C',true);
$pdf->Cell($width_cell[3],10, 'Year', 1, 0, 'C',true);
$pdf->Cell($width_cell[4],10, 'Director(s)', 1, 1, 'C',true);

$db->close();

$pdf->Output();
?>
