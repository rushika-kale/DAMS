<?php
//Start session
session_start();
 
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['username1']) || (trim($_SESSION['username1']) == '')) {
header("location: home.html");
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

	 ?><html>
<!--<li onclick="TINY.box.show({iframe:'new2.html',boxid:'frameless',width:750,height:450,fixed:false,maskid:'bluemask',maskopacity:40,closejs:function(){closeJS()}})">iFrame, Blue Mask, Absolute Position, Frameless, Close Callback</li>-->
	<head>
				<link href="css/menu.css" rel="stylesheet" type="text/css" />
            <link href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
            <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
            <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
            <script src="js/short.js" type="text/javascript"></script>
            <script src="js/verify.notify.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js"></script>
<script> $.validate({
  borderColorOnError : '#FFF',
  addValidClassOnAll : true
}); </script>
	</head>
	<body>
		<form name="data" action="inserttysttp.php"  enctype="multipart/form-data" method="post">
			<label>Name<font color="red">*</font></label>
			<input type="text" class="size4" name="wname" placeholder="Enter sttp Name"><br/>
			<label>Date&nbsp;<font color="red">*</font></label><br/>
			
    
    
    <script>
 $(function() {
    

    days.value="please select date";
    $( "#join" ).datepicker({
        dateFormat: "yy-mm-dd",
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1 });
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
     var da = (daydiff(parseDate($('#from').val()), parseDate($('#to').val())));
      
      days.value=da;
      
      
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
 
    
    
    
    
                               From: <input type="text"name="sdate" id="from"data-validate="required"/>
	
                                To: <input type="text"name="edate" id="to"data-validate="required"/>
    
			<br/><label>No. of days of sttp<font color="red">*</font></label>
			<input type="text" name="days" id="days" readonly>
			<br/><label><font>Joining Date
             <input type="text"name="jdate" id="join"data-validate="required"/></font></label>
			

			<br/><label>Place of sttp<font color="red">*</font></label>
			<input type="text" class="size3" name="wvenue"  placeholder="Place name"><br/>
			<label>Registration fees:<font color="red">*</font></label>
			<input type="text" class="size3" name="regfees"  placeholder="Rs."><br/>
			<tr>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<!--<th><label>Attachment 1<font color="red"></font></label></th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<th><label>Atachment 2<font color="red"></font></label></th>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
			<th><label>Attachment 3<font color="red"></font></label></th>
			</tr>
			<br/><tr>-->
			
			<?php
			
			/*$image = mysql_fetch_array(mysql_query("SELECT wattach1 FROM  faculty.sttp where username='$username' &&wname='$wname'"));
						if (isset($image['wattach1'])  AND !empty($image['wattach1']))
						{
			$image=$image['wattach1'];	
				echo"<font color='blue'>already uploaded</font>&nbsp;&nbsp;&nbsp;";
									echo'</td><input name="wattach1" class="size3"type="file"style="visibility:hidden; position:absolute;"></td>';
				
								}
								else{
									echo'</td><input name="wattach1" class="size3"type="file"></td>';
								}
								$image = mysql_fetch_array(mysql_query("SELECT wattach2 FROM  faculty.sttp where username='$username'"));
							if (isset($image['wattach2'])  AND !empty($image['wattach2']))
								{
									$image=$image['wattach2'];	
				echo"<font color='blue'>already uploaded</font>&nbsp;&nbsp;&nbsp;";
									echo'</td><input name="wattach1" class="size3"type="file"style="visibility:hidden; position:absolute;"></td>';
				
				}
							else{
									echo'<td><input type="file" class="size3" name="wattach2"></td>';
								}
							$image = mysql_fetch_array(mysql_query("SELECT wattach3 FROM  faculty.sttp where username='$username'"));
							if (isset($image['wattach3'])  AND !empty($image['wattach3']))
								{
									$image=$image['wattach3'];	
				echo"<font color='blue'>already uploaded</font>&nbsp;&nbsp;&nbsp;";
									echo'</td><input name="wattach1" class="size3"type="file"style="visibility:hidden; position:absolute;"></td>';
				
				}
							else{	
									echo'<td>&nbsp;&nbsp;&nbsp;<input type="file" class="size3" name="wattach3"></td></tr>';
								}
*/?>
			</tr>
			<center><input type="submit" value="submit"></center>
		</form>
		<DIV ID="testdiv1" STYLE="position:absolute;visibility:hidden;background-color:white;layer-background-color:white;"></DIV>

		</body>
</html>