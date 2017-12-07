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
	var date="'date";
	var da="'yyyy/MM/dd'";
    var objTo = document.getElementById('room_fileds')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<div class="label">Speaker' + room +':</div><div class="content">Name of Speaker: <input type="text" data-validate="required" class="size3"  /><br/>Institute Name: <input type="text" class="size3" value="" /><br/>Date of lecture:<input type="text"  NAME='+date+room+xx+' VALUE="" SIZE=25><input type="button" class="date"onClick="cal1xx.select(document.forms[0].'+date+room+xx+','+anchor+room+xx+','+da+'); return false;" TITLE="cal1xx.select(document.forms[0].'+date+room+xx+','+anchor+room+xx+','+da+'); return false;" NAME='+anchor+room+xx+' value="select date" ID='+anchor+room+xx+'><br/>Contact No.:<input type="text" data-validate="phone" placeholder="Number"><br/>Email:<input type="text"data-validate="email" placeholder="email"></div><DIV ID="testdiv1" STYLE="position:fixed;visibility:hidden;background-color:white;layer-background-color:white;"></DIV>';
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
				
				<li><a href="#">Publications</a>
					<ul class="subs">
						<li><a href="journal.php">Journal</a></li>
						<li><a href="#">Conferences</a></li>
						<li><a href="#">Book</a></li>
						<li><a href="#">All others</a></li>
					</ul>
				</li>
				<li><div class="size3"></div>&nbsp;</li>
				<li><div ><img src="<?php echo $image;?>"height="50px" width="40px"/></div>&nbsp;</li>
				<li><a href="#">Hello <?php echo $fname;  ?></a>
					<ul class="subs">
						<li><a href="logout.php">Logout</a></li>
						<li><a href="#">Help</a></li>
						
					</ul>
				</li>
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
		<form  class="form" action="insertwork2.php"  method="post">
					<ul class="tabs" data-persist="true">
						<li><a href="#view1">Workshop Details</a></li>
						<li><a href="#">Participants Details</a></li>
						<li><a href="#">Speaker Details</a></li>
						
					</ul>	
					<div class="tabcontents">
						<section class="register">
						
							<div id="view1">
							<font size="3">
<!--<input type="text" value="<>" data-role="tagsinput" />-->
								<table>						
							<tr><td style="width:200px;"><label>Name of Programme:</label></td>
								<td><input type="text" class="size3" name="namepr" placeholder="Workshop Name"></td></tr>
								<br/>
								<tr><td style="width:200px;"><label>Name of Technnical: Body<label></td>
								<td><select name="thelist" onChange="combo(this, 'theinput')">
								  <option>ISTE</option>
								  <option>AICTE</option>
								  <option>DST</option>
								  <option placeholder="">Custom</option> 
								</select>
								<input type="text" id="theinput" name="theinput" />
								<script>

								function combo(thelist, theinput) {
									theinput = document.getElementById(theinput);
									var idx = thelist.selectedIndex;
									var content = thelist.options[idx].innerHTML;
									theinput.value = content;
								}</script></td></tr></table><br/>
								
								Sponsored<input type="radio" name="finance" value="s">
								Self-Financed<input type="radio" name="finance" value="sf"><br/><br/>
								<label> Date of Programme</label></br>
								
								<SCRIPT LANGUAGE="JavaScript" ID="jscal1xx">
				var cal1xx = new CalendarPopup("testdiv1");
				cal1xx.showNavigationDropdowns();
			</SCRIPT>
			<INPUT TYPE="text" NAME="date3xx" VALUE="" SIZE=25data-validate="date" placeholder="yyyy/mm/dd">
			<input type="button" class="date"onClick="cal1xx.select(document.forms[0].date3xx,'anchor3xx','yyyy/MM/dd'); return false;" TITLE="cal1xx.select(document.forms[0].date3xx,'anchor3xx','yyyy/MM/dd	'); return false;" NAME="anchor3xx" value="Start date" ID="anchor3xx">
			
			<INPUT TYPE="text" NAME="date5xx" VALUE="" SIZE=25data-validate="date" placeholder="yyyy/mm/dd"=>
			<input type="button" class="date"onClick="cal1xx.select(document.forms[0].date5xx,'anchor5xx','yyyy/MM/dd'); return false;" TITLE="cal1xx.select(document.forms[0].date5xx,'anchor5xx','yyyy/MM/dd	'); return false;" NAME="anchor5xx" value="End date" ID="anchor5xx">
				
				<br/><table>
					<tr><td style="100px;">No. of Days:</td><td><input type="text" disabled ></td></tr>
								<tr><td style="100px;">Role:</td><td><select name="organiser" class="size2">
								  <option value="convenor">Convenor</option>
								  <option value="coconvenor">Co-Convenor</option>
								  <option value="coordinator">Cordinator</option>
								  <option value="cocoordinator">Co-cordinator</option></select></td></tr>
								   </table>
												<!--<script>

												function combo1(thelist, theinput) {
													theinput = document.getElementById(theinput);
													var idx = thelist.selectedIndex;
													var content = thelist.options[idx].innerHTML;
													theinput.value = content;
												}</script>-->
								
								
							</font>
							</div>
								<ul class="tabs1" data-persist="true">
						<li><input type="submit"Value="Next"></li>
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