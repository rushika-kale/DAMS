<!DOCTYPE html>

<?php

//Start session
session_start();
 
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['username1']) || (trim($_SESSION['username1']) == '')) {
header('location: home.php');
exit();

}
$username=$_SESSION['username1'];
$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());
$ac=mysql_fetch_array(mysql_query("SELECT access FROM faculty.facdb WHERE username='$username'"));
$fname=mysql_fetch_array(mysql_query("SELECT f_name FROM faculty.profile WHERE username='$username'"));
$fname=mysql_fetch_array(mysql_query("SELECT f_name FROM faculty.profile WHERE username='$username'"));
								if (isset($fname['f_name'])  AND !empty($fname['f_name']))
									$fname=$fname['f_name'];
								else 
									$fname="First Name";
$image = mysql_fetch_array(mysql_query("SELECT images_path FROM  faculty.facimg where username='$username'"));
if (isset($image['images_path'])  AND !empty($image['images_path']))
{
									$image=$image['images_path'];	
}
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
		<div class="frame">
				<div class="data">
			<div id="style1">
			About E-Resource Support System
				</div>
				<div  id="style2">
				E-Resource Spport System is designed to minimize and manage all the paper work that is to be done in department by faculty as well as students.It provides you a automated mechanism like report generation and faculty profile management at single server.</p>

				</div>
			<div id="style1">
				Computer Technology Department
			</div>	
			<div id="style2">
<p>Mission of the Department is to prepare competent need based Computer Engineers in particular and responsible citizens for engineering profession in general. Department takes sustained and continued efforts to educate undergraduates for professional and software development jobs, post-graduate students for academic /R&D assignments, encourage the students to conduct research while interacting and collaborating with industry and research institutions of National and International eminence, design and develop projects to solve real life problems.</p>

<p> The Department offers post-graduate programmes, M. Tech. (CSE), M.E. (by research) and Ph.D. The curricula of programmes have been designed to cater to the ever changing needs and demands of IT industry with a proper blend of professional core and industry aligned electives.</p> 				
			</div>			
		</div>
		</div>
	</body>
</html>