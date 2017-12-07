<?php

$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());
require('fpdf.php');

class PDF extends FPDF
{

function Header()
{
$id=1;
$a=1;
$this->SetFont('Times','',13);
$this->Cell(120,7,'Workshops Attended by faculties',0,'L',0);
$this->Ln(15);
$this->Cell(18,5,'Sr. No.','LTRB',0,'L',0);   // empty cell with left,top, and right borders
$this->Cell(36,5,'Name of Faculty',1,0,'L',0);
$this->Cell(30,5,'Date',1,0,'L',0);
$this->Cell(43,5,'Organization',1,0,'L',0);
$this->Cell(53,5,'Event Name',1,0,'L',0);

$select_query = "SELECT username,wname,wvenue,w_date FROM  faculty.workshop ORDER by username DESC";
$sql = mysql_query($select_query) or die(mysql_error());	
while($row = mysql_fetch_array($sql,MYSQL_BOTH)){
$this->Ln(5);
$this->Cell(18,5,$id,'LTRB','L');   // empty cell with left,top, and right borders
$this->Cell(36,5,$row['username'],'LTRB','L');

$this->Cell(30,5,$row['w_date'],'LTRB');
$this->Cell(43,5,$row['wvenue'],'LTRB');
$this->MultiCell(53,5,$row['wname'],'LTRB');
$id=$id+$a;
}

}
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$pdf->Output();

exit;
				$pdf->Output();	
?>