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
$name=$_POST['namepr'];
$hquery=mysql_query("insert into organisedfdp(username,name) values ('$username','$name')");
if (isset($_POST['thelist'])  AND !empty($_POST['thelist']))
$hquery=mysql_query("update organisedfdp set tech_body='".$_POST['thelist']."' where username='$username'&& name='$name'");
if (isset($_POST['finance'])  AND !empty($_POST['finance']))
$hquery=mysql_query("update organisedfdp set sponsor='".$_POST['finance']."' where username='$username'&& name='$name'");
if (isset($_POST['dayinput'])  AND !empty($_POST['dayinput']))
$hquery=mysql_query("update organisedfdp set days='".$_POST['dayinput']."' where username='$username'&& name='$name'");
if (isset($_POST['organiser'])  AND !empty($_POST['organiser']))
$hquery=mysql_query("update organisedfdp set role='".$_POST['organiser']."' where username='$username'&& name='$name'");
if (isset($_POST['convenor'])  AND !empty($_POST['convenor']))
$hquery=mysql_query("update organisedfdp set convenor='".$_POST['convenor']."' where username='$username'&& name='$name'");
if (isset($_POST['coconvenor'])  AND !empty($_POST['coconvenor']))
$hquery=mysql_query("update organisedfdp set coconvenor='".$_POST['coconvenor']."' where username='$username'&& name='$name'");
if (isset($_POST['coordinator'])  AND !empty($_POST['coordinator']))
$hquery=mysql_query("update organisedfdp set coordinator='".$_POST['coordinator']."' where username='$username'&& name='$name'");
if (isset($_POST['cocoordinator'])  AND !empty($_POST['cocoordinator']))
$hquery=mysql_query("update organisedfdp set cocoordinator='".$_POST['cocoordinator']."' where username='$username'&& name='$name'");
if (isset($_POST['organisers'])  AND !empty($_POST['organisers']))
$hquery=mysql_query("update organisedfdp set organiser='".$_POST['organisers']."' where username='$username'&& name='$name'");
if (isset($_POST['organisedept'])  AND !empty($_POST['organisedept']))
$hquery=mysql_query("update organisedfdp set department='".$_POST['organisedept']."' where username='$username'&& name='$name'");
if (isset($_POST['participant'])  AND !empty($_POST['participant']))
$hquery=mysql_query("update organisedfdp set part_type='".$_POST['participant']."' where username='$username'&& name='$name'");
if (isset($_POST['count'])  AND !empty($_POST['count']))
$hquery=mysql_query("update organisedfdp set count='".$_POST['count']."' where username='$username'&& name='$name'");
if (isset($_POST['s1name'])  AND !empty($_POST['s1name']))
$hquery=mysql_query("update organisedfdp set s1_name='".$_POST['s1name']."' where username='$username'&& name='$name'");
if (isset($_POST['s1institute'])  AND !empty($_POST['s1institute']))
$hquery=mysql_query("update organisedfdp set s1_institute='".$_POST['s1institute']."' where username='$username'&& name='$name'");
if (isset($_POST['s1contact'])  AND !empty($_POST['s1contact']))
$hquery=mysql_query("update organisedfdp set s1_contact='".$_POST['s1contact']."' where username='$username'&& name='$name'");
if (isset($_POST['s1email'])  AND !empty($_POST['s1email']))
$hquery=mysql_query("update organisedfdp set s1_email='".$_POST['s1email']."' where username='$username'&& name='$name'");
if (isset($_POST['s2name'])  AND !empty($_POST['s2name']))
$hquery=mysql_query("update organisedfdp set s2_name='".$_POST['s2name']."' where username='$username'&& name='$name'");
if (isset($_POST['s2institute'])  AND !empty($_POST['s2institute']))
$hquery=mysql_query("update organisedfdp set s2_institute='".$_POST['s2institute']."' where username='$username'&& name='$name'");
if (isset($_POST['s2contact'])  AND !empty($_POST['s2contact']))
$hquery=mysql_query("update organisedfdp set s2_contact='".$_POST['s2contact']."' where username='$username'&& name='$name'");
if (isset($_POST['s2email'])  AND !empty($_POST['s2email']))
$hquery=mysql_query("update organisedfdp set s2_email='".$_POST['s2email']."' where username='$username'&& name='$name'");
if (isset($_POST['s3name'])  AND !empty($_POST['s3name']))
$hquery=mysql_query("update organisedfdp set s3_name='".$_POST['s3name']."' where username='$username'&& name='$name'");
if (isset($_POST['s3institute'])  AND !empty($_POST['s3institute']))
$hquery=mysql_query("update organisedfdp set s3_institute='".$_POST['s3institute']."' where username='$username'&& name='$name'");
if (isset($_POST['s3contact'])  AND !empty($_POST['s3contact']))
$hquery=mysql_query("update organisedfdp set s3_contact='".$_POST['s3contact']."' where username='$username'&& name='$name'");
if (isset($_POST['s3email'])  AND !empty($_POST['s3email']))
$hquery=mysql_query("update organisedfdp set s3_email='".$_POST['s3email']."' where username='$username'&& name='$name'");
if (isset($_POST['s4name'])  AND !empty($_POST['s4name']))
$hquery=mysql_query("update organisedfdp set s4_name='".$_POST['s4name']."' where username='$username'&& name='$name'");
if (isset($_POST['s4institute'])  AND !empty($_POST['s4institute']))
$hquery=mysql_query("update organisedfdp set s4_institute='".$_POST['s4institute']."' where username='$username'&& name='$name'");
if (isset($_POST['s4contact'])  AND !empty($_POST['s4contact']))
$hquery=mysql_query("update organisedfdp set s4_contact='".$_POST['s4contact']."' where username='$username'&& name='$name'");
if (isset($_POST['s4email'])  AND !empty($_POST['s4email']))
$hquery=mysql_query("update organisedfdp set s4_email='".$_POST['s4email']."' where username='$username'&& name='$name'");
if (isset($_POST['sdate'])  AND !empty($_POST['sdate']))
$hquery=mysql_query("update organisedfdp set s4_email='".$_POST['s4email']."' where username='$username'&& name='$name'");
if (isset($_POST['s4email'])  AND !empty($_POST['s4email']))
$hquery=mysql_query("update organisedfdp set s4_email='".$_POST['s4email']."' where username='$username'&& name='$name'");

$date=$_POST['sdate'];
$date = str_replace('/', '-', $date);
$date = date("Y-m-d", strtotime($date));
if (isset($_POST['sdate'])  AND !empty($_POST['sdate']))
	{
	
		$hquery=mysql_query("update organisedfdp set w_date='$date' where username='$username'&& name='$name'");
	}
$date=$_POST['edate'];
$date = date("Y-m-d", strtotime($date));
if (isset($_POST['edate'])  AND !empty($_POST['edate']))
	{
		$hquery=mysql_query("update organisedfdp set w_date2='$date' where username='$username'&& name='$name'");	
	}
mysql_close($con);
header('Location:orfdp.php');

?>