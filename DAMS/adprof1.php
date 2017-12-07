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
		<link href="css/layout1.css" rel="stylesheet" type="text/css" />
		<link href="css/menu.css" rel="stylesheet" type="text/css" />
		<link href="js/menu/tabcontent.css" rel="stylesheet" type="text/css" />
		<script src="js/tabcontent.js" type="text/javascript"></script>
		<script src="js/tabcontent1.js" type="text/javascript"></script>
		<script src="js/tinybox.js" type="text/javascript"></script>
        <script src="js/short.js" type="text/javascript"></script>
		<title>E-Resource Support System</title>
	</head>
	<body>
		<header>
		</header>
		<div class="container">
			<script type="text/javascript">
								ajaxinclude("qlink.php");
							</script>
		</div>
		<div class="frame">
			    	<script type="text/javascript">
								ajaxinclude("updates.php");
							</script>
		
		</div>
		<form method="post" action="examples/pdf20a.php">
		<div class="frame">
				<div class="data">
			<div id="style1">
			<center>Sessionwise Faculty Profile	</center></div>
			<br>		
						<div id="style1">
			<center>Select Session: <select name="session">
				<option>All</option>
				<option>2012_13</option>
				<option>2013_14</option>
				<option>2014_15</option>
				<option>2015_16</option>
				<option>2016_17</option>
			</select></center>
		</div>
		<br/><br/>
		<center>
			Click to generate all faculty's List<br/>
		<input type="submit" value="PDF Download">
	<!--<input type="button" onclick="window.open('examples/pdf20.php')" value="PDF Download">-->
			</center></div>
		</div>
		</form>
	</body>
</html>