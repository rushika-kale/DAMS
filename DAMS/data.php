<!DOCTYPE html>
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
	 $username=$_SESSION['username1'];
$ac=mysql_fetch_array(mysql_query("SELECT access FROM faculty.facdb WHERE username='$username'"));

	 $sal=mysql_fetch_array(mysql_query("SELECT sal FROM faculty.profile WHERE username='$username'"));
									$access=mysql_fetch_array(mysql_query("SELECT access FROM faculty.facdb WHERE username='$username'"));
									$access=$access['access'];
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
						//clg
						$gyt=mysql_fetch_array(mysql_query("SELECT g_type FROM faculty.fac_qual WHERE username='$username'"));
						$gy=mysql_fetch_array(mysql_query("SELECT g_year FROM faculty.fac_qual WHERE username='$username'"));
						$gs=mysql_fetch_array(mysql_query("SELECT g_sc FROM faculty.fac_qual WHERE username='$username'"));
						$gst=mysql_fetch_array(mysql_query("SELECT g_br FROM faculty.fac_qual WHERE username='$username'"));
						$gc=mysql_fetch_array(mysql_query("SELECT g_clg FROM faculty.fac_qual WHERE username='$username'"));
						$gu=mysql_fetch_array(mysql_query("SELECT g_univ FROM faculty.fac_qual WHERE username='$username'"));
						//pg
						$pgy=mysql_fetch_array(mysql_query("SELECT pg_type FROM faculty.fac_qual WHERE username='$username'"));
						$py=mysql_fetch_array(mysql_query("SELECT pg_year FROM faculty.fac_qual WHERE username='$username'"));
						$pc=mysql_fetch_array(mysql_query("SELECT pg_sc FROM faculty.fac_qual WHERE username='$username'"));
						$ps=mysql_fetch_array(mysql_query("SELECT pg_br FROM faculty.fac_qual WHERE username='$username'"));
						$pcl=mysql_fetch_array(mysql_query("SELECT pg_clg FROM faculty.fac_qual WHERE username='$username'"));
						$pu=mysql_fetch_array(mysql_query("SELECT pg_univ FROM faculty.fac_qual WHERE username='$username'"));
						//phd
						$phy=mysql_fetch_array(mysql_query("SELECT phd_year FROM faculty.fac_qual WHERE username='$username'"));
						$sb=mysql_fetch_array(mysql_query("SELECT phd_br FROM faculty.fac_qual WHERE username='$username'"));
						$phc=mysql_fetch_array(mysql_query("SELECT phd_clg FROM faculty.fac_qual WHERE username='$username'"));
						$phu=mysql_fetch_array(mysql_query("SELECT phd_univ FROM faculty.fac_qual WHERE username='$username'"));
						//professional info
						$des=mysql_fetch_array(mysql_query("SELECT des FROM faculty.fac_info WHERE username='$username'"));
						$dept=mysql_fetch_array(mysql_query("SELECT dept FROM faculty.fac_info WHERE username='$username'"));
						$ddj=mysql_fetch_array(mysql_query("SELECT j_date FROM faculty.fac_info WHERE username='$username'"));
                        $mmj=mysql_fetch_array(mysql_query("SELECT j_month FROM faculty.fac_info WHERE username='$username'"));					
                        $rite=mysql_fetch_array(mysql_query("SELECT * FROM faculty.fac_info WHERE username='$username'"));
                        $rite1=mysql_fetch_array(mysql_query("SELECT * FROM faculty.fac_qual WHERE username='$username'"));
                        $rite2=mysql_fetch_array(mysql_query("SELECT * FROM faculty.fac_info WHERE username='$username'"));
if (isset($sal['sal'])  AND !empty($sal['sal']))
$sal=$sal['sal'];
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
									if (isset($dd['day'])  AND !empty($dd['day']))
$dd=$dd['day'];
else 
$dd="Day";
if (isset($mm['month'])  AND !empty($mm['month']))
$mm=$mm['month'];
else 
$mm="Month";
if (isset($yy['year'])  AND !empty($yy['year']))
$yy=$yy['year'];
else 
$yy="Year";
if (isset($addr['Addr'])  AND !empty($addr['Addr']))
$addr=$addr['Addr'];
else 
$addr="Address";

if (isset($cont1['con1'])  AND !empty($cont1['con1']))
$cont1=$cont1['con1'];
else 
$cont1="ContactNumber 2";
if (isset($email1['email1'])  AND !empty($email1['email1']))
$email1=$email1['email1'];
else 
$email1=" Alternate Email";
if (isset($aos['special'])  AND !empty($aos['special']))
$aos=$aos['special'];
else 
$aos="Area of Specialization";

