<!DOCTYPE html>

<?php

//Start session
session_start();
 
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['username1']) || (trim($_SESSION['username1']) == '')) {
header('location: home.php');
exit();}
$username=$_SESSION['username1'];

$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());
$ac=mysql_fetch_array(mysql_query("SELECT access FROM faculty.facdb WHERE username='$username'"));

//session_start(); /// initialize session
//function check_logged(){
     //global $_SESSION,$username;
    // if (!array_key_exists($_SESSION["logged"],$username)) {
      //    header('Location: data.html');
  //   };
//}; check_logged(); /// function checks if visitor is logged.
?> 

<html>
<head>
		<link href="css/menu.css" rel="stylesheet" type="text/css" />
		<link href="template1/tabcontent.css" rel="stylesheet" type="text/css" />
		<script src="tabcontent.js" type="text/javascript"></script>
		<script src="tabcontent1.js" type="text/javascript"></script>
		<title>E-Resource Support System</title>
	
		<script src="djs/CalendarPopup1.js" type="text/javascript"></script>
		<SCRIPT LANGUAGE="JavaScript">document.write(getCalendarStyles());</SCRIPT>

	</head>
	<body><form name="data" action="printd.php" onsubmit="return validForm() " method="post" >
		<label>Sort Data by<font color="red"></font></label>
		<select name="sort" class="size3" placeholder="select" >
										<option value="work">Workshop Name</option>
										<option value="dated">Date</option>
		</select>
		<br/><label>Filter data</label><br/>
		<label>From<label>
		<SCRIPT LANGUAGE="JavaScript" ID="jscal1xx">
var cal1xx = new CalendarPopup("testdiv1");
cal1xx.showNavigationDropdowns();
</SCRIPT>
<INPUT TYPE="text" NAME="date1xx" VALUE="" SIZE=25>
<input type="button" class="date" onClick="cal1xx.select(document.forms[0].date1xx,'anchor1xx','yyyy/MM/dd'); return false;" TITLE="cal1xx.select(document.forms[0].date1xx,'anchor1xx','yyyy/MM/dd	'); return false;" NAME="anchor1xx" value="select date" ID="anchor1xx">
<label>To<label>

<INPUT TYPE="text" NAME="date2xx" VALUE="" SIZE=25>
<input type="button" class="date" onClick="cal1xx.select(document.forms[0].date2xx,'anchor2xx','yyyy/MM/dd'); return false;" TITLE="cal1xx.select(document.forms[0].date2xx,'anchor2xx','yyyy/MM/dd	'); return false;" NAME="anchor2xx" value="select date" ID="anchor2xx">
	
		<br/><br/><label>Print data in<font color="red"></font></label>
		<select name="format" class="size2" placeholder="select" >
										<option value="pdf">PDF format</option>
										<option value="excel">MS-Excel Format</option>
		</select><br/>
		<input type="submit"Value="Submit">
		</form>
		<DIV ID="testdiv1" STYLE="position:absolute;visibility:hidden;background-color:white;layer-background-color:white;"></DIV>
			
	</body>
</html>