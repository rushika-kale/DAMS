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
<script src="//rawgit.com/jpillora/verifyjs/gh-pages/dist/verify.notify.min.js"></script>
<!--
<script> $.validate({
  borderColorOnError : '#FFF',
  addValidClassOnAll : true
}); </script>--><body>
                          
                          <ul id="nav">
				            <li><a href="index.php">Home</a></li>
                            <li><a href="info.php">Profile</a>
					           <ul class="subs">
		                          <li><a href="data.php">Edit Profile</a></li>
						          <li><a href="info.php">View Profile</a></li>
					           </ul>
				            </li>
				            <li><a class="hsubs" href="workshop.php">Events</a>
					           <ul class="subs">
						          <li><a href="Atworkshop.php">Attended</a>
                                      <ul>
                                          <li><a href="Atworkshop.php">Workshop</a></li>
                                          <li><a href="Atseminar.php">Seminar</a></li>
                                          <li><a href="Atfdp.php">FDP</a></li>
                                          <li><a href="Atsttp.php">STTP</a></li>
                                      </ul>
                                  </li>
						          <li><a href="orworkshop.php">Organised</a>
                                        <ul>
                                            <li><a href="orworkshop.php">Workshop</a></li>
                                            <li><a href="orseminar.php">Seminar</a></li>
                                            <li><a href="orfdp.php">FDP</a></li>
                                            <li><a href="orsttp.php">STTP</a></li>
                                        </ul>
                                  </li>
					           </ul>
				            </li>
            			<!--	<li><a href="#">Guest Lectures</a>
			             		<ul class="subs">
						          <li><a href="#">Attended</a></li>
						          <li><a href="#">Organised</a></li>
	                              <li><a href="#">Delivered</a></li>
                                </ul>
                                
				            </li>-->
				            <li><a href="#">Publications</a>
					           <ul class="subs">
						          <li><a href="addpub.php">ADD</a></li>
						          <li><a href="pub.php">DELETE/EDIT</a></li>
					           </ul>
                            </li>
                            
                            <?php
if($ac['access']==1){	
				echo'
				<li><a href="#">Admin</a>
					<ul class="subs">
						<li><a href="create.php">Create User</a></li>
						<li><a href="adprof1.php">Faculty Profiles</a></li>
						<li><a href="print.php">Report</a></li>
					    <li><a href="notification.php">Send Notification</a></li>
					</ul>
				</li></li><li><div class="size9"></div>&nbsp;</li>';}
				
				else {echo'
				<li>
				</li><li><div class="size9"></div>&nbsp;</li>'
                ;
				}?>
				
				        
				        <li><div class="size3"></div>&nbsp;</li>
				        <li><div ><img src="<?php echo $image;?>"height="50px" width="40px"/></div>&nbsp;</li>
                        <li><a href="#">Hello <?php echo $fname;  ?></a>
					       <ul class="subs">
				            <li><a href="logout.php">Logout</a></li>
                            <li><a href="#">Help</a></li>	
					       </ul>
				        </li>
		
			</ul>
    <script>
    $("form").verify({...})</script>
    
    <script>
    $.verify.addRules({
        alpha:{
            regex:/^([A-Za-z.])\w*\s([A-Za-z])\w*\s([A-Za-z])\w*+$/,
            message: "Use Valid Letters Only" }
    });</script>    


</body></html>