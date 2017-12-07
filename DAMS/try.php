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



class PDF extends FPDF
{

function Header()
{


$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());
	 $username=$_SESSION['username1'];
									$sal=mysql_fetch_array(mysql_query("SELECT sal FROM faculty.profile WHERE username='$username'"));
						$fname=mysql_fetch_array(mysql_query("SELECT f_name FROM faculty.profile WHERE username='$username'"));
						$mname=mysql_fetch_array(mysql_query("SELECT m_name FROM faculty.profile WHERE username='$username'"));
						$lname=mysql_fetch_array(mysql_query("SELECT l_name FROM faculty.profile WHERE username='$username'"));
						$des=mysql_fetch_array(mysql_query("SELECT des FROM faculty.fac_info WHERE username='$username'"));
						$dept=mysql_fetch_array(mysql_query("SELECT dept FROM faculty.fac_info WHERE username='$username'"));
						$ddj=mysql_fetch_array(mysql_query("SELECT j_date FROM faculty.fac_info WHERE username='$username'"));
						$mmj=mysql_fetch_array(mysql_query("SELECT j_month FROM faculty.fac_info WHERE username='$username'"));
						$yyj=mysql_fetch_array(mysql_query("SELECT j_year FROM faculty.fac_info WHERE username='$username'"));
						$aos=mysql_fetch_array(mysql_query("SELECT special FROM faculty.fac_info WHERE username='$username'"));
						$image=mysql_fetch_array(mysql_query("SELECT images_path FROM faculty.facimg WHERE username='$username'"),MYSQL_BOTH);
						
					
$sal=$sal['sal'];    
$fname=$fname['f_name'];
$mname=$mname['m_name'];
$lname=$lname['l_name'];
$des=$des['des'];
$dept=$dept['dept'];
$ddj=$ddj['j_date'];
$mmj=$mmj['j_month'];
$yyj=$yyj['j_year'];
$aos=$aos['special'];
$image=$image['images_path'];
// Logo

    // Arial bold 15
    $this->SetFont('Times','',13);
    // Move to the right
    
    // Title
    $this->image('header1.png',30,1,130);
    $this->Cell(108,14,$dept,0,'L',0);
    
    // Line break
$this->Image($image,160,17,30);
	//1
    $this->Ln(45);
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
$cont=mysql_fetch_array(mysql_query("SELECT con FROM faculty.profile WHERE username='$username'"));
$cont=$cont['con'];
	$this->Cell(70,8,' Mobile NO.','LTR',0,'L',0); 	// empty cell with left,top, and right borders
$this->Cell(120,8,$cont,1,0,'L',0);

	$this->Ln();
//7
$email=mysql_fetch_array(mysql_query("SELECT email FROM faculty.profile WHERE username='$username'"));
$email=$email['email'];
	$this->Cell(70,8,' Email ID','LTR',0,'L',0); 	// empty cell with left,top, and right borders
$this->Cell(120,8,$email,1,0,'L',0);

	$this->Ln();
//8
	$gs=mysql_fetch_array(mysql_query("SELECT g_sc FROM faculty.fac_qual WHERE username='$username'"));
	$pc=mysql_fetch_array(mysql_query("SELECT pg_sc FROM faculty.fac_qual WHERE username='$username'"));
	$gs=$gs['g_sc'];
	$pc=$pc['pg_sc'];
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
	$expt=mysql_fetch_array(mysql_query("SELECT exp_teach FROM faculty.fac_info WHERE username='$username'"));
	$expi=mysql_fetch_array(mysql_query("SELECT exp_ind FROM faculty.fac_info WHERE username='$username'"));
	$expr=mysql_fetch_array(mysql_query("SELECT exp_r FROM faculty.fac_info WHERE username='$username'"));
	$expt=$expt['exp_teach'];
	$expi=$expi['exp_ind'];
	$expr=$expr['exp_r'];
	$this->Cell(70,8,' Total Experience','LTR',0,'L',0);   // empty cell with left,top, and right borders
$this->Cell(45,8,'Teaching','LTRB',0,'L',0);
$this->Cell(45,8,'Industry',1,0,'L',0);
$this->Cell(30,8,'Research',1,0,'L',0);

	$this->Ln();
$this->Cell(70,8,' in Years','LRB',0,'L',0);  // cell with left and right borders
$this->Cell(45,8,$expt,'LTRB',0,'L',0);
$this->Cell(45,8,$expi,1,0,'L',0);
$this->Cell(30,8,$expr,1,0,'L',0);

	$this->Ln();

