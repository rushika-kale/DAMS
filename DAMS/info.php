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
				<form name="data" action="data.php" onsubmit="return validForm() " method="post">
					<ul class="tabs1" data-persist="true">
						<li><input type="submit" value="Edit Profile"></a></li>
						<li><a href="try.php" target="_blank">Print Profile</a></li>
					</ul>
					<ul class="tabs" data-persist="true">
						<li><a href="#view1">Personal Information</a></li>
						<li><a href="#view2">Qualification</a></li>
						<li><a href="#view3">Professional Information</a></li>
						<li><a href="#view4">Publication and awards</a></li>
					</ul>	
		<div class="tabcontents">
            <div id="view1">
			<div class="image">
							
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
							</div>
			
                                       <label><strong>Name<font color="red"></font></strong></label>
									<br/>
                                     <?php 
								

									$sal=mysql_fetch_array(mysql_query("SELECT sal FROM faculty.profile WHERE username='$username'"));
						$fname=mysql_fetch_array(mysql_query("SELECT f_name FROM faculty.profile WHERE username='$username'"));
						$mname=mysql_fetch_array(mysql_query("SELECT m_name FROM faculty.profile WHERE username='$username'"));
						$lname=mysql_fetch_array(mysql_query("SELECT l_name FROM faculty.profile WHERE username='$username'"));
						$dd=mysql_fetch_array(mysql_query("SELECT day FROM faculty.profile WHERE username='$username'"));
						$mm=mysql_fetch_array(mysql_query("SELECT month FROM faculty.profile WHERE username='$username'"));
						$yy=mysql_fetch_array(mysql_query("SELECT year FROM faculty.profile WHERE username='$username'"));
						$addr=mysql_fetch_array(mysql_query("SELECT Addr FROM faculty.profile WHERE username='$username'"));
						$cont=mysql_fetch_array(mysql_query("SELECT con FROM faculty.profile WHERE username='$username'"));
						$cont1=mysql_fetch_array(mysql_query("SELECT con1 FROM faculty.profile WHERE username='$username'"));	
						$email=mysql_fetch_array(mysql_query("SELECT email FROM faculty.profile WHERE username='$username'"));
						$email1=mysql_fetch_array(mysql_query("SELECT email1 FROM faculty.profile WHERE username='$username'"));
						$aos=mysql_fetch_array(mysql_query("SELECT special FROM faculty.fac_info WHERE username='$username'"));
					
									echo' <label>'.$sal['sal'].'</label>';
									 ?>
                                    
									
                                    <?php
									echo' <label>'.$fname['f_name'].'&nbsp&nbsp'.$mname['m_name'].'&nbsp&nbsp'.$lname['l_name'].'</label>';?>
                                    <!--<div class="input-control text size101" data-role="input-control">
                                   <?php
									echo' <label>'.$mname['m_name'].'</label>';?>   </div>
                                    <div class="input-control text size2" data-role="input-control">
                                          <?php
									echo' <label>'.$lname['l_name'].'</label>';?>
                                    </div>-->
									</br></br>
								         <label><strong>Date of Birth<font color="red"></font></strong></label>
										</br>
                                           <?php
									echo' <label>'.$dd['day'].'/'.$mm['month'].'/'.$yy['year'].'</label>';?>
                                    </br>
                                    <!--<div class="input-control text size1" data-role="input-control">
                                          <?php
									echo' <label>'.$mm['month'].'</label>';?>
                                    </div>
                                    <div class="input-control text size1" data-role="input-control">
                                           <?php
									echo' <label>'.$yy['year'].'</label>';?>
                                    </div>--></br>
									<label><strong>Email Id</strong></label>
                                       </br>
                                              <?php
									echo' <label>'.$email['email'].'</label>';?> 
                                        </br>
										
                                              <?php
									echo' <label>'.$email1['email1'].'</label>';?> 
                                        </br> </br>
									<label><strong>Mobile No.</strong></label>
                                        </br>         <?php
									echo' <label>'.$cont['con'].'</label>';?> 
                                           
                                        </br></br>
                                                 <?php
									echo' <label>'.$cont1['con1'].'</label>';?> 
                                            
                                        </br>
										<label><strong>Area of Specialization</strong></label>
                                      </br>
                                                 <?php
									echo' <label>'.$aos['special'].'</label>';?>
                                        </br></br>
							<label><strong>Address</strong></label>
                                        </br>
                                                                 <?php
									echo' <label>'.$addr['Addr'].'</label>';?>
                                        </br></br>
											
							</div>
							<div id="view2">
							<legend><strong><u>Graduation</u></strong></legend>
						                </br><?php
														$gy=mysql_fetch_array(mysql_query("SELECT g_type FROM faculty.fac_qual WHERE username='$username'"));
									echo' <label>'.$gy['g_type'].'</label>';?></br>
                                </br>    	<label><strong>Year of Passing:</strong></label>
							    
                                                    <?php
														$gy=mysql_fetch_array(mysql_query("SELECT g_year FROM faculty.fac_qual WHERE username='$username'"));
									echo' <label>'.$gy['g_year'].'</label>';?>
                                    </br></br>
							 <label><strong>CGPA/Percentage:</strong></label>
                                        
                                        <?php
														$gs=mysql_fetch_array(mysql_query("SELECT g_sc FROM faculty.fac_qual WHERE username='$username'"));
									echo' <label>'.$gs['g_sc'].'</label>';?>
                                    </br></br>                                    
									 <label><strong>Stream:</strong></label>
                                        
                                            <?php
														$gst=mysql_fetch_array(mysql_query("SELECT g_br FROM faculty.fac_qual WHERE username='$username'"));
									echo' <label>'.$gst['g_br'].'</label>';?>
                                            
                                        </br></br>
								 <label><strong>College:</strong></label>
                                        
                                          <?php
														$gc=mysql_fetch_array(mysql_query("SELECT g_clg FROM faculty.fac_qual WHERE username='$username'"));
									echo' <label>'.$gc['g_clg'].'</label>';?>
                                            
                                        </br></br>
										 <label><strong>University:</strong></label>
                                        
                                            <?php
														$gu=mysql_fetch_array(mysql_query("SELECT g_univ FROM faculty.fac_qual WHERE username='$username'"));
									echo' <label>'.$gu['g_univ'].'</label>';?>
                                            
                                        </br></br>
							<legend><strong><u>PG</u></strong></legend>
							</br><?php
														$pgy=mysql_fetch_array(mysql_query("SELECT pg_type FROM faculty.fac_qual WHERE username='$username'"));
									echo' <label>'.$pgy['pg_type'].'</label>';?></br>
							</br><label><strong>Year of Passing:</strong></label>
							    
                                        <?php
														$py=mysql_fetch_array(mysql_query("SELECT pg_year FROM faculty.fac_qual WHERE username='$username'"));
									echo' <label>'.$py['pg_year'].'</label>';?>
                                    </br></br>
							<label><strong>CGPA/Percentage:</strong></label>
                                      
                                       <?php
														$pc=mysql_fetch_array(mysql_query("SELECT pg_sc FROM faculty.fac_qual WHERE username='$username'"));
									echo' <label>'.$pc['pg_sc'].'</label>';?>
                                    </br></br>
									 <label><strong>Stream:</strong></label>
                                        
                                            <?php
														$ps=mysql_fetch_array(mysql_query("SELECT pg_br FROM faculty.fac_qual WHERE username='$username'"));
									echo' <label>'.$ps['pg_br'].'</label>';?>
                                            
                                        </br></br>
								 <label><strong>College:</strong></label>
                                        
                                            <?php
														$pcl=mysql_fetch_array(mysql_query("SELECT pg_clg FROM faculty.fac_qual WHERE username='$username'"));
									echo' <label>'.$pcl['pg_clg'].'</label>';?>
                                            
                                        </br></br>
										 <label><strong>University:</strong></label>
                                        
