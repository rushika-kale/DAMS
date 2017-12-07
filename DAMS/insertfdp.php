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
if(isset($_GET['title']) AND !empty($_GET['title'])AND isset($_GET['user']) AND !empty($_GET['user']))
{
    if($_GET['user']==$username)
    {
        $title=$_GET['title'];
        $editor=1;
        
        $table=$_GET['type'];        
        $request=mysql_query( "SELECT * from $table where username='$username'&& name='$title'");
        $row=mysql_fetch_array($request);
    }
    else
    header('location: error.php');
}

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
		<link href="css/jquery-ui.css" rel="stylesheet" type="text/css" />
        
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/jquery-ui.js"></script>
		
        <script src="js/short.js" type="text/javascript"></script>
		
		<script src="js/jquery.easing.min.js" type="text/javascript"></script>
		
		<script src="js/tabcontent.js" type="text/javascript"></script>
		<script src="js/tabcontent1.js" type="text/javascript"></script>
		<script src="js/tinybox.js" type="text/javascript"></script>
		<script src="js/boot-tag.js" type="text/javascript"></script>    
        <script src="js/typeahead.bundle.js" type="text/javascript"></script>
    

<style>
/* font*/


</style>

		
		
	
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
    divtest.innerHTML = '<div class="label">Speaker' + room +':</div><div class="content">Name of Speaker: <input type="text"name="s'+room+'name" data-validate="required" class="size3"  /><br/>Institute Name: <input type="text"name="s'+room+'institute" class="size3" value="" /><br/>Contact No.:<input type="text" name="s'+room+'contact" data-validate="phone" placeholder="Number"><br/>Email:<input type="text"data-validate="email" name="s'+room+'email" placeholder="email"></div><DIV ID="testdiv1" STYLE="position:fixed;visibility:hidden;background-color:white;layer-background-color:white;"></DIV>';
        objTo.appendChild(divtest)
}}
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
			<div id="style1">
			<center>Faculty Development Programs
				</center></div>
			<?php
	$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());	
$username=$_SESSION['username1'];	
			$result = mysql_query("SELECT * FROM fdp WHERE username='$username'");
			?>
		<form  class="form" action="insertfdp2.php"  method="post">
							<ul id="progressbar">
		<li class="active">Faculty Development Program Details</li>
		<li>Committee</li>
		<li>Participants Details</li>
		<li>Speakers Details</li>
		</ul>				
					<fieldset>
 
<!--<input type="text" value="<>" data-role="tagsinput" />-->
								<table>						
							<tr><td style="width:200px;"><label>Name of Programme:</label></td>
								<?php 
                                if($editor==1){
                                ?><td><input type="text" class="size3" name="namepr" data-validate="alpha" placeholder="<?php echo $row['name'] ?>"></td><?php } 
                                else{
                                ?><td><input type="text" class="size3" name="namepr" data-validate="alpha,required" placeholder="Faculty Development Program Name"></td><?php } ?>
                                </tr>
								<br/>
								<tr><td style="width:200px;"><label>Name of Technnical: Body<label></td>
								<td><select name="thelist" onChange="combo(this, 'theinput')">
                                <?php if($editor==1){ ?>
                                  <option value="<?php echo $row['tech_body'] ?>" ><?php echo $row['tech_body'] ?></option>
                                  <?php } ?>
								  <option>ISTE</option>
								  <option>AICTE</option>
								  <option>DST</option>
								  <option placeholder="" value="Custom">Custom</option> 
								</select>
								<input type="text" id="theinput" name="theinput" disabled />
								<script>

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
								}</script></td></tr></table><br/>
								
								Sponsored<input type="radio" name="finance" value="sponsored"/>
								Self-Financed<input type="radio" name="finance" value="self_financed"/><br/><br/>
								<label> Date of Programme</label><br/>
                              							<script>
 $(function() {
    

    dayinput.value="please select date";
    $( "#from" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        var day = $("#from").datepicker('getDate');
day.setDate(day.getDate()+1);
        $( "#to" ).datepicker( "option", "minDate", day );

      }
    });
    $( "#to" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#from" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
    
    
    $('#to').on('change',function(){
     var days = (daydiff(parseDate($('#from').val()), parseDate($('#to').val())));
      
      dayinput.value=days;
      
      
    })
    
    function parseDate(str) {
    var mdy = str.split('/')
    return new Date(mdy[2], mdy[0]-1, mdy[1]);
}

function daydiff(first, second) {
    return (second-first)/(1000*60*60*24);
}
    
  });
  </script>
                                From: <input type="text"name="sdate" <?php if($editor==1){ ?>placeholder="<?php echo  $row['w_date'] ?>" <?php } ?> id="from"/>
	
                                To: <input type="text"name="edate" <?php if($editor==1){ ?>placeholder="<?php echo  $row['w_date2'] ?>" <?php } ?> id="to"/>
                                
				<br/><table>
					<tr><td>No. of Days:</td><td><input type="text" name="dayinput" <?php if($editor==1){ ?>placeholder="<?php echo  $row['days'] ?>" <?php } ?> id="dayinput" disabled> </td></tr>
                				<tr><td>Role:</td><td><select name="organiser" class="size2">
								  <?php if($editor==1){ ?><option value="<?php echo $row['role']; ?>"><?php echo $row['role']; ?></option><?php } ?>
                                  <option value="convenor">Convenor</option>
								  <option value="coconvenor">Co-Convenor</option>
								  <option value="coordinator">Cordinator</option>
								  <option value="cocoordinator">Co-cordinator</option></select></td></tr>
								   </table>
											
								
								
							</font><input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
