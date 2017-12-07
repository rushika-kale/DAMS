<?php

//Start session
session_start();
 ini_set("session.auto_start",0);
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['username1']) || (trim($_SESSION['username1']) == '')) {
header("location: login.html");
exit();
$username=$_SESSION['username1'];
}

//session_start(); /// initialize session
//function check_logged(){
     //global $_SESSION,$username;
    // if (!array_key_exists($_SESSION["logged"],$username)) {
      //    header('Location: data.html');
  //   };
//}; check_logged(); /// function checks if visitor is logged.
require('fpdf.php');

$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());
	 $username=$_SESSION['username1'];
     $query1=mysql_query("SELECT *
FROM faculty.profile
FULL OUTER JOIN faculty.fac_info
ON profile.username=fac_info.username");
     $que=mysql_query("SELECT * FROM faculty.profile");
     $que1=mysql_query("SELECT * FROM faculty.facimg");
     $que2=mysql_query("SELECT * FROM faculty.facinfo");								
	$que3=mysql_query("SELECT * FROM faculty.facqual");					
while(($row=mysql_fetch_array($que)))
{	

$sal=$row['sal'];    
$fname=$row['f_name'];
$mname=$row['m_name'];
$lname=$row['l_name'];
$des=$row2['des'];
$dept=$row2['dept'];
$ddj=$row2['j_date'];
$mmj=$row2['j_month'];
$yyj=$row2['j_year'];
$aos=$row2['special'];
$image=$row['images_path'];
class PDF extends FPDF
{

function Header()
{



// Logo

    // Arial bold 15
    $this->SetFont('Times','',13);
    // Move to the right
    
    // Title
    $this->Cell(90,5,$dept,0,'L',0);
    // Line break
$this->Image($image,160,10,30);
	//1
    $this->Ln(40);
	$this->Cell(70,8,' Name of teaching Staff','LTR',0,'L',0); 	// empty cell with left,top, and right borders
$this->Cell(120,8,$sal." ".$fname." ".$mname." ".$lname,1,0,'L',0);

	$this->Ln();
//2
	$this->Cell(70,8,' Designation','LTR',0,'L',0); 	// empty cell with left,top, and right borders
$this->Cell(120,8,$des,1,0,'L',0);

	$this->Ln();
//3
	$this->Cell(70,8,' Department','LTR',0,'L',0); 	// empty cell with left,top, and right borders
$this->Cell(120,8,$dept,1,0,'L',0);

	$this->Ln();
//4
	$this->Cell(70,8,' Date of Joining Institution','LTR',0,'L',0); 	// empty cell with left,top, and right borders
$this->Cell(120,8,$ddj."/".$mmj."/".$yyj,1,0,'L',0);

	$this->Ln();
//5
	$this->Cell(70,8,' Area of Specialization','LTR',0,'L',0); 	// empty cell with left,top, and right borders
$this->Cell(120,8,$aos,1,0,'L',0);

	$this->Ln();
//6
$cont=$row['con'];
	$this->Cell(70,8,' Mobile NO.','LTR',0,'L',0); 	// empty cell with left,top, and right borders
$this->Cell(120,8,$cont,1,0,'L',0);

	$this->Ln();
//7

$email=$row['email'];
	$this->Cell(70,8,' Email ID','LTR',0,'L',0); 	// empty cell with left,top, and right borders
$this->Cell(120,8,$email,1,0,'L',0);

	$this->Ln();
//8

	$gs=$row['g_sc'];
	$pc=$row['pg_sc'];
	$this->Cell(70,8,' Qualification With','LTR',0,'L',0);   // empty cell with left,top, and right borders
$this->Cell(45,8,'UG','LTRB',0,'L',0);
$this->Cell(45,8,'PG',1,0,'L',0);
$this->Cell(30,8,'Ph.D',1,0,'L',0);

	$this->Ln();
$this->Cell(70,8,' Class/ Grade','LRB',0,'L',0);  // cell with left and right borders
$this->Cell(45,8,$gs,'LTRB',0,'L',0);
$this->Cell(45,8,$pc,1,0,'L',0);
$this->Cell(30,8,' ',1,0,'L',0);

	$this->Ln();
//9
    $expt=$row['exp_teach'];
	$expi=$row['exp_ind'];
	$expr=$row['exp_r'];
	$this->Cell(70,8,' Total Experience','LTR',0,'L',0);   // empty cell with left,top, and right borders
$this->Cell(45,8,'Teaching','LTRB',0,'L',0);
$this->Cell(45,8,'Industry',1,0,'L',0);
$this->Cell(30,8,'Research',1,0,'L',0);

	$this->Ln();
$this->Cell(70,8,' In Years','LRB',0,'L',0);  // cell with left and right borders
$this->Cell(45,8,$expt,'LTRB',0,'L',0);
$this->Cell(45,8,$expi,1,0,'L',0);
$this->Cell(30,8,$expr,1,0,'L',0);

	$this->Ln();

	//10
	
	$ppun=$row['ppu_n'];
	
	$ppuin=$row['ppu_in'];
	
	$ppuj=$row['ppu_j'];
	$this->Cell(70,8,' Paper Published','LTR',0,'L',0);   // empty cell with left,top, and right borders
$this->Cell(60,8,"National- ".$ppun,'LTR',0,'L',0);
$this->Cell(60,8,"International- ".$ppuin,1,0,'L',0);


	$this->Ln();
$this->Cell(70,8,'','LRB',0,'C',0);  // cell with left and right borders
$this->Cell(60,8,'','LRB',0,'L',0);
$this->Cell(60,8,"Journal- ".$ppuj,1,0,'L',0);


	$this->Ln();
//11

	$pprn=$row['ppr_n'];
	
	$pprin=$row['ppr_in'];
	
$this->Cell(70,8,' Paper Presented','LTR',0,'L',0);   // empty cell with left,top, and right borders
$this->Cell(60,8,'National -4','LTR',0,'L',0);
$this->Cell(60,8,'International- 4','LTR',0,'L',0);

	$this->Ln();
$this->Cell(70,8,' in Conferences','LRB',0,'L',0);  // cell with left and right borders
$this->Cell(60,8,' ','LRB',0,'L',0);
$this->Cell(60,8,' ','LRB',0,'L',0);

	$this->Ln();
//12
	//$this->Cell(70,8,' Ph.D Guide','LTR',0,'L',0); 	// empty cell with left,top, and right borders
//$this->Cell(120,8,'111 Here',1,0,'L',0);

	//$this->Ln();

	//13
	
	$book=$row['book'];;
	$this->Cell(70,8,' Book Published/Patents','LTR',0,'L',0); 	// empty cell with left,top, and right borders
$this->Cell(120,8,$book,1,0,'L',0);

	$this->Ln();
//14

$pbm=$row['pbm'];
	$this->Cell(70,8,' Professional Membership','LTR',0,'L',0); 	// empty cell with left,top, and right borders
$this->Cell(120,8,$pbm,1,0,'L',0);

	$this->Ln();
//15


$cont=$row['con'];
	$this->Cell(70,8,' Consultancy Activities','LTR',0,'L',0); 	// empty cell with left,top, and right borders
$this->Cell(120,8,$cont,1,0,'L',0);

	$this->Ln();

$award=$row['award'];
	$this->Cell(70,8,' Awards','LTR',0,'L',0); 	// empty cell with left,top, and right borders
$this->Cell(120,8,$award,1,0,'L',0);

	$this->Ln();
//18


$inter=$row['inter'];
	$this->Cell(70,7,' Interaction with','LTR',0,'L');   // empty cell with left,top, and right borders
$this->MultiCell(120,7,$inter,'LTR','L');
$this->Cell(70,13,' Professional Institution','LRB',0,'L',0);  // cell with left and right borders
$this->Cell(120,13,'','LRB','L');

                $this->Ln(50);

}

// Page footer
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
}
$pdf->Output();

exit;
?>