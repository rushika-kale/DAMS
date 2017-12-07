<!DOCTYPE html>

<?php

//Start session
session_start();
 
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['username1']) || (trim($_SESSION['username1']) == '')) {
header('location: home.php');
exit();}
else
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
		<title>E-Resource Support System</title>
	</head>
	<body>
		<header>
		</header>
		<div class="container">
			<ul id="nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="info.php">Profile</a>
					<ul class="subs">
						<li><a href="data.php">Edit Profile</a></li>
						<li><a href="info.php">View Profile</a></li>
					</ul>
				</li>
				<li><a class="hsubs" href="workshop.php">Workshops</a>
					<ul class="subs">
						<li><a href="Atworkshop.php">Attended</a></li>
						<li><a href="insertwork.php">Organised</a></li>
					</ul>
				</li>
				<li><a class="hsubs" href="#">Seminars</a>
					<ul class="subs">
						<li><a href="#">Attended</a></li>
						<li><a href="#">Organised</a></li>
					</ul>
				</li>
				<li><a href="#">FDP/STTP</a>
					<ul class="subs">
						<li><a href="#">Attended</a></li>
						<li><a href="#">Organised</a></li>
					</ul>
				</li>
				<li><a href="#">Trainig Programme</a>
					<ul class="subs">
						<li><a href="#">Attended</a></li>
						<li><a href="#">Organised</a></li>
					</ul>
				</li>
				<li><a href="#">Publications</a>
					<ul class="subs">
						<li><a href="journal.php">Journal</a>
						</li>
						<li><a href="#">Conferences</a></li>
						<li><a href="#">Book</a></li>
						<li><a href="#">All others</a></li>
					</ul>
				</li><?php
if($ac['access']==1){	
				echo'
				<li><a href="#">Admin</a>
					<ul class="subs">
						<li><a href="create.php">Create User</a></li>
						<li><a href="adprof.php">faculty Profiles</a></li>
						
						<li><a href="#">Other Documents</a></li>
					</ul>
				</li>';}
				else {echo'
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				</li>';
				}?>
				<li><div class="size5"></div>&nbsp;</li>
				<li><a href="logout.php">Logout</a></li>
				<div id="lavalamp"></div>
			</ul>
		</div>
		<div class="frame">
			<div class="update">
				<marquee direction="up">
					<p>Welcome username to ERP
					</p>
				</marquee>
			</div>
		</div>
		<div class="frame">
		<section class="register">
				<div class="data">
			<div id="style1">
			<center>  User Created Successfully		</center></div>
		<br/><br/><br/><br/>				
		<?php
	
?></div></section>
		</div>
	</body>
</html>