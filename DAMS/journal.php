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
        <script src="js/short.js" type="text/javascript"></script>
		<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="js/jquery.easing.min.js" type="text/javascript"></script>
		<script src="js/verify.notify.js" type="text/javascript"></script>
		<script src="js/tabcontent.js" type="text/javascript"></script>
		<script src="js/tabcontent1.js" type="text/javascript"></script>
		<script src="js/tinybox.js" type="text/javascript"></script>
		<script src="js/boot-tag.js" type="text/javascript"></script>
		
		<script src="djs/CalendarPopup1.js" type="text/javascript"></script>
		<SCRIPT LANGUAGE="JavaScript">document.write(getCalendarStyles());</SCRIPT>
        
        <!--add more-->
        <script>
		var room = 1;
function add_fields() {
   if(room<5){  room++;
	var anchor="'anchor";
	var xx="xx'";
	var date="'date";
	var da="'yyyy/MM/dd'";
    var objTo = document.getElementById('room_fileds')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<div class="label">Author' + room +':</div><div class="content">Name of Author: <input type="text"name="s'+room+'name" data-validate="required" class="size3"  /><br/>Department: <input type="text"name="s'+room+'institute" class="size3" value="" /><br/>Institute Name: <input type="text"name="s'+room+'institute" class="size3" value="" /><br/>Contact No.:<input type="text" name="s'+room+'contact" data-validate="phone" placeholder="Number"><br/>';
        objTo.appendChild(divtest)
}}
		</script>

<style>
/* font*/

/*form styles*/
.form {

position: relative;
}
.form fieldset {
padding: 20px 30px;
box-sizing: border-box;
/*stacking fieldsets above each other*/

}
/*Hide all except first fieldset*/
.form fieldset:not(:first-of-type) {
display: none;
}
/*inputs*/
/*buttons*/
.form .action-button {
width: 80px;
height:10px;
background: #7D0F33;
font-weight: bold;
color: white;
border: 0 none;
border-radius: 1px;
cursor: pointer;
padding: 10px 5px;
margin: 10px 5px;

}
.form .action-button:hover, .form .action-button:focus {
box-shadow: 0 0 0 2px white, 0 0 0 3px #27AE60;
}
/*headings*/
.fs-title {
font-size: 15px;
text-transform: uppercase;
color: #2C3E50;
margin-bottom: 10px;
}
.fs-subtitle {
font-weight: normal;
font-size: 13px;
color: #666;
margin-bottom: 20px;
}
/*progressbar*/
#progressbar {
margin-bottom: 30px;
overflow: hidden;
/*CSS counters to number the steps*/
counter-reset: step;
}
#progressbar li {
list-style-type: none;
color: 7D0F33;
text-transform: uppercase;
font-size: 9px;
width: 25%;
float: left;
position: relative;
}
#progressbar li:before {
content: counter(step);
counter-increment: step;
width: 20px;
text-align:center;
line-height: 20px;
display: block;
font-size: 10px;
color: #333;
background: white;
border-radius: 3px;
margin: 0 10px 5px 20px;
}
/*progressbar connectors*/
#progressbar li:after {
content: '';
width: 100%;
height: 2px;
background: red;
position: absolute;
left: -50%;
top: 9px;
z-index: -1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
/*connector not needed before the first step*/
content: none;
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before, #progressbar li.active:after {
background: #27AE60;
color: black;
}
</style>

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
			<center>Journals
				</center></div>
			<?php
	$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());	
$username=$_SESSION['username1'];	
			$result = mysql_query("SELECT * FROM Journals WHERE username='$username'");
			?>
		<form  class="form" action="insertwork2.php"  method="post">
							<ul id="progressbar">
		<li class="active">Journal </li>
		<li>Author</li>
		<li>Article Details</li>
	    <li>Abstract</li>
		</ul>				
					<fieldset>
 
<!--<input type="text" value="<>" data-role="tagsinput" />-->
								<table>						
							<label>Name of Article:</label><br />
								<input type="text" class="size3" name="namepb" data-validate="alphanumeric" placeholder="Journals Name">
								<br/>
								<label>Type:<label><br />
								<select class="size2" >
								  <option>Book chapter</option>
								  <option>Book</option>
								  <option>Dataset</option>
                                   <option>Patent</option>
                                   <option>Technical Report</option>
                                   <option>Thesis</option>                 
								  <option placeholder="" value="Custom">Custom</option> 
								</select><br />
								<!--<input type="text" id="theinput" name="theinput" disabled />-->
								<!--<script>

								function combo(thelist, theinput) {
									theinput = document.getElementById(theinput);
									var idx = thelist.selectedIndex;
									var content = thelist.options[idx].innerHTML;
									
                                    if(content=="Custom")
                                    {
                                        theinput.removeAttribute('disabled',true);
                                        theinput.value=="";
                                    }else{
                                        theinput.setAttribute('disabled',true);
                                    theinput.value =content;    
                                    }
								}</script>--></table>
												<!--<script>

												function combo1(thelist, theinput) {
													theinput = document.getElementById(theinput);
													var idx = thelist.selectedIndex;
													var content = thelist.options[idx].innerHTML;
													theinput.value = content;
												}</script>-->
								
								
							</font><input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
<fieldset>
<table> 						
                                <div id="room_fileds">          
									<div class='label'>Author1:</div>
									<div class="content">
										Name of Author: <input type="text" data-validate="required" name="s1name" class="size3"/><br/>
										Department: <input type="text" class="size3" value="" name="s1inst" /><br/>
                                        Institute Name: <input type="text" class="size3" value="" name="s1inst" /><br/>
										Contact Number:<input type="text" data-validate="phone" name="s1contact" placeholder="Number"><br/>
									</div>
								   </div>
								   <input type="button" id="more_fields" onclick="add_fields(this);"  value="Add More Speaker"  ><br/>
								
							</table>
<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
<fieldset>

    
   <table>
		
   									<tr><td style="width:240px;"><label>Journal Citations:</label></td>
								<td><input type="text" class="size3" name="cocoordinator"placeholder="Name"><br/>
								</td></tr>
								<tr><td style="width:240px;"><label>Tags:</label></td>
								<td><input type="text" class="size3" name="organisers" placeholder="Name"><br/>
								</td></tr>
                                <tr><td style="width:200px;"><label>DOI:</label></td><!--value-->
								<td><input type="text" class="size3" name="organisedept" placeholder="Name"/><br/>
								</td></tr>
                                <tr><td style="width:200px;"><label>Link of Journal:</label></td><!--value-->
								<td><input type="text" class="size3" name="organisedept" placeholder="Name"/><br/>
								</td></tr>
                                <tr><td style="width:200px;"><label>Impact Factor/ICV:</label></td><!--value-->
								<td><input type="text" class="size3" name="organisedept" placeholder="Name"/><br/>
								</td></tr>
                                <tr><td style="width:200px;"><label>Free paid</label></td><!--value-->
								<td><input type="text" class="size3" name="organisedept" placeholder="Name"/><br/>
								</td></tr>
									</table>	
						
<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
<fieldset>

    
   <table>
                                <tr><td style="width:200px;"><label>Abstract</label></td><!--value-->
								<td><textarea class="size8" style="height: 100px;" name="organisedept" placeholder="Name"></textarea> <br/>
								</td></tr>
									</table>	
						
<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="submit" name="Submit" class="submit action-button" value="Submit" />
</fieldset>	
	</form>

				
<script type="text/javascript">
					$('form').verify.notify();
				</script>
		</div>
		</div>
		
<!-- jQuery --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- jQuery easing plugin --> 
<script src="js/jquery.easing.min.js" type="text/javascript"></script> 
<script>
$(function() {

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});


});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	</body>
</html>