if (isset($gyt['g_type)'])  AND !empty($gyt['g_type']))
$gyt=$gyt['g_type'];
if (isset($gy['g_year'])  AND !empty($gy['g_year']))
$gy=$gy['g_year'];
else 
$gy="Year";

if (isset($gs['g_sc'])  AND !empty($aos['g_sc']))
$gs=$gs['g_sc'];
else 
$gs="Score";

if (isset($gst['g_br'])  AND !empty($gst['g_br']))
$gst=$gst['g_br'];

if (isset($gc['g_clg'])  AND !empty($gc['g_clg']))
$gc=$gc['g_clg'];
else 
$gc="College";

if (isset($gu['g_univ'])  AND !empty($gu['g_univ']))
$gu=$gu['g_univ'];
else 
$gu="University";

//pg
if (isset($pgy['pg_type)'])  AND !empty($pgy['pg_type']))
$pgy=$pgy['pg_type'];
if (isset($py['pg_year'])  AND !empty($py['pg_year']))
$py=$py['pg_year'];
else 
$py="Year";

if (isset($pc['pg_sc'])  AND !empty($pc['pg_sc']))
$pc=$pc['pg_sc'];
else 
$pc="Score";

if (isset($ps['pg_br'])  AND !empty($ps['pg_br']))
$ps=$ps['pg_br'];

if (isset($pcl['pg_clg'])  AND !empty($pcl['pg_clg']))
$pcl=$pcl['pg_clg'];
else 
$pcl="College";

if (isset($pu['pg_univ'])  AND !empty($pu['pg_univ']))
$pu=$pu['pg_univ'];
else 
$pu="University";


if (isset($phy['phd_year'])  AND !empty($phy['phd_year']))
$phy=$phy['phd_year'];
else
$phy="Year";
if (isset($sb['phd_br'])  AND !empty($sb['phd_br']))
$sb=$sb['phd_br'];
else 
$sb="Subject";
if (isset($phc['phd_clg'])  AND !empty($phc['phd_clg']))
$phc=$phc['phd_clg'];
else 
$phc="college";

if (isset($phu['phd_univ'])  AND !empty($phu['phd_univ']))
$phu=$phu['phd_univ'];
else 
$phu="University";


