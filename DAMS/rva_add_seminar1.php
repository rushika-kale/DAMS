<?php

include 'rva_common.php';
 
$name=$_POST['namepr'];
$hquery=mysqli_query($con,"insert into organisedsem(username,name) values ('$username','$name')");

if (isset($_POST['session'])  AND !empty($_POST['session']))
$hquery=mysqli_query($con,"update organisedsem set session='".$_POST['session']."' where username='$username'&& name='$name'");

if (isset($_POST['tarea'])  AND !empty($_POST['tarea']))
$hquery=mysqli_query($con,"update organisedsem set tarea='".$_POST['tarea']."' where username='$username'&& name='$name'");


if (isset($_POST['thelist'])  AND !empty($_POST['thelist']))
{
	$hquery=mysqli_query($con,"update organisedsem set tech_body='".$_POST['thelist']."' where username='$username'&& name='$name'");
	if($_POST['thelist']=="Custom")
		$hquery=mysqli_query($con,"update organisedsem set tech_body='".$_POST['theinput']."' where username='$username'&& name='$name'");
}
if (isset($_POST['finance'])  AND !empty($_POST['finance']))
$hquery=mysqli_query($con,"update organisedsem set sponsor='".$_POST['finance']."' where username='$username'&& name='$name'");
if (isset($_POST['dayinput'])  AND !empty($_POST['dayinput']))
$hquery=mysqli_query($con,"update organisedsem set days='".$_POST['dayinput']."' where username='$username'&& name='$name'");
if (isset($_POST['organiser'])  AND !empty($_POST['organiser']))
$hquery=mysqli_query($con,"update organisedsem set role='".$_POST['organiser']."' where username='$username'&& name='$name'");
if (isset($_POST['convenor'])  AND !empty($_POST['convenor']))
$hquery=mysqli_query($con,"update organisedsem set convenor='".$_POST['convenor']."' where username='$username'&& name='$name'");
if (isset($_POST['coconvenor'])  AND !empty($_POST['coconvenor']))
$hquery=mysqli_query($con,"update organisedsem set coconvenor='".$_POST['coconvenor']."' where username='$username'&& name='$name'");
if (isset($_POST['coordinator'])  AND !empty($_POST['coordinator']))
$hquery=mysqli_query($con,"update organisedsem set coordinator='".$_POST['coordinator']."' where username='$username'&& name='$name'");
if (isset($_POST['cocoordinator'])  AND !empty($_POST['cocoordinator']))
$hquery=mysqli_query($con,"update organisedsem set cocoordinator='".$_POST['cocoordinator']."' where username='$username'&& name='$name'");
if (isset($_POST['organisers'])  AND !empty($_POST['organisers']))
$hquery=mysqli_query($con,"update organisedsem set organiser='".$_POST['organisers']."' where username='$username'&& name='$name'");
if (isset($_POST['organisedept'])  AND !empty($_POST['organisedept']))
$hquery=mysqli_query($con,"update organisedsem set department='".$_POST['organisedept']."' where username='$username'&& name='$name'");
if (isset($_POST['participant'])  AND !empty($_POST['participant']))
$hquery=mysqli_query($con,"update organisedsem set part_type='".$_POST['participant']."' where username='$username'&& name='$name'");

if (isset($_POST['partfrom'])  AND !empty($_POST['partfrom']))
$hquery=mysqli_query($con,"update organisedsem set partfrom='".$_POST['partfrom']."' where username='$username'&& name='$name'");