<?php
														$pu=mysql_fetch_array(mysql_query("SELECT pg_univ FROM faculty.fac_qual WHERE username='$username'"));
									echo' <label>'.$pu['pg_univ'].'</label>';?>
                                            
                                        </br></br>
							<legend><strong><u>Ph.D</u></strong></legend></br>	
                                       <label><strong>Year of Passing:</strong></label>
							            <?php
														$phy=mysql_fetch_array(mysql_query("SELECT phd_year FROM faculty.fac_qual WHERE username='$username'"));
									echo' <label>'.$phy['phd_year'].'</label>';?>
                                </br></br>
									 <label><strong>Subject:</strong></label>
                                        
                                            <?php
														$sb=mysql_fetch_array(mysql_query("SELECT phd_br FROM faculty.fac_qual WHERE username='$username'"));
									echo' <label>'.$sb['phd_br'].'</label>';?>
                                        </br></br>
								 <label><strong>College:</strong></label>
                                        
                                            <?php
														$phc=mysql_fetch_array(mysql_query("SELECT phd_clg FROM faculty.fac_qual WHERE username='$username'"));
									echo' <label>'.$phc['phd_clg'].'</label>';?>
                                        
                                        </br></br>
										 <label><strong>University:</strong></label>
                                        
                                            <?php
														$phu=mysql_fetch_array(mysql_query("SELECT phd_univ FROM faculty.fac_qual WHERE username='$username'"));
									echo' <label>'.$phu['phd_univ'].'</label>';?>
                                            
                                        </br></br>
									
									
							</div>
							
                            <div id="view3">
	<label><strong>Designation:<font color="red"></font></strong></label>
                                        
                                           <?php
														$des=mysql_fetch_array(mysql_query("SELECT des FROM faculty.fac_info WHERE username='$username'"));
									echo' <label>'.$des['des'].'</label>';?> 
                                        </br></br>
										<label><strong>Department:<font color="red"></font></strong></label>
                                        
                                             <?php
														$dept=mysql_fetch_array(mysql_query("SELECT dept FROM faculty.fac_info WHERE username='$username'"));
									echo' <label>'.$dept['dept'].'</label>';?>
                                        
                                        </br></br>
										<label><strong>Date of Joining<font color="red"></font></strong></label>
			                           </br>
                                         <?php
														$ddj=mysql_fetch_array(mysql_query("SELECT j_date FROM faculty.fac_info WHERE username='$username'"));
														$mmj=mysql_fetch_array(mysql_query("SELECT j_month FROM faculty.fac_info WHERE username='$username'"));
									$yyj=mysql_fetch_array(mysql_query("SELECT j_year FROM faculty.fac_info WHERE username='$username'"));
									echo' <label>'.$ddj['j_date'].'/'.$mmj['j_month'].'/'.$yyj['j_year'].'</label>';?>
                                  </br></br>
                                  <!--  <div class="input-control text size1" data-role="input-control">
                                         <?php

									echo' <label>'.$mmj['j_month'].'</label>';?>
                                    </div>
                                    <div class="input-control text size1" data-role="input-control">
                                         <?php
														$yyj=mysql_fetch_array(mysql_query("SELECT j_year FROM faculty.fac_info WHERE username='$username'"));
									echo' <label>'.$yyj['j_year'].'</label>';?>
                                    </div>-->
									<label><strong>Subject Teacher of:<font color="red"></font></strong></label>
                                        </br>
                                             <?php
														$sub=mysql_fetch_array(mysql_query("SELECT subt FROM faculty.fac_info WHERE username='$username'"));
									echo' <label>'.$sub['subt'].'</label>';?>
                                            
                                        </br></br>
											<strong><label>Experience<font color="red"></font></label></br>
			                        <label>Teaching&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Industry&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Research</label></strong>
									</br>
                                         <?php
														$expt=mysql_fetch_array(mysql_query("SELECT exp_teach FROM faculty.fac_info WHERE username='$username'"));
									echo' <label>'.$expt['exp_teach'].'</label>';?>
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                   
                                        <?php
														$expi=mysql_fetch_array(mysql_query("SELECT exp_ind FROM faculty.fac_info WHERE username='$username'"));
									echo' <label>'.$expi['exp_ind'].'</label>';?>
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    
                                        <?php
														$expr=mysql_fetch_array(mysql_query("SELECT exp_r FROM faculty.fac_info WHERE username='$username'"));
									echo' <label>'.$expr['exp_r'].'</label>';?>
                                    </br>
							
									 
									 
		 </div>				
							<div id="view4">
									<strong><label>Paper Presented in Conferences<font color="red"></font></label></br>
			                        <label>National&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International</label></strong>
									</br>
                                        <?php
														$pprn=mysql_fetch_array(mysql_query("SELECT ppr_n FROM faculty.fac_info WHERE username='$username'"));
									echo' <label>'.$pprn['ppr_n'].'</label>';?>
                                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php
														$pprin=mysql_fetch_array(mysql_query("SELECT ppr_in FROM faculty.fac_info WHERE username='$username'"));
									echo' <label>'.$pprin['ppr_in'].'</label>';?>
									</br></br>
										<strong><label>Paper Published in<font color="red"></font></label></br>
			                        <label>National&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Journal</label></strong>
								</br>
                                        <?php
														$ppun=mysql_fetch_array(mysql_query("SELECT ppu_n FROM faculty.fac_info WHERE username='$username'"));
									echo' <label>'.$ppun['ppu_n'].'</label>';?>
                                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    
                                        <?php
														$ppuin=mysql_fetch_array(mysql_query("SELECT ppu_in FROM faculty.fac_info WHERE username='$username'"));
									echo' <label>'.$ppuin['ppu_in'].'</label>';?>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php
														$ppuj=mysql_fetch_array(mysql_query("SELECT ppu_j FROM faculty.fac_info WHERE username='$username'"));
									echo' <label>'.$ppuj['ppu_j'].'</label>';?></br></br>
									
									<label><strong>Awards<font color="red"></font></strong></label>
									</br>
                                        <?php
														$award=mysql_fetch_array(mysql_query("SELECT award FROM faculty.fac_info WHERE username='$username'"));
									echo' <label>'.$award['award'].'</label>';?></br></br>
									<label><strong>Books Published<font color="red"></font></strong></label>
					</br>
                                        <?php
														$book=mysql_fetch_array(mysql_query("SELECT book FROM faculty.fac_info WHERE username='$username'"));
									echo' <label>'.$book['book'].'</label>';?></br></br>
									<label><strong>Interaction with Professional Institutions<font color="red"></font></strong></label>
									</br>
                                        <?php
														$inter=mysql_fetch_array(mysql_query("SELECT inter FROM faculty.fac_info WHERE username='$username'"));
									echo' <label>'.$inter['inter'].'</label>';?></br></br>
									<label><strong>Professional Body Membership<font color="red"></font></strong></label>
									</br>
                                        <?php
														$pbm=mysql_fetch_array(mysql_query("SELECT pbm FROM faculty.fac_info WHERE username='$username'"));
									echo' <label>'.$pbm['pbm'].'</label>';?></br></br>
									<label><strong>Consultancy Activities<font color="red"></font></strong></label>
									</br>
                                        <?php
														$cont=mysql_fetch_array(mysql_query("SELECT con FROM faculty.fac_info WHERE username='$username'"));
									echo' <label>'.$cont['con'].'</label>';?></br></br>
									
								</div>		 
</fieldset>

</form>
	  </div>
</div>	  </div>
    

</body>
</html>