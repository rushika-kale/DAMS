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
$image = mysql_fetch_array(mysql_query("SELECT images_path FROM  faculty.facimg where username='$username'"));
$image = mysql_fetch_array(mysql_query("SELECT images_path FROM  faculty.facimg where username='$username'"));
if (isset($image['images_path'])  AND !empty($image['images_path']))
{
									$image=$image['images_path'];	
}
$fname=mysql_fetch_array(mysql_query("SELECT f_name FROM faculty.profile WHERE username='$username'"));
								if (isset($fname['f_name'])  AND !empty($fname['f_name']))
									$fname=$fname['f_name'];
								else 
									$fname="First Name";

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
		<div class="frame">
				<div class="data">
			<div id="style1">
			<center>Organised Seminar Programmes				</center></div>
			<div class="left">
		
			<input type="button" onclick="location.href='insertsem.php'" value="Insert Data">
			</div>			
			<div class="right">
			<!--input type="button" onclick="TINY.box.show({iframe:'pdf.php',boxid:'frameless',width:750,height:450,fixed:false,maskid:'bluemask',maskopacity:40,closejs:function(){closeJS()}})"class="link1 id="menu_active"" value="Print Data">
	-->		<input type="button" onclick="window.open('examples/pdf6.php')" value="Download pdf">
			<input type="button" onclick="TINY.box.show({iframe:'prworks.php',boxid:'frameless',width:850,height:550,fixed:false,maskid:'bluemask',maskopacity:40,closejs:function(){closeJS()}})"class="link1 id="menu_active""  value="Download excel ">
			</div><br/><br/><br/><br/>				
		<?php
	$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());	
$username=$_SESSION['username1'];	
			$result = mysql_query("SELECT * FROM organisedsem WHERE username='$username'");

echo "<table border='1' width='100%'>
<tr>
<th>Sr.No.</th>
<th>Seminar Title</th>
<th>From</th>
<th>To</th>
<th>Venue</th>


</tr>";
$sr='0';
while($row = mysql_fetch_array($result))
  {
  $sr=$sr+1;
  
  echo "<tr>";
  echo "<td>" . $sr ; ?> &nbsp;<a href='editor.php?user=<?php echo $username; ?>&title=<?php echo $row['name'] ?>&type=<?php echo "organisedsem" ?>'><img src='img/edit.png' height="20px" width="20px"></a><a href='deletevent.php?user=<?php echo $username; ?>&title=<?php echo $row['wname']; ?>&type=<?php echo $type; ?>'><img src='img/delete.png' height="20px"width="20px"class='btnDelete'/></a></td><?php
  echo "<td><a href='detailsem.php?workname=".$row['name']."'>" . $row['name'] . "</a></td>";
  $dat = date("d-m-Y", strtotime($row['w_date']));
  echo "<td>" . $dat . "</td>";
  $dat = date("d-m-Y", strtotime($row['w_date2']));
  echo "<td>" . $dat . "</td>";
  
  echo "<td>".$row['department']."</td>";//venue
  ?>
  <!--<td><a href='iawork.php?user=123'><img src='img/edit.png' height="30px" width="30px"></a><img src='img/delete.png' height="30px"width="30px"class='btnDelete'/></td>-->
  <?php echo "</tr>";
  }
echo "</table></center>";

			?>
		</div>
		</div>
	</body>
</html>