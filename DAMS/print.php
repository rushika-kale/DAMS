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
		<link href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="js/short.js" type="text/javascript"></script>
		<script src="js/jquery.easing.min.js" type="text/javascript"></script>
		<script src="js/tabcontent.js" type="text/javascript"></script>
		<script src="js/tabcontent1.js" type="text/javascript"></script>
		<script src="js/tinybox.js" type="text/javascript"></script>
		<script src="js/boot-tag.js" type="text/javascript"></script>    
        


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
			<center>Report Generation
				</center></div>
	     
        
   <label for="db">Type of Report</label>
<select name="dbType" id="dbType">
   <option>Selet Type</option>
   <option value="generale">General Event Report</option>
   <option value="generalp">General Publication Report</option>
</select><br />
 <script>
 
   $('#dbType').change(function(){
   selection = $(this).val();    
   switch(selection)
   { 
       case 'generale':
           $('#generale').show();
           $('#generalp').hide();
           break;
       case 'generalp':
           $('#generalp').show();
           $('#generale').hide();
           break;
       
   }
});
</script>

<div id="generale" style="display:none;">
<form name="form2" action="examples/pdf30.php" method="post">
<center>
<label><b>Type of Event:</b></label>
<input type="checkbox" name="event[]" value="workshop" /><label>Workshop</label></t>
<input type="checkbox" name="event[]" value="seminar" /><label>Seminar</label></t>
<input type="checkbox" name="event[]" value="fdp" /><label>FDP</label></t>
<input type="checkbox" name="event[]" value="sttp" /><label>STTP</label></t><br /><br />

<input type="checkbox" name="eventtype[]" value="attended" /><label>Attended</label>
<input type="checkbox" name="eventtype[]" value="organised"/><label>Organised</label>
<br /><br />
<label><b>Type of Attendies:</b></label>
<input type="checkbox" name="attendie[]" value="student" /><label>Student</label>
<input type="checkbox" name="attendie[]" value="faculty"/><label>Faculty</label>
<br /><br />

<label><b>Date:</b></label>
<br />
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
                                From: <input type="text"name="sdate" id="from"/>
	
                                To: <input type="text"name="edate" id="to"/>
<!--<select name="dateType" id="dateType">
   <option>Filter By</option>
   <option value="year">Academic Year</option>
   <option value="semester">Academic Semester</option>
   <option value="custom">Custom</option>
</select>
<script>
 
   $('#dateType').change(function(){
   selection = $(this).val();    
   switch(selection)
   { 
       case 'year':
           $('#year').show();
           $('#semester').hide();
           $('#custom').hide();
           break;
       case 'semester':
           $('#year').hide();
           $('#semester').show();
           $('#custom').hide();
           break;
       case 'custom':
           $('#year').hide();
           $('#semester').hide();
           $('#custom').show();
           break;
       default :
           $('#year').hide();
           $('#semester').hide();
           $('#custom').hide();
           break;
   }
});
</script>
    <div id="year" style="display:none;">
        <label>Academic Year:</label>
        <select name="acyear">
            <option value="2010">2010-11</option>
            <option value="2011">2011-12</option>
            <option value="2012">2012-13</option>
            <option value="2013">2013-14</option>
            <option value="2014">2014-15</option>
            <option value="2015">2015-16</option>
            <option value="2016">2016-17</option>
            <option value="2017">2017-18</option>
            <option value="2018">2018-19</option>
            <option value="2019">2019-20</option>
        </select>
    </div>
    <div id="semester" style="display:none;">
        <label>Academic Year:</label>
        <select name="acyear">
            <option value="2010">2010-11</option>
            <option value="2011">2011-12</option>
            <option value="2012">2012-13</option>
            <option value="2013">2013-14</option>
            <option value="2014">2014-15</option>
            <option value="2015">2015-16</option>
            <option value="2016">2016-17</option>
            <option value="2017">2017-18</option>
            <option value="2018">2018-19</option>
            <option value="2019">2019-20</option>
        </select><br />
        <label>Semester:</label>
        <select name="acsem">
            <option value="odd">ODD</option>
            <option value="even">EVEN</option>
        </select>
    </div>
     <div id="custom" style="display:none;">
      </div>-->
      <br /><br />
    <input type="submit" value="Submit"/>
    </center>
    </form>
