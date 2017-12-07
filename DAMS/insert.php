<?php

//Start session
session_start();
 
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['username1']) || (trim($_SESSION['username1']) == '')) {
header("location: login.html");
exit();
}$username=$_SESSION['username1'];

$username=$_SESSION['username1'];
//session_start(); /// initialize session
//function check_logged(){
     //global $_SESSION,$username;
    // if (!array_key_exists($_SESSION["logged"],$username)) {
      //    header('Location: data.html');
  //   };
//}; check_logged(); /// function checks if visitor is logged.

 $con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());
$ac=mysql_fetch_array(mysql_query("SELECT access FROM faculty.facdb WHERE username='$username'"));

$sa=$_POST['sal'];
if (isset($_POST['sal'])  AND !empty($_POST['sal']))
$hquery=mysql_query("update profile set sal='".$_POST['sal']."' where username='$username'");
if (isset($_POST['fname'])  AND !empty($_POST['fname']))
$hquery=mysql_query("update profile set f_name='".$_POST['fname']."' where username='$username'");
if (isset($_POST['mname'])  AND !empty($_POST['mname']))
$hquery=mysql_query("update profile set m_name='".$_POST['mname']."' where username='$username'");
if (isset($_POST['lname'])  AND !empty($_POST['lname']))
$hquery=mysql_query("update profile set l_name='".$_POST['lname']."' where username='$username'");
if (isset($_POST['b_dd'])  AND !empty($_POST['b_dd']))
$hquery=mysql_query("update profile set day='".$_POST['b_dd']."' where username='$username'");
if (isset($_POST['b_mm'])  AND !empty($_POST['b_mm']))
$hquery=mysql_query("update profile set month='".$_POST['b_mm']."' where username='$username'");
if (isset($_POST['b_yy'])  AND !empty($_POST['b_yy']))
$hquery=mysql_query("update profile set year='".$_POST['b_yy']."' where username='$username'");
if (isset($_POST['address'])  AND !empty($_POST['address']))
$hquery=mysql_query("update profile set Addr='".$_POST['address']."' where username='$username'");
if (isset($_POST['mob'])  AND !empty($_POST['mob']))
$hquery=mysql_query("update profile set con='".$_POST['mob']."' where username='$username'");
if (isset($_POST['email'])  AND !empty($_POST['email']))
$hquery=mysql_query("update profile set email='".$_POST['email']."' where username='$username'");



if (isset($_POST['marks'])  AND !empty($_POST['marks']))
{
	if($_POST['marks']=="cgpa")
	{
		if (isset($_POST['g_cg'])  AND !empty($_POST['g_cg']))
			$hquery=mysql_query("update fac_qual set g_sc='".$_POST['g_cg'].' CGPA'."' where username='$username'");
	}		
	else
	{
		if (isset($_POST['g_cg'])  AND !empty($_POST['g_cg']))
			$hquery=mysql_query("update fac_qual set g_sc='".$_POST['g_cg'].' %'."' where username='$username'");
	}
}


if (isset($_POST['g_stream'])  AND !empty($_POST['g_stream']))
$hquery=mysql_query("update fac_qual set g_br='".$_POST['g_stream']."' where username='$username'");
if (isset($_POST['g_college'])  AND !empty($_POST['g_college']))
$hquery=mysql_query("update fac_qual set g_clg='".$_POST['g_college']."' where username='$username'");
if (isset($_POST['g_uni'])  AND !empty($_POST['g_uni']))
$hquery=mysql_query("update fac_qual set g_univ='".$_POST['g_uni']."' where username='$username'");
if (isset($_POST['g_yy'])  AND !empty($_POST['g_yy']))
$hquery=mysql_query("update fac_qual set g_year='".$_POST['g_yy']."' where username='$username'");



if (isset($_POST['marks1'])  AND !empty($_POST['marks1']))
{
	if($_POST['marks1']=="cgpa")
	{
		if (isset($_POST['pg_cg'])  AND !empty($_POST['pg_cg']))
			$hquery=mysql_query("update fac_qual set pg_sc='".$_POST['pg_cg'].' CGPA'."' where username='$username'");
	}		
	else
	{
		if (isset($_POST['pg_cg'])  AND !empty($_POST['pg_cg']))
			$hquery=mysql_query("update fac_qual set pg_sc='".$_POST['pg_cg'].' %'."' where username='$username'");
	}
}