if (isset($_POST['count'])  AND !empty($_POST['count']))
$hquery=mysqli_query($con,"update organisedsem set count='".$_POST['count']."' where username='$username'&& name='$name'");
if (isset($_POST['s1name'])  AND !empty($_POST['s1name']))
$hquery=mysqli_query($con,"update organisedsem set s1_name='".$_POST['s1name']."' where username='$username'&& name='$name'");
if (isset($_POST['s1institute'])  AND !empty($_POST['s1institute']))
$hquery=mysqli_query($con,"update organisedsem set s1_institute='".$_POST['s1institute']."' where username='$username'&& name='$name'");
if (isset($_POST['s1contact'])  AND !empty($_POST['s1contact']))
$hquery=mysqli_query($con,"update organisedsem set s1_contact='".$_POST['s1contact']."' where username='$username'&& name='$name'");
if (isset($_POST['s1email'])  AND !empty($_POST['s1email']))
$hquery=mysqli_query($con,"update organisedsem set s1_email='".$_POST['s1email']."' where username='$username'&& name='$name'");
if (isset($_POST['s2name'])  AND !empty($_POST['s2name']))
$hquery=mysqli_query($con,"update organisedsem set s2_name='".$_POST['s2name']."' where username='$username'&& name='$name'");
if (isset($_POST['s2institute'])  AND !empty($_POST['s2institute']))
$hquery=mysqli_query($con,"update organisedsem set s2_institute='".$_POST['s2institute']."' where username='$username'&& name='$name'");
if (isset($_POST['s2contact'])  AND !empty($_POST['s2contact']))
$hquery=mysqli_query($con,"update organisedsem set s2_contact='".$_POST['s2contact']."' where username='$username'&& name='$name'");
if (isset($_POST['s2email'])  AND !empty($_POST['s2email']))
$hquery=mysqli_query($con,"update organisedsem set s2_email='".$_POST['s2email']."' where username='$username'&& name='$name'");
if (isset($_POST['s3name'])  AND !empty($_POST['s3name']))
$hquery=mysqli_query($con,"update organisedsem set s3_name='".$_POST['s3name']."' where username='$username'&& name='$name'");
if (isset($_POST['s3institute'])  AND !empty($_POST['s3institute']))
$hquery=mysqli_query($con,"update organisedsem set s3_institute='".$_POST['s3institute']."' where username='$username'&& name='$name'");
if (isset($_POST['s3contact'])  AND !empty($_POST['s3contact']))
$hquery=mysqli_query($con,"update organisedsem set s3_contact='".$_POST['s3contact']."' where username='$username'&& name='$name'");
if (isset($_POST['s3email'])  AND !empty($_POST['s3email']))
$hquery=mysqli_query($con,"update organisedsem set s3_email='".$_POST['s3email']."' where username='$username'&& name='$name'");
if (isset($_POST['s4name'])  AND !empty($_POST['s4name']))
$hquery=mysqli_query($con,"update organisedsem set s4_name='".$_POST['s4name']."' where username='$username'&& name='$name'");
if (isset($_POST['s4institute'])  AND !empty($_POST['s4institute']))
$hquery=mysqli_query($con,"update organisedsem set s4_institute='".$_POST['s4institute']."' where username='$username'&& name='$name'");
if (isset($_POST['s4contact'])  AND !empty($_POST['s4contact']))
$hquery=mysqli_query($con,"update organisedsem set s4_contact='".$_POST['s4contact']."' where username='$username'&& name='$name'");
if (isset($_POST['s4email'])  AND !empty($_POST['s4email']))
$hquery=mysqli_query($con,"update organisedsem set s4_email='".$_POST['s4email']."' where username='$username'&& name='$name'");

/*if (isset($_POST['s5name'])  AND !empty($_POST['s5name']))
$hquery=mysqli_query($con,"update organisedsem set s5_name='".$_POST['s5name']."' where username='$username'&& name='$name'");
if (isset($_POST['s5institute'])  AND !empty($_POST['s5institute']))
$hquery=mysqli_query($con,"update organisedsem set s5_institute='".$_POST['s5institute']."' where username='$username'&& name='$name'");
if (isset($_POST['s5contact'])  AND !empty($_POST['s5contact']))
$hquery=mysqli_query($con,"update organisedsem set s5_contact='".$_POST['s5contact']."' where username='$username'&& name='$name'");
if (isset($_POST['s5email'])  AND !empty($_POST['s5email']))
$hquery=mysqli_query($con,"update organisedsem set s5_email='".$_POST['s5email']."' where username='$username'&& name='$name'");*/
/*if (isset($_POST['sdate'])  AND !empty($_POST['sdate']))
$hquery=mysqli_query($con,"update organisedsem set s4_email='".$_POST['s4email']."' where username='$username'&& name='$name'");
/*if (isset($_POST['s4email'])  AND !empty($_POST['s4email']))
$hquery=mysqli_query($con,"update organisedsem set s4_email='".$_POST['s4email']."' where username='$username'&& name='$name'");*/


//$date=$_POST['sdate'];
//$date = str_replace('/', '-', $date);
//$date = date("Y-m-d", strtotime($date));
$sdate=$_POST['sdate'];
if (isset($_POST['sdate'])  AND !empty($_POST['sdate']))
	{
	
		$hquery=mysqli_query($con,"update organisedsem set w_date='$sdate' where username='$username'&& name='$name'");
	}
//$date=$_POST['edate'];
//$date = date("Y-m-d", strtotime($date));
$edate=$_POST['edate'];
if (isset($_POST['edate'])  AND !empty($_POST['edate']))
	{
		$hquery=mysqli_query($con,"update organisedsem set w_date2='$edate' where username='$username'&& name='$name'");	
	}

mysqli_close($con);

header("Location: rva_add_organized.php?success=1");

?>