</div>

<!--Publication-->
<div id="generalp" style="display:none;">
<form name="form1" action="examples/pdf31.php" method="post">
<center>
<label><b>Type of Publication:</b></label>
<input type="checkbox" name="pub[]" value="journal" /><label>Journal</label></t>
<input type="checkbox" name="pub[]" value="conference" /><label>Conference</label></t>

<br /><br />
<label><b>Specify:</b></label>
<input type="checkbox" name="pubtype[]" value="international" /><label>International</label>
<input type="checkbox" name="pubtype[]" value="national"/><label>National</label>
<br /><br />

<label><b>Date:</b></label><br />

                          							<script>
 $(function() {
    

    dayinput.value="please select date";
    $( "#from1" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        var day = $("#from1").datepicker('getDate');
day.setDate(day.getDate()+1);
        $( "#to1" ).datepicker( "option", "minDate", day );

      }
    });
    $( "#to1" ).datepicker({
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1,
      onClose: function( selectedDate ) {
        $( "#from1" ).datepicker( "option", "maxDate", selectedDate );
      }
    });
    
    
    $('#to1').on('change',function(){
     var days = (daydiff(parseDate($('#from').val()), parseDate($('#to1').val())));
      
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
                                From: <input type="text"name="sdate" id="from1"/>
	
                                To: <input type="text"name="edate" id="to1"/>
<!--<select name="dateType" id="dateType">
   <option>Filter By</option>
   <option value="year">Academic Year</option>
   <option value="semester">Academic Semester</option>
   <option value="custom">Custom</option>
</select>
<script>
 
   $('#dateType').change(function(){
   selection = $(this).val();    
   switch(selection)
   { 
       case 'year':
           $('#year').show();
           $('#semester').hide();
           $('#custom').hide();
           break;
       case 'semester':
           $('#year').hide();
           $('#semester').show();
           $('#custom').hide();
           break;
       case 'custom':
           $('#year').hide();
           $('#semester').hide();
           $('#custom').show();
           break;
       default :
           $('#year').hide();
           $('#semester').hide();
           $('#custom').hide();
           break;
   }
});
</script>
    <div id="year" style="display:none;">
        <label>Academic Year:</label>
        <select name="acyear">
            <option value="2010">2010-11</option>
            <option value="2011">2011-12</option>
            <option value="2012">2012-13</option>
            <option value="2013">2013-14</option>
            <option value="2014">2014-15</option>
            <option value="2015">2015-16</option>
            <option value="2016">2016-17</option>
            <option value="2017">2017-18</option>
            <option value="2018">2018-19</option>
            <option value="2019">2019-20</option>
        </select>
    </div>
    <div id="semester" style="display:none;">
        <label>Academic Year:</label>
        <select name="acyear">
            <option value="2010">2010-11</option>
            <option value="2011">2011-12</option>
            <option value="2012">2012-13</option>
            <option value="2013">2013-14</option>
            <option value="2014">2014-15</option>
            <option value="2015">2015-16</option>
            <option value="2016">2016-17</option>
            <option value="2017">2017-18</option>
            <option value="2018">2018-19</option>
            <option value="2019">2019-20</option>
        </select><br />
        <label>Semester:</label>
        <select name="acsem">
            <option value="odd">ODD</option>
            <option value="even">EVEN</option>
        </select>
    </div>
     <div id="custom" style="display:none;">
      </div>-->
      <br /><br />
    <input type="submit" value="Submit"/>
    </center>
    </form>
</div>

		
		

				
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