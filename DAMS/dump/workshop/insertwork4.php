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
		<link href="css/boot-tag.css" rel="stylesheet" type="text/css" />
		<link href="css/menu.css" rel="stylesheet" type="text/css" />
		<link href="js/menu/tabcontent.css" rel="stylesheet" type="text/css" />
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/verify.notify.js" type="text/javascript"></script>
		<script src="js/tabcontent.js" type="text/javascript"></script>
		<script src="js/tabcontent1.js" type="text/javascript"></script>
		<script src="js/tinybox.js" type="text/javascript"></script>
		<script src="js/boot-tag.js" type="text/javascript"></script>
		
		<script src="djs/CalendarPopup1.js" type="text/javascript"></script>
		<SCRIPT LANGUAGE="JavaScript">document.write(getCalendarStyles());</SCRIPT>
		
		
	
		<script>
		var room = 1;
function add_fields() {
    room++;
	var anchor="'anchor";
	var xx="xx'";
	var xxa="xx";
	var date="'date";
	var datea="date";
	var da="'yyyy/MM/dd'";
    var objTo = document.getElementById('room_fileds')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<div class="label">Speaker' + room +':</div><div class="content"><table><tr><td style="width:160px;">Name of Speaker:</td> <td><input type="text" data-validate="required" class="size3"  /></td></tr><tr><td style="width:160px;">Institute Name: </td><td><input type="text" class="size3" value="" /></td></tr><tr><td style="160px;">Date of lecture:</td><td><input type="text"  NAME='+date+room+xx+' VALUE="" SIZE=25><input type="button" class="date"onClick="cal1xx.select(document.forms[0].date'+room+'xx,'+anchor+room+xx+','+da+'); return false;" TITLE="cal1xx.select(document.forms[0].date'+room+'xx,'+anchor+room+xx+','+da+'); return false;" NAME='+anchor+room+xx+' value="select date" ID='+anchor+room+xx+'></td></tr><tr><td style="width:160px;">Contact No.:</td><td><input type="text" data-validate="phone" placeholder="Number"></td></tr><tr><td style="width:160px;">Email:</td><td><input type="text"data-validate="email" placeholder="email"></td></tr><table></div><DIV ID="testdiv1" STYLE="position:fixed;visibility:hidden;background-color:white;layer-background-color:white;"></DIV>';
        objTo.appendChild(divtest)
}

		</script>
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
					<p>aaaaaaaaaaaaaaaaaaaaa
					aaaaaaaaaaaaa
					aaaaaaaaa
					</p>
				</marquee>
			</div>
		</div>
		<div class="frame">
				<div class="data">
			<div id="style1">
			<center>Workshops
				</center></div>
			<?php
	$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());	
$username=$_SESSION['username1'];	
			$result = mysql_query("SELECT * FROM workshop WHERE username='$username'");
			?>
		<form  class="form" action="insertaa.php"  method="post">
					<ul class="tabs1" data-persist="true">
						<li><input type="submit"Value="Submit"></li>
					</ul>
					<ul class="tabs" data-persist="true">
						
						<li><a href="#view1">Workshop Details</a></li>
						<li><a href="#view2">Participants Details</a></li>
						<li><a href="#view3">Speaker Details</a></li>
						
					</ul>	
					<div class="tabcontents">
						<section class="register">
						
							<div id="view3">
								<font size="3">
								<div id="room_fileds">
          
									<div class='label'>Speaker1:</div>
									<div class="content">
										<table>
                                        <tr><td style="width:160px;">Name of Speaker:</td> <td><input type="text" data-validate="required" class="size3"/></td></tr>
										<tr><td style="width:160px;">Institute Name:</td> <td><input type="text" class="size3" value="" /></td></tr>
										<SCRIPT LANGUAGE="JavaScript" ID="jscal1xx">
				var cal1xx = new CalendarPopup("testdiv1");
				cal1xx.showNavigationDropdowns();
			</SCRIPT>
			<tr><td style="width:160px;">Date of Lecture:</td><td><INPUT TYPE="text" NAME="date4xx" VALUE="" SIZE=25>
			<input type="button" class="date"onClick="cal1xx.select(document.forms[0].date4xx,'anchor4xx','yyyy/MM/dd'); return false;" TITLE="cal1xx.select(document.forms[0].date4xx,'anchor4xx','yyyy/MM/dd	'); return false;" NAME="anchor4xx" value="select date" ID="anchor4xx"><br/></td></tr>
										<tr><td style="width:160px;">Contact Number:</td><td><input type="text" class="size3" data-validate="phone" placeholder="Number"></td></tr>
										<tr> <td style="width:160px;">Email Id:</td><td><input type="text"class="size3"data-validate="email" placeholder="email"></td></tr>
                                        </table>
									</div>
								   </div>
								   <input type="button" id="more_fields" onclick="add_fields(this);"  value="Add More Speaker"  >
								   <!--<option  onchange="{add_fields();if(this.options[this.selectedIndex].onclick != null){this.options[this.selectedIndex].onclick(this);}}">1</option>
								   <option>2</option>
								   </select>-->
														
								
								</font>
							</div>					
						<ul class="tabs1" data-persist="true">
						<li><input type="submit"Value="Previous" onclick="location.href='insertwork2.php'"></li>
						<li><input type="submit"Value="Submit"></li>
					</ul>
						</section>
					</div>
				</form>
				<script type="text/javascript">
					$('form').verify.notify();
				</script>
<DIV ID="testdiv1" STYLE="position:fixed;visibility:hidden;background-color:white;layer-background-color:white;"></DIV>
				

		</div>
		</div>
	</body>
</html>