?> 
<html>
<head>
		<link href="css/layout1.css" rel="stylesheet" type="text/css" />
		<link href="css/menu.css" rel="stylesheet" type="text/css" />
		<script src="js/jquery.min.js" type="text/javascript"></script>
		<script src="js/verify.notify.js" type="text/javascript"></script>
		<link href="js/menu/tabcontent.css" rel="stylesheet" type="text/css" />
		<script src="js/tabcontent.js" type="text/javascript"></script>
		<script src="js/tabcontent1.js" type="text/javascript"></script>
        <script src="js/short.js" type="text/javascript"></script>
		<script>
		function validateForm(inputtxt) {
     {  
   var letters = /^[A-Za-z]+$/;  
   if(inputtxt.value.match(letters))  
     {  
      return true;  
     }  
   else  
     {  
     alert("message");  
     return false;  
     }  

}
	  function isCharKey(evet)
	  {
	  var chacode=(evet.which) ? evet.which : event.keyCode
	  if((chaCode>31 &&chaCode>91)||(chaCode <96 && chaCode>122))
	  return false;
	  return true;
	  }

</script>
		
		
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
				<form name="data" id="form"  action="insert.php" enctype="multipart/form-data" onsubmit="return validForm() " method="post">
					<ul class="tabs1" data-persist="true">
						<li><input type="submit"Value="Submit">Submit</li>
					</ul>
					<ul class="tabs" data-persist="true">
						<li><a href="#view1">Personal Information</a></li>
						<li><a href="#view2">Qualification</a></li>
						<li><a href="#view3">Professional Information</a></li>
						<li><a href="#view4">Publication and awards</a></li>
					</ul>	
					<div class="tabcontents">
						<section class="register">
						
							<div id="view1">
							<div class="image">
							
<?php

$image = mysql_fetch_array(mysql_query("SELECT images_path FROM  faculty.facimg where username='$username'"));

if (isset($image['images_path'])  AND !empty($image['images_path']))
{
									$image=$image['images_path'];	

echo'<img src="'.$image.'" height="150px" width="100px" alt="" />';
echo'<div class="imagetxt"><input name="uploadedimage" value="img" type="file" size="60">';		
if (!empty($_FILES["uploadedimage"]["name"])) {
	$file_name=$_FILES["uploadedimage"]["name"];
echo $file_name.'</div>';}		}


										else{
										echo 'no image';

									?>							
							
							<div class="imagetxt">
							
							<?php echo'<input name="uploadedimage" value="img" type="file" size="60">';
										}?>
							</div>
							</div>
								<label>Name<font color="red">*</font></label>
								<br/>
									<select name="sal" class="size1"<?php echo'placeholder="'.$sal.'"'?> >
										<option><?php echo $sal; ?></option>
										<option>Dr.</option>
                                        <option>Mr.</option>
										<option>Mrs.</option>
										<option>Ms.</option>
									</select>
								<?php 
								$fname=mysql_fetch_array(mysql_query("SELECT f_name FROM faculty.profile WHERE username='$username'"));
																			if (isset($fname['f_name'])  AND !empty($fname['f_name'])){
											$fname=$fname['f_name'];
											echo'<input type="text" class="size2" data-validate="alpha"placeholder="'.$fname.'"name="fname">';}
											else {
											$fname="First Name";
											echo'<input type="text" class="size2" data-validate="alpha"placeholder="'.$fname.'"name="fname">';
											}?>
											<?php
											if (isset($mname['m_name'])  AND !empty($mname['m_name'])){
											$mname=$mname['m_name'];
											echo'<input type="text" class="size2" data-validate="alpha"placeholder="'.$mname.'"name="mname">';}
											else {
											$mname="middle Name";
											echo'<input type="text" class="size2" data-validate="alpha"placeholder="'.$mname.'"name="mname">';
											}?>
								
								<?php
											if (isset($lname['l_name'])  AND !empty($lname['l_name'])){
											$lname=$lname['l_name'];
											echo'<input type="text" class="size2" data-validate="alpha"placeholder="'.$lname.'"name="lname">';}
											else {
											$lname="Last Name";
											echo'<input type="text" class="size2" data-validate="required,alpha"placeholder="'.$lname.'"name="lname">';
											}?>
								<br/>
								<label>Date of Birth<font color="red">*</font></label>
								<br/>
								<input type="text" class="size0" onkeypress="return isNumberKey(event)"<?php echo'placeholder="'.$dd.'"'?> name="b_dd">
								<input type="text" class="size0" onkeypress="return isNumberKey(event)"<?php echo'placeholder="'.$mm.'"'?>  name="b_mm">
								<input type="text" class="size0" onkeypress="return isNumberKey(event)"<?php echo'placeholder="'.$yy.'"'?> name="b_yy">
								<br/>
								<label>Email Id<font color="red">*</font></label>
								<br/>
								<?PHP
								if (isset($email['email'])  AND !empty($email['email'])){
									$email=$email['email'];
									echo'<input type="text" class="size2" data-validate="email" placeholder="'.$email.'" name="email">';
									}
									else {
									$email="Email";
									ECHO'<input type="text" class="size2" data-validate="email,required" placeholder="'.$email.'" name="email">';}
									?>
								
								<input type="text" class="size2"data-validate="email"<?php echo'placeholder="'.$email1.'"'?> name="email1">
								<br/>
								<label>Mobile No.<font color="red">*</font></label><br/>
								<?php
								if (isset($cont['con'])  AND !empty($cont['con']))
									{$cont=$cont['con'];
									echo'<input type="text" class="size2"data-validate="phone"placeholder="'.$cont.'" name="mob">';
									}
									else {
									$cont="ContactNumber1";
									echo'<input type="text"class="size2" data-validate="phone" placeholder="'.$cont.'" name="mob">';
									}
								?>
								
								<input type="text" data-validate="phone" class="size2"<?php echo'placeholder="'.$cont1.'"'?> name="mob1">
								<br/>
								<label>Area of Specialization:</label><br/>
								<input type="text" class="size4" data-validate="alpha"<?php echo'placeholder="'.$aos.'"'?>  name="aos">
								<br/>
								<label>Address:</label><br/>
								<input type="text" class="size4"data-validate="alphanumeric" <?php echo'placeholder="'.$addr.'"'?> name="address">
								<br/><br/>
							</div>
							<div id="view2">
								<Legend><u>Graduation:</u></legend>
									<select name="g_type" class="size1"<?php echo'placeholder="'.$gyt.'"'?>>
										<option>B.E.</option>
										<option>B.Tech</option>
									</select>
								<br/>
								
								<label>Year of Passing:</label>
								<select class="size101" <?php echo'placeholder="'.$gy.'"'?> name="g_yy">
									<?php
									echo'<OPTION VALUE="'.$phy.'">'.$phy;
									$a=1975;
									$b=1;
									while($a<=2015)
									{
									echo'<OPTION VALUE="'.$a.'">'.$a;
									$a=$a+$b;
									}
									?>
									
								</SELECT>
								<br/>
								<label>CGPA/Percentage:</label>
								<input type="radio" name="marks"  <?php if(isset($marks)&& $marks=="cgpa") echo "cgpa";?>  value="cgpa">CGPA</radio>
								<input type="radio" name="marks"  <?php if(isset($marks)&& $marks=="per") echo "per";?>  value="per">Percentage</radio>

								<!--<input type="text" class="size101" data-validate="number,decimal(2)"<?php //echo'placeholder="'.$gs.'"'?> name="g_cg">-->
								<input type="text" class="size101" <?php echo'placeholder="'.$gs.'"'?> name="g_cg">
								
								<br/>
							   <!-- <div class="input-control text size1" data-role="input-control">
									<input type="text"  onkeypress="return isNumberKey(event)" placeholder="Out of"  name="g_out">
								</div>-->
								<label>Stream:</label>
									<select name="g_stream" class="size3"<?php echo'placeholder="'.$gst.'"'?>>
										<option>Computer Technology</option>
										<option>Computer Science and Engineering</option>
										<option>Electrical Engineering</option>
										<option>Electronics Engineering</option>
										<option>Electronics and Telecommunication Engineering</option>
										<option>Civil Engineering</option>
										<option>Information Technology</option>
										<option>Mechanical Engineering</option>
									</select>
								<br/>
								<label>College:</label>
								<input type="text" class="size3" data-validate="alpha"<?php echo'placeholder="'.$gc.'"'?> name="g_college">
								<br/>
								 <label>University:</label>
								<input type="text" class="size3"data-validate="alpha"<?php echo'placeholder="'.$gu.'"'?> name="g_uni">
								  <br/><br/>
								<legend><u>PG</u></legend>
									<select name="pg_type" class="size1"<?php echo'placeholder="'.$pgy.'"'?>>
										<option>M.E.</option>
										<option>M.Tech</option>
									</select>
								<br/>
								<label>Year of Passing:</label>
								<select class="size101" onkeypress="return isNumberKey(event)" <?php echo'placeholder="'.$py.'"'?> name="pg_yy">
								<?php
								echo'<OPTION VALUE="'.$phy.'">'.$phy;
									$a=1975;
									$b=1;
									while($a<=2015)
									{
									echo'<OPTION VALUE="'.$a.'">'.$a;
									$a=$a+$b;
									}
									?>
									</select>
								<br/>
								
								<label>CGPA/Percentage:</label>
								<input type="radio" name="marks1"  <?php if(isset($marks1)&& $marks1=="cgpa") echo "cgpa";?>  value="cgpa">CGPA</radio>
								<input type="radio" name="marks1"  <?php if(isset($marks1)&& $marks1=="per") echo "per";?>  value="per">Percentage</radio>

								<!--<input type="text" class="size101" data-validate="number,decimal(2)"<?php //echo'placeholder="'.$gs.'"'?> name="g_cg">-->
								<input type="text" class="size0" <?php echo'placeholder="'.$pc.'"'?> name="pg_cg">
								
								
								<!--<label>CGPA/Percentage:</label>
								<input type="text" class="size0" data-validate="number,decimal(2)" <?php //echo'placeholder="'.$pc.'"'?> name="pg_cg">-->
								<br/>
							   <!-- <div class="input-control text size1" data-role="input-control">
									<input type="text" placeholder="Out of"name="pg_out">
								</div>-->
								<label>Stream:</label>
									<select name="pg_stream" class="size3" <?php echo'placeholder="'.$ps.'"'?>>
										<option>Computer Technology</option>
										<option>Computer Science and Engineering</option>
										<option>Electrical Engineering</option>
										<option>Electronics Engineering</option>
										<option>Electronics and Telecommunication Engineering</option>
										<option>Civil Engineering</option>
										<option>Information Technology</option>
										<option>Mechanical Engineering</option>
									</select>
								<br/>
								<label>College:</label>
								<input type="text" class="size3" data-validate="alpha"<?php echo'placeholder="'.$pcl.'"'?> name="pg_college">
								<br/>	
								<label>University:</label>
								<input type="text"class="size3" data-validate="alpha"<?php echo'placeholder="'.$pu.'"'?> name="pg_uni">
								<br/><br/>
								<legend><u>Ph.D</u></legend>
								<label>Year of Passing:</label>
								<select class="size101" onkeypress="return isNumberKey(event)" <?php echo'placeholder="'.$phy.'"'?> name="phd_yy">
								<?php
								echo'<OPTION VALUE="'.$phy.'">'.$phy;
									$a=1975;
									$b=1;
									while($a<=2015)
									{
									echo'<OPTION VALUE="'.$a.'">'.$a;
									$a=$a+$b;
									}
									?></select>
								<br/>
								<label>Subject:</label>
								<input type="text"class="size3" data-validate="alpha"<?php echo'placeholder="'.$sb.'"'?> name="phd_stream">        
								<br/>
								<label>College:</label>
								<input type="text" class="size3"data-validate="alpha"<?php echo'placeholder="'.$phc.'"'?> name="phd_college">
								<br/>	
								 <label>University</label>
								<input type="text" class="size3"data-validate="alpha"<?php echo'placeholder="'.$phu.'"'?> name="phd_uni">       
								<br/>    
							</div>
							<div id="view3">
								<label>Designation:<font color="red">*</font></label>
								<!--<input type="text"class="size3" <?php //echo'placeholder="'.$rite2['des'].'"'?> name="des">
								<br/>-->
								
								
								<select name="des" class="size3" <?php //echo'placeholder="'.$rite2['des'].'"'?>>
								<option value="<?php //echo $rite2['des'];?>"><?php echo $rite2['des'];?></option>
                                <option>HOD</option>
								<option>Assistant Professor</option>
								<option>Associate Professor</option>
								<option>Professor</option>
								</select>
								
								
								
								<label>Department:<font color="red">*</font></label>
								<select name="dept" class="size3" <?php //echo'placeholder="'.$rite2['dept'].'"'?>>
								<!--<select class="size3" data-validate="alpha"<?php //echo'placeholder="'.$rite2['dept'].'"'?> name="dept">-->
								<option value="<?php //echo $rite2['dept'];?>"><?php echo $rite2['dept'];?></option>
                                <option>Computer Technology</option>
										<option>Computer Science and Engineering</option>
										<option>Electrical Engineering</option>
										<option>Electronics Engineering</option>
										<option>Electronics and Telecommunication Engineering</option>
										<option>Civil Engineering</option>
										<option>Information Technology</option>
										<option>Mechanical Engineering</option></select>
								<br/>
								<label>Date of Joining:<font color="red">*</font></label>
								<br/>
								<select name="j_dd" class="size1" onkeypress="return isNumberKey(event)" <?php //echo'placeholder="'.$rite2['dept'].'"'?>>
                                
								<!--<select class="size1" onkeypress="return isNumberKey(event)" <?php// echo'placeholder="'.$j_dd.'"'?> name="j_dd">-->
								<OPTION VALUE="<?php //echo $rite2['j_date'];?>"><?php echo $rite2['j_date'];?>
								<OPTION VALUE="1">1
	<OPTION VALUE="2">2
	<OPTION VALUE="3">3
	<OPTION VALUE="4">4
	<OPTION VALUE="5">5
	<OPTION VALUE="6">6
	<OPTION VALUE="7">7
	<OPTION VALUE="8">8
	<OPTION VALUE="9">9
	<OPTION VALUE="10">10
	<OPTION VALUE="11">11
	<OPTION VALUE="12">12
	<OPTION VALUE="13">13
	<OPTION VALUE="14">14
	<OPTION VALUE="15">15
	<OPTION VALUE="16">16
	<OPTION VALUE="17">17
	<OPTION VALUE="18">18
	<OPTION VALUE="19">19
	<OPTION VALUE="20">20
	<OPTION VALUE="21">21
	<OPTION VALUE="22">22
	<OPTION VALUE="23">23
	<OPTION VALUE="24">24
	<OPTION VALUE="25">25
	<OPTION VALUE="26">26
	<OPTION VALUE="27">27
	<OPTION VALUE="28">28
	<OPTION VALUE="29">29
	<OPTION VALUE="30">30
	<OPTION VALUE="31">31
</SELECT>						<select name="j_mm" class="size1" onkeypress="return isNumberKey(event)" <?php //echo'placeholder="'.$rite2['dept'].'"'?>>
								<!--<select class="size1" onkeypress="return isNumberKey(event)"  <?php //echo'placeholder="'.$j_mm.'"'?> name="j_mm">-->
								<OPTION VALUE="<?php //echo $rite2['j_month'];?>"><?php echo $rite2['j_month'];?>
								<OPTION VALUE="1">1
	<OPTION VALUE="2">2
	<OPTION VALUE="3">3
	<OPTION VALUE="4">4
	<OPTION VALUE="5">5
	<OPTION VALUE="6">6
	<OPTION VALUE="7">7
	<OPTION VALUE="8">8
	<OPTION VALUE="9">9
	<OPTION VALUE="10">10
	<OPTION VALUE="11">11
	<OPTION VALUE="12">12</select>
								<select name="j_yy" class="size2" onkeypress="return isNumberKey(event)" <?php //echo'placeholder="'.$rite2['dept'].'"'?>>
								<!--<select class="size2" <?php //echo'placeholder="'.$j_yy.'"'?> name="j_yy">-->
								<?php
								echo'<OPTION';
								//echo ' VALUE="'.$rite2['j_year'].'"';
								echo '>'.$rite2['j_year'].'';
									$a=1975;
									$b=1;
									while($a<=2015)
									{
									echo'<OPTION VALUE="'.$a.'">'.$a;
									$a=$a+$b;
									}
									?>
									</select>
								<br/>
								<label>Subject Teacher of:<font color="red">*</font></label>
								<input type="text" class="size2"data-validate="alpha"<?php echo'placeholder="'.$rite2['subt'].'"'?> name="sub">
								<br/>
								<label>Experience:<font color="red"></font></label><br/>
								<label>Teaching&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Industry&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Research</label>
								<br/>
								<input type="text" class="size0"onkeypress="return isNumberKey(event)" <?php echo'placeholder="'.$rite2['exp_teach'].'"'?> name="exp_t" >
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="text" class="size0" onkeypress="return isNumberKey(event)" <?php echo'placeholder="'.$rite2['exp_ind'].'"'?> name="exp_i">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="text" class="size0" onkeypress="return isNumberKey(event)" <?php echo'placeholder="'.$rite2['exp_r'].'"'?>name="exp_r">
								<br/>
								<br/>
							</div>					
							<div id="view4">
								<label>Paper Presented in Conferences<font color="red"></font></label><br/>
								<label>National&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International</label>
								<br/>
								<input type="text"class="size0" onkeypress="return isNumberKey(event)" <?php echo'placeholder="'.$rite2['ppr_n'].'"'?> name="ppr_n">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="text" class="size0" onkeypress="return isNumberKey(event)" <?php echo'placeholder="'.$rite2['ppr_in'].'"'?> name="ppr_in">
								<br/>	
								<label>Paper Published<font color="red"></font></label><br/>
								<label>National&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;International&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Journal</label>
								<br/>
								<input type="text" class="size0"onkeypress="return isNumberKey(event)" <?php echo'placeholder="'.$rite2['ppu_n'].'"'?> name="ppu_n">
								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="text"class="size0" onkeypress="return isNumberKey(event)" <?php echo'placeholder="'.$rite2['ppu_in'].'"'?> name="ppu_in">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<input type="text"class="size0" onkeypress="return isNumberKey(event)" <?php echo'placeholder="'.$rite2['ppu_j'].'"'?> name="ppu_j"><br/>
								<label>Awards:<font color="red"></font></label><br />
								<input type="text" class="size8"onkeypress="return isNumberKey(event)" <?php echo'placeholder="'.$rite2['award'].'"'?>name="award">
								<br/>
								<label>Books Published:<font color="red"></font></label><br />
								<input type="text"class="size8" onkeypress="return isNumberKey(event)" <?php echo'placeholder="'.$rite2['book'].'"'?>name="book">
								<br/>
								<label>Consultancy Activities:<font color="red"></font></label><br />
								<input type="text"class="size8" <?php echo'placeholder="'.$rite2['con'].'"'?> name="conat">
								<br/>	
								<label>Professional Body Membership:<font color="red"></font></label><br />
								<input type="text"class="size8" <?php echo'placeholder="'.$rite2['pbm'].'"'?> name="pbm">
								<br/>
								
								<label>Interaction with Professional Institutions:<font color="red"></font></label><br />
								<input type="text" class="size8"<?php echo'placeholder="'.$rite2['inter'].'"'?> name="inter">
								<br/>									
							</div>
						</section>
					</div>
				</form>
               
                	
			</div>
		</div>
		
	</body>
</html>