//if (isset($_POST['pg_cg'])  AND !empty($_POST['pg_cg']))
//$hquery=mysql_query("update fac_qual set pg_sc='".$_POST['pg_cg']."' where username='$username'");
if (isset($_POST['pg_stream'])  AND !empty($_POST['pg_stream']))
$hquery=mysql_query("update fac_qual set pg_br='".$_POST['pg_stream']."' where username='$username'");
if (isset($_POST['pg_college'])  AND !empty($_POST['pg_college']))
$hquery=mysql_query("update fac_qual set pg_clg='".$_POST['pg_college']."' where username='$username'");
if (isset($_POST['pg_uni'])  AND !empty($_POST['pg_uni']))
$hquery=mysql_query("update fac_qual set pg_univ='".$_POST['pg_uni']."' where username='$username'");
if (isset($_POST['pg_yy'])  AND !empty($_POST['pg_yy']))
$hquery=mysql_query("update fac_qual set pg_year='".$_POST['pg_yy']."' where username='$username'");
if (isset($_POST['phd_stream'])  AND !empty($_POST['phd_stream']))
$hquery=mysql_query("update fac_qual set phd_br='".$_POST['phd_stream']."' where username='$username'");
if (isset($_POST['phd_college'])  AND !empty($_POST['phd_college']))
$hquery=mysql_query("update fac_qual set phd_clg='".$_POST['phd_college']."' where username='$username'");
if (isset($_POST['phd_uni'])  AND !empty($_POST['phd_uni']))
$hquery=mysql_query("update fac_qual set phd_univ='".$_POST['phd_uni']."' where username='$username'");
if (isset($_POST['phd_yy'])  AND !empty($_POST['phd_yy']))
$hquery=mysql_query("update fac_qual set phd_year='".$_POST['phd_yy']."' where username='$username'");
if (isset($_POST['des'])  AND !empty($_POST['des']))
$hquery=mysql_query("update fac_info set des='".$_POST['des']."' where username='$username'");
if (isset($_POST['dept'])  AND !empty($_POST['dept']))
$hquery=mysql_query("update fac_info set dept='".$_POST['dept']."' where username='$username'");
if (isset($_POST['sub'])  AND !empty($_POST['sub']))
$hquery=mysql_query("update fac_info set subt='".$_POST['sub']."' where username='$username'");
if (isset($_POST['j_dd'])  AND !empty($_POST['j_dd']))
$hquery=mysql_query("update fac_info set j_date='".$_POST['j_dd']."' where username='$username'");
if (isset($_POST['j_mm'])  AND !empty($_POST['j_mm']))
$hquery=mysql_query("update fac_info set j_month='".$_POST['j_mm']."' where username='$username'");
if (isset($_POST['j_yy'])  AND !empty($_POST['j_yy']))
$hquery=mysql_query("update fac_info set j_year='".$_POST['j_yy']."' where username='$username'");
//if (isset($_POST['exp_t'])  AND !empty($_POST['exp_t']))
$hquery=mysql_query("update fac_info set exp_teach='".$_POST['exp_t']."' where username='$username'");
//******if (isset($_POST['exp_i'])  /*AND !empty($_POST['exp_i'])*/)    please check for this logic about NULL and ZERO
$hquery=mysql_query("update fac_info set exp_ind='".$_POST['exp_i']."' where username='$username'");
//if (isset($_POST['exp_r'])  AND !empty($_POST['exp_r']))
$hquery=mysql_query("update fac_info set exp_r='".$_POST['exp_r']."' where username='$username'");
if (isset($_POST['g_type'])  AND !empty($_POST['g_type']))
$hquery=mysql_query("update fac_qual set g_type='".$_POST['g_type']."' where username='$username'");
if (isset($_POST['pg_type'])  AND !empty($_POST['pg_type']))
$hquery=mysql_query("update fac_qual set pg_type='".$_POST['pg_type']."' where username='$username'");
if (isset($_POST['pbm'])  AND !empty($_POST['pbm']))
$hquery=mysql_query("update fac_info set pbm='".$_POST['pbm']."' where username='$username'");
if (isset($_POST['award'])  AND !empty($_POST['award']))
$hquery=mysql_query("update fac_info set award='".$_POST['award']."' where username='$username'");
if (isset($_POST['inter'])  AND !empty($_POST['inter']))
$hquery=mysql_query("update fac_info set inter='".$_POST['inter']."' where username='$username'");
if (isset($_POST['book'])  AND !empty($_POST['book']))
$hquery=mysql_query("update fac_info set book='".$_POST['book']."' where username='$username'");
if (isset($_POST['conat'])  AND !empty($_POST['conat']))
$hquery=mysql_query("update fac_info set con='".$_POST['conat']."' where username='$username'");
if (isset($_POST['inter'])  AND !empty($_POST['inter']))
$hquery=mysql_query("update fac_info set inter='".$_POST['inter']."' where username='$username'");
if (isset($_POST['ppr_n'])  AND !empty($_POST['ppr_n']))
$hquery=mysql_query("update fac_info set ppr_n='".$_POST['ppr_n']."' where username='$username'");
if (isset($_POST['ppr_in'])  AND !empty($_POST['ppr_in']))
$hquery=mysql_query("update fac_info set ppr_in='".$_POST['ppr_in']."' where username='$username'");
if (isset($_POST['ppu_n'])  AND !empty($_POST['ppu_n']))
$hquery=mysql_query("update fac_info set ppu_n='".$_POST['ppu_n']."' where username='$username'");
if (isset($_POST['ppu_in'])  AND !empty($_POST['ppu_in']))
$hquery=mysql_query("update fac_info set ppu_in='".$_POST['ppu_in']."' where username='$username'");
if (isset($_POST['ppu_j'])  AND !empty($_POST['ppu_j']))
$hquery=mysql_query("update fac_info set ppu_j='".$_POST['ppu_j']."' where username='$username'");
if (isset($_POST['email1'])  AND !empty($_POST['email1']))
$hquery=mysql_query("update profile set email1='".$_POST['email1']."' where username='$username'");
if (isset($_POST['mob1'])  AND !empty($_POST['mob1']))
$hquery=mysql_query("update profile set con1='".$_POST['mob1']."' where username='$username'");
if (isset($_POST['aos'])  AND !empty($_POST['aos']))
$hquery=mysql_query("update fac_info set special='".$_POST['aos']."' where username='$username'");