	//10
	$ppun=mysql_fetch_array(mysql_query("SELECT ppu_n FROM faculty.fac_info WHERE username='$username'"));
	$ppun=$ppun['ppu_n'];
	$ppuin=mysql_fetch_array(mysql_query("SELECT ppu_in FROM faculty.fac_info WHERE username='$username'"));
	$ppuin=$ppuin['ppu_in'];
	$ppuj=mysql_fetch_array(mysql_query("SELECT ppu_j FROM faculty.fac_info WHERE username='$username'"));
	$ppuj=$ppuj['ppu_j'];
	$this->Cell(70,8,' Paper Published in Journal','LTR',0,'L',0);   // empty cell with left,top, and right borders
$this->Cell(60,8,"National- ".$ppun,'LTR',0,'L',0);
$this->Cell(60,8,"International- ".$ppuin,1,0,'L',0);


	$this->Ln();
$this->Cell(70,8,'','LRB',0,'C',0);  // cell with left and right borders
$this->Cell(60,8,'','LRB',0,'L',0);
$this->Cell(60,8,"Journal- ".$ppuj,1,0,'L',0);


	$this->Ln();
//11
$pprn=mysql_fetch_array(mysql_query("SELECT ppr_n FROM faculty.fac_info WHERE username='$username'"));
	$pprn=$pprn['ppr_n'];
	$pprin=mysql_fetch_array(mysql_query("SELECT ppr_in FROM faculty.fac_info WHERE username='$username'"));
	$pprin=$pprin['ppr_in'];
	
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
	$book=mysql_fetch_array(mysql_query("SELECT book FROM faculty.fac_info WHERE username='$username'"));
	$book=$book['book'];;
	$this->Cell(70,8,' Book Published/Patents','LTR',0,'L',0); 	// empty cell with left,top, and right borders
$this->Cell(120,8,$book,1,0,'L',0);

	$this->Ln();
//14
$pbm=mysql_fetch_array(mysql_query("SELECT pbm FROM faculty.fac_info WHERE username='$username'"));
$pbm=$pbm['pbm'];
	$this->Cell(70,8,' Professional Membership','LTR',0,'L',0); 	// empty cell with left,top, and right borders
$this->Cell(120,8,$pbm,1,0,'L',0);

	$this->Ln();
//15
$cont=mysql_fetch_array(mysql_query("SELECT con FROM faculty.fac_info WHERE username='$username'"));

$cont=$cont['con'];
	$this->Cell(70,8,' Consultancy Activities','LTR',0,'L',0); 	// empty cell with left,top, and right borders
$this->Cell(120,8,$cont,1,0,'L',0);

	$this->Ln();
//16
//	$this->Cell(70,8,' Grands','LTR',0,'L',0); 	// empty cell with left,top, and right borders
//$this->Cell(120,8,'111 Here',1,0,'L',0);

	//$this->Ln();
//17
$award=mysql_fetch_array(mysql_query("SELECT award FROM faculty.fac_info WHERE username='$username'"));
$award=$award['award'];
	$this->Cell(70,8,' Awards','LTR',0,'L',0); 	// empty cell with left,top, and right borders
$this->Cell(120,8,$award,1,0,'L',0);

	$this->Ln();
//18

$inter=mysql_fetch_array(mysql_query("SELECT inter FROM faculty.fac_info WHERE username='$username'"));
$inter=$inter['inter'];
	$this->Cell(70,7,' Interaction with','LTR',0,'L');   // empty cell with left,top, and right borders
$this->MultiCell(120,7,$inter,'LTR','L');
$this->Cell(70,13,' Professional Institution','LRB',0,'L',0);  // cell with left and right borders
$this->Cell(120,13,'','LRB','L');

                $this->Ln(50);

	//$this->Cell(40,5,' ','LTR',0,'L',0);   // empty cell with left,top, and right borders
//$this->Cell(50,5,'111 Here',1,0,'L',0);
//$this->Cell(50,5,'222 Here',1,0,'L',0);

  //              $this->Ln();

//$this->Cell(40,5,'Solid Here','LR',0,'C',0);  // cell with left and right borders
//$this->Cell(50,5,'[ o ] che1','LR',0,'L',0);
//$this->Cell(50,5,'[ x ] che2','LR',0,'L',0);

  //              $this->Ln();

//$this->Cell(40,5,'','LBR',0,'L',0);   // empty cell with left,bottom, and right borders
//$this->Cell(50,5,'[ x ] def3','LRB',0,'L',0);
//$this->Cell(50,5,'[ o ] def4','LRB',0,'L',0);

  //              $this->Ln();
    //            $this->Ln();
      //          $this->Ln();
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

$pdf->Output();

exit;
?>