<fieldset>
<table> <tr><td style="width:240px;"><label>Name of Convenor:</label></td>
								<?php if($editor==1){ ?><td><input type="text" class="size3"name="convenor" placeholder="<?php echo $row['convenor'] ?>" data-validate="alpha"><br/>
								</td> <?php } else { ?>
                                <td><input type="text" class="size3"name="convenor" placeholder="Name"data-validate="alpha,required"><br/>
								</td> <?php } ?>
                                </tr>
								<tr>
                               <td style="width:240px;"><label>Name of Co-convenor:</label></td> <?php if($editor==1){ ?>
								<td><input type="text" class="size3" name="coconvenor"placeholder="<?php echo $row['coconvenor'] ?>"data-validate="alpha"><br/>
								</td> <?php } else { ?>
                                <input type="text" class="size3" name="coconvenor"placeholder="Name"data-validate="alpha,required"><br/>
                                </td> <?php } ?>
                                </tr>
								<tr>
                                <td style="width:240px;"><label>Name of Co-ordinator:</label></td><?php if($editor==1){ ?>
								<td><input type="text" class="size3" name="coordinator" placeholder="<?php echo $row['coordinator'] ?>" data-validate="alpha"><br/>
								</td> <?php } else { ?>
                                <input type="text" class="size3" name="coordinator" placeholder="Name" data-validate="alpha,required"><br/>
                                </td> <?php } ?>
                                </tr>
								<tr><td style="width:240px;"><label>Name of Co-Coordinator:</label></td>
                                 <?php if($editor==1){ ?>
								<td><input type="text" class="size3" name="cocoordinator"placeholder="<?php echo $row['cocoordinator'] ?>" data-validate="alpha"><br/>
								</td> <?php } else { ?>
                                <td><input type="text" class="size3" name="cocoordinator"placeholder="Name" data-validate="alpha,required"><br/>
                                 </td> <?php } ?>
                                </tr>
								<tr><td style="width:240px;"><label>Name of Organizing Committee:</label></td>
                                <?php if($editor==1){ ?>
								<td><input type="text" class="size3" name="organisers" placeholder="<?php echo $row['organiser'] ?>" data-validate="alpha"><br/>
								</td> <?php } else { ?>
                                <td><input type="text" class="size3" name="organisers" placeholder="Name" data-validate="alpha,required"><br/>
                                </td> <?php } ?>
                                </tr>
								<tr><td style="width:200px;"><label>Organising Department:</label></td>
								<td><input type="text" class="size3" name="organisedept" placeholder="Name" data-validate="alpha,required"/><br/>
								</td></tr>
							</table>
<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
<fieldset>

									Faculty Development Program organised for:<br/>
									<script type="text/javascript">

function yesnoCheck() {
    if (document.getElementById('stud').checked) {
        document.getElementById('both').style.display = 'block';
        
    }
    else {
           document.getElementById('both').style.display = 'none';    
}
}

</script>
student <input type="radio" onclick="javascript:yesnoCheck();" name="participant" id="stud"/>
 faculty <input type="radio" onclick="javascript:yesnoCheck();" name="participant" id="fac"/><br/>
    <!--<div id="both" style="display:none">
        No of students: <input type='text' id='yes' name='yes'/><br/>
        Name of institution:  <input type='text' id='acc' name='acc'/>
    </div>-->
    
   <table><tr><td style="width:150px;">No. of Participants:</td><td><input type="text" CLASS="size0" name="count" data-validate="number,required"><Td></tr><tr>
<tr><td style="width:150px;"><label>Participants from:</label></td><td><input type="text" class="size5"  value="" data-role="tagsinput" data-validate="alpha,required" />










</td>
                    </tr>									</table>	
						
<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
<fieldset>
		  <div id="room_fileds">
          
									<div class='label'>Speaker1:</div>
									<div class="content">
										Name of Speaker: <input type="text" data-validate="number,required" name="s1name" class="size3"/><br/>
										Institute Name: <input type="text" class="size3" value="" name="s1inst" data-validate="alpha,required"/><br/>
			<!--							<SCRIPT LANGUAGE="JavaScript" ID="jscal1xx">
				var cal1xx = new CalendarPopup("testdiv1");
				cal1xx.showNavigationDropdowns();
			</SCRIPT>
			Date of Lecture:<INPUT TYPE="text" NAME="date4xx" VALUE="" SIZE=25>
			<input type="button" class="date"onClick="cal1xx.select(document.forms[0].date4xx,'anchor4xx','yyyy/MM/dd'); return false;" TITLE="cal1xx.select(document.forms[0].date4xx,'anchor4xx','yyyy/MM/dd	'); return false;" NAME="anchor4xx" value="select date" ID="anchor4xx"><br/>-->
										Contact Number:<input type="text" data-validate="phone" name="s1contact" placeholder="Number"><br/>
										Email Id:<input type="text"class="size3"data-validate="email" name="s1email"placeholder="email">
									</div>
								   </div>
								   <input type="button" id="more_fields" onclick="add_fields(this);"  value="Add More Speaker"  ><br/>
<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="submit" name="submit" class="submit action-button" value="Submit" />
</fieldset>

				</form>

				
		</div>
		</div>
		
<!-- jQuery --> 

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