//$squery= mysql_query("update profile set l_name='".$_POST['lname']."',day='".$_POST['b_dd']."',month='".$_POST['b_mm']."',year='".$_POST['b_yy']."',Addr='".$_POST['address']."',con='".$_POST['mob']."',email='".$_POST['email']."' WHERE username='$username'");
//$nquery=mysql_query("update fac_qual set g_sc='".$_POST['g_cg']."',g_br='".$_POST['g_stream']."',g_clg='".$_POST['g_college']."',g_univ='".$_POST['g_uni']."',g_year='".$_POST['g_yy']."',pg_sc='".$_POST['pg_cg']."',pg_br='".$_POST['pg_stream']."',pg_clg='".$_POST['pg_college']."',pg_univ='".$_POST['pg_uni']."',pg_year='".$_POST['pg_yy']."' WHERE username='$username'");
//$aquery=mysql_query("update fac_qual set phd_year='".$_POST['phd_yy']."',phd_br='".$_POST['phd_stream']."',phd_clg='".$_POST['phd_college']."',phd_univ='".$_POST['phd_uni']."' where username='$username'");
//$bquery=mysql_query("update fac_info set des='".$_POST['des']."',dept='".$_POST['dept']."',subt='".$_POST['sub']."' where username='$username'");
//$cquery=mysql_query("update faculty.fac_info set j_date='".$_POST['j_dd']."',j_month='".$_POST['j_mm']."',j_year='".$_POST['j_yy']."' where username='$username'");
//$dquery=mysql_query("update faculty.fac_info set exp_teach='".$_POST['exp_t']."',exp_ind='".$_POST['exp_i']."',exp_r='".$_POST['exp_r']."' where username='$username'");
//$equery=mysql_query("update faculty.fac_info set ppr_n='".$_POST['ppr_n']."',ppr_in='".$_POST['ppr_in']."',ppu_n='".$_POST['ppu_n']."',ppu_in='".$_POST['ppu_in']."' where username='$username'");
//$equery=mysql_query("update faculty.fac_info set special='".$_POST['aos']."' where username='username'");






function GetImageExtension($imagetype)
   	 {
       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
	 
	 
	 
if (!empty($_FILES["uploadedimage"]["name"])) {

	$file_name=$_FILES["uploadedimage"]["name"];
	$temp_name=$_FILES["uploadedimage"]["tmp_name"];
	$imgtype=$_FILES["uploadedimage"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename=date("d-m-Y")."-".time().$ext;
	$target_path = "images/".$imagename;
	
	

if(move_uploaded_file($temp_name, $target_path)) {

 	
 	$query_upload=mysql_query("update facimg set images_path='$target_path' where username='$username'")or die("error in $query_upload == ---> ".mysql_error());  
	$query_upload=mysql_query("update facimg set submission_date='".date("Y-m-d")."' where username='$username'")or die("error in $query_upload == ---> ".mysql_error());    
	
	
}else{
header('Location:abc.html');
//   exit("Error While uploading image on the server");
} 

}


/*** check if a file was submitted ***/




mysql_close($con);
header('Location:info.php');





?>