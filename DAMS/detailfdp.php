<?php
?><!DOCTYPE html>
<?php

//Start session
session_start();
 
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['username1']) || (trim($_SESSION['username1']) == '')) {
header("location: home.php");
exit();}
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
                                    $workname=$_GET['workname'];
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
				<form name="data"  onsubmit="return validForm() " method="post">
                	<div id="style1">
			<center>Organised fdp Programme				</center></div>
            <div class="right">
			<!--input type="button" onclick="TINY.box.show({iframe:'pdf.php',boxid:'frameless',width:750,height:450,fixed:false,maskid:'bluemask',maskopacity:40,closejs:function(){closeJS()}})"class="link1 id="menu_active"" value="Print Data">
	-->		<input type="button" onclick="window.open('<?php echo "examples/pdf10.php?workname=".$workname; ?>')" value="Download pdf">
			<!--<input type="button" onclick="TINY.box.show({iframe:'prworks.php',boxid:'frameless',width:850,height:550,fixed:false,maskid:'bluemask',maskopacity:40,closejs:function(){closeJS()}})"class="link1 id="menu_active""  value="Download excel ">-->
			</div>
					<ul class="tabs1" data-persist="true">
						<!--<li><input type="submit" value="Edit Profile"></a></li>
						<li><a href="try.php" target="_blank">Print Profile</a></li>-->
					</ul>
					<ul class="tabs" data-persist="true">
						<li><a href="#view1">fdp Information</a></li>
						<li><a href="#view2">Committee</a></li>
						<li><a href="#view3">Speakers</a></li>
						
					</ul>	
		<div class="tabcontents">
            <div id="view1">
			<!--<div class="image">
							
<?php

									 $username=$_SESSION['username1'];
$image = mysql_fetch_array(mysql_query("SELECT images_path FROM  faculty.facimg where username='$username'"));

if (isset($image['images_path'])  AND !empty($image['images_path']))
{
									$image=$image['images_path'];	
echo'<img src="'.$image.'" height="150px" alt="" />';
									}
										else{
										echo'<p>No image uploaded</p><br/>';
										}

									?>


<?php

?>
							</div>-->
			
                                       <label><strong>Name of fdp<font color="red"></font></strong></label>
									<br/>
                                     <?php 
								$workname=$_GET['workname'];

									$name=mysql_fetch_array(mysql_query("SELECT name FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));
						$tech=mysql_fetch_array(mysql_query("SELECT tech_body FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));
						$spon=mysql_fetch_array(mysql_query("SELECT sponsor FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));
				        $role=mysql_fetch_array(mysql_query("SELECT role FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));	
                        $part=mysql_fetch_array(mysql_query("SELECT part_type FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));	
                          $count=mysql_fetch_array(mysql_query("SELECT count FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));		
									
									 ?>
                                    
									
                                    <?php
									echo' <label>'.$name['name'].'</label>';?>
                                    
									<br/><br/>
								         <label><strong>Name of Technical Body<font color="red"></font></strong></label>
										<br/>
                                           <?php
									echo' <label>'.$tech['tech_body'].'</label>';?>
                                    <br/>
                                    <br/>
									<label><strong>Sponsorship</strong></label>
                                       <br/>
                                              <?php
									echo' <label>'.$spon['sponsor'].'</label>';?> 
                                        <br/>
										
                                             <!--date-->
                                              <br/>
									<label><strong>Role in fdp</strong></label>
                                        <br/>         <?php
									echo' <label>'.$role['role'].'</label>';?> 
                                           
                                        <br/><br/>
                                        <label><strong>fdp for</strong></label>
                                        <br />
                                              <?php
                                              echo '<label>'.$part['part_type'].'<label>';?> <br /><br />
                                              
									<label><strong>Number of Participants</strong></label>
                                        <br />
                                              <?php
                                              echo '<label>'.$count['count'].'<label>';?> <br />
                                        
											
							</div>
							<div id="view2">
						
                                <br/>   <table style="text-align:left;"> 	<tr><td><label><strong>Name of Convenor</strong></label></td>
							    <td>                <?php
														$convenor=mysql_fetch_array(mysql_query("SELECT convenor FROM faculty.organisedfdp WHERE username='$username'"));
									echo' :&nbsp; <label>'.$convenor['convenor'].'</label>';?></td>
                                    
                                    </tr>
							<tr> <td><label><strong>Name of Co-convenor</strong></label></td>
							    <td>
                                                    <?php
														$coconvenor=mysql_fetch_array(mysql_query("SELECT coconvenor FROM faculty.organisedfdp WHERE username='$username'"));
									echo':&nbsp; <label>'.$coconvenor['coconvenor'].'</label>';?></td>
                                    </tr>
                                    <tr><td><label><strong>Name of Coordinator</strong></label></td>
							    <td>
                                                    <?php
														$coor=mysql_fetch_array(mysql_query("SELECT coordinator FROM faculty.organisedfdp WHERE username='$username'"));
									echo' :&nbsp; <label>'.$convenor['convenor'].'</label>';?></td></tr>
                                <tr>    <td>	<label><strong>Name of Co-coordinator</strong></label></td>
							    <td>
                                                    <?php
														$cocor=mysql_fetch_array(mysql_query("SELECT cocoordinator FROM faculty.organisedfdp WHERE username='$username'"));
									echo' :&nbsp; <label>'.$cocor['cocoordinator'].'</label>';?></td></tr>
                                    <tr><td>
							 <label><strong>Name of Organisers</strong></label></td>
							    <td>
                                                    <?php
														$org=mysql_fetch_array(mysql_query("SELECT organiser FROM faculty.organisedfdp WHERE username='$username'"));
									echo' :&nbsp; <label>'.$org['organiser'].'</label>';?></td></tr>
                                      <tr><td>
							 <label><strong>Organising Department</strong></label></td>
							    <td>
                                                    <?php
														$orgd=mysql_fetch_array(mysql_query("SELECT department FROM faculty.organisedfdp WHERE username='$username'"));
									echo' :&nbsp; <label>'.$orgd['department'].'</label>';?></td></tr>
                                    </table>
							</div>
							
                            <div id="view3">
                            <?php
                            	$s1name=mysql_fetch_array(mysql_query("SELECT s1_name FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));
                                if(isset($s1name['s1_name'])&&!empty($s1name['s1_name']))
                                {
                                    ?>
                                <table><tr>
                                <td><label><strong>Name Of Speaker 1</strong></label></td>
                                  <td><?php
														
									echo' :&nbsp; <label>'.$s1name['s1_name'].'</label>';?></td></tr>
                                
                                <tr>
                                <td><label><strong>Name Of Institute</strong></label></td>
                                  <td><?php
									$s1institute=mysql_fetch_array(mysql_query("SELECT s1_institute FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));					
									echo' :&nbsp; <label>'.$s1institute['s1_institute'].'</label>';?></td></tr>
                                
                                <tr>
                                <td><label><strong>Contact No.</strong></label></td>
                                  <td><?php
									$s1con=mysql_fetch_array(mysql_query("SELECT s1_contact FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));					
									echo' :&nbsp; <label>'.$s1con['s1_contact'].'</label>';?></td></tr>
                                
                                <tr>
                                <td><label><strong>Email ID</strong></label></td>
                                  <td><?php
									$s1email=mysql_fetch_array(mysql_query("SELECT s1_email FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));					
									echo' :&nbsp; <label>'.$s1email['s1_email'].'</label>';?></td></tr>
                                
                                
                                </table>    
                                <?php
                                }
                                ?>
                                <br /><br />
                                <?php
                            	$s2name=mysql_fetch_array(mysql_query("SELECT s2_name FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));
                                if(isset($s2name['s2_name'])&&!empty($s2name['s2_name']))
                                {
                                    ?>
                                <table ><tr>
                                <td><label><strong>Name Of Speaker 2</strong></label></td>
                                  <td><?php
														
									echo' :&nbsp; <label>'.$s2name['s2_name'].'</label>';?></td></tr>
                                
                                <tr>
                                <td><label><strong>Name Of Institute</strong></label></td>
                                  <td><?php
									$s2institute=mysql_fetch_array(mysql_query("SELECT s2_institute FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));					
									echo' :&nbsp; <label>'.$s2institute['s2_institute'].'</label>';?></td></tr>
                                
                                <tr>
                                <td><label><strong>Contact No.</strong></label></td>
                                  <td><?php
									$s2con=mysql_fetch_array(mysql_query("SELECT s2_contact FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));					
									echo' :&nbsp; <label>'.$s2con['s2_contact'].'</label>';?></td></tr>
                                
                                <tr>
                                <td><label><strong>Email ID</strong></label></td>
                                  <td><?php
									$s2email=mysql_fetch_array(mysql_query("SELECT s2_email FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));					
									echo' :&nbsp; <label>'.$s2email['s2_email'].'</label>';?></td></tr>
                                
                                
                                </table>    
                                
                                <?php
                                }
                                ?>        
                                <br /><br />
                                <?php
                            	$s3name=mysql_fetch_array(mysql_query("SELECT s3_name FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));
                                if(isset($s3name['s3_name'])&&!empty($s3name['s3_name']))
                                {
                                    ?>
                                <table ><tr>
                                <td><label><strong>Name Of Speaker 2</strong></label></td>
                                  <td><?php
														
									echo' :&nbsp; <label>'.$s3name['s3_name'].'</label>';?></td></tr>
                                
                                <tr>
                                <td><label><strong>Name Of Institute</strong></label></td>
                                  <td><?php
									$s3institute=mysql_fetch_array(mysql_query("SELECT s3_institute FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));					
									echo' :&nbsp; <label>'.$s3institute['s3_institute'].'</label>';?></td></tr>
                                
                                <tr>
                                <td><label><strong>Contact No.</strong></label></td>
                                  <td><?php
									$s3con=mysql_fetch_array(mysql_query("SELECT s3_contact FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));					
									echo' :&nbsp; <label>'.$s3con['s3_contact'].'</label>';?></td></tr>
                                
                                <tr>
                                <td><label><strong>Email ID</strong></label></td>
                                  <td><?php
									$s3email=mysql_fetch_array(mysql_query("SELECT s3_email FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));					
									echo' :&nbsp; <label>'.$s3email['s3_email'].'</label>';?></td></tr>
                                
                                
                                </table>    
                                
                                <?php
                                }
                                ?>        
                                 <br /><br />
                                <?php
                            	$s4name=mysql_fetch_array(mysql_query("SELECT s4_name FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));
                                if(isset($s4name['s4_name'])&&!empty($s4name['s4_name']))
                                {
                                    ?>
                                <table ><tr>
                                <td><label><strong>Name Of Speaker 2</strong></label></td>
                                  <td><?php
														
									echo' :&nbsp; <label>'.$s4name['s4_name'].'</label>';?></td></tr>
                                
                                <tr>
                                <td><label><strong>Name Of Institute</strong></label></td>
                                  <td><?php
									$s4institute=mysql_fetch_array(mysql_query("SELECT s4_institute FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));					
									echo' :&nbsp; <label>'.$s4institute['s4_institute'].'</label>';?></td></tr>
                                
                                <tr>
                                <td><label><strong>Contact No.</strong></label></td>
                                  <td><?php
									$s4con=mysql_fetch_array(mysql_query("SELECT s4_contact FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));					
									echo' :&nbsp; <label>'.$s4con['s4_contact'].'</label>';?></td></tr>
                                
                                <tr>
                                <td><label><strong>Email ID</strong></label></td>
                                  <td><?php
									$s4email=mysql_fetch_array(mysql_query("SELECT s4_email FROM faculty.organisedfdp WHERE username='$username'&& name='$workname'"));					
									echo' :&nbsp; <label>'.$s4email['s4_email'].'</label>';?></td></tr>
                                
                                
                                </table>    
                                
                                <?php
                                }
                                ?>        
                                                   
		 </div>				
						 
</fieldset>

</form>
	  </div>
</div>	  </div>
    

</body>
</html>