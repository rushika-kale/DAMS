<!DOCTYPE html>
<?php
//Start session
	session_start();
 
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['username1']) || (trim($_SESSION['username1']) == '')) 
	{
		header('location: index.html');
		exit();
	}
	$username=$_SESSION['username1'];
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Para-Legal Volunteers</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	
	<script>
	function EnableSelect()
	{
		if(document.myform.s1.value=="Family related matters")
		{
			document.myform.s2.disabled=false;
			document.myform.s3.disabled=true;
			document.myform.s4.disabled=true;
		}
		else if(document.myform.s1.value=="Property related matters")
		{
			document.myform.s2.disabled=true;
			document.myform.s3.disabled=false;
			document.myform.s4.disabled=true;
		}
		else
		{
			document.myform.s2.disabled=true;
			document.myform.s3.disabled=true;
			document.myform.s4.disabled=false;
		}
	}
	function EnableTextBox()
	{
		if(document.myform.s2.value=="Others" || document.myform.s3.value=="Others" || document.myform.s4.value=="Others")
		{
			document.myform.other.disabled=false;
		}
		else
		{
			document.myform.other.disabled=true;
		}
	}
	</script>
	
  </head>

  <body role="document">

    <!-- Fixed navbar -->
  <!--  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">E-Resource Support System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div> <!--/.nav-collapse 
      </div>
    </nav> -->

	<div class="container theme-showcase" role="main">
	<p><h2><center>CASE JOURNAL OF PARA-LEGAL VOLUNTEERS</center></h2></p>    
	</div>
	<form name="myform">
	<div class="table_format">
	<table class="table table-bordered">
	<thead>
		<tr align="centre">
		<th>Sr. No.</th>
		<th>Date (DD/MM/YYYY)</th>
		<th colspan=2>Details of the aid seeker</th>
		</tr>
		<tr>
		<td rowspan=14> </td>
		<td> </td>
		<td colspan=2>
			<div class="form-group">
			<label for="usr">Name:</label>
			<input type="text" class="form-control" id="usr" placeholder="First Name-Middle Name-Last Name">
			</div>
		</td>
		</tr>
		<tr>
		<td><b>Time [(HH/MM)AM/PM]</b><br>
			<div class="col-xs-2">
			<label for="ex1">HH</label>
			<input class="form-control" id="ex1" type="text">
			</div>
			<div class="col-xs-2">
			<label for="ex1">MM</label>
			<input class="form-control" id="ex1" type="text">
			</div>
			<div class="form-group">
			<div class="col-xs-3">
			<label for="ex1">AM/PM</label>
			  <select class="form-control" id="sel1">
				<option>AM</option>
				<option>PM</option>
			  </select>
			</div>
		</td>
		<td colspan=2>Gender: <div class="radio">
		  <label><input type="radio" name="optradio">Female</label>
		  <label><input type="radio" name="optradio">Male</label>
		  <label><input type="radio" name="optradio">Third</label>
		</div>
		</td>
		</tr>
		<tr>
		<td rowspan=4> 
		<div class="form-group">
		  <label for="comment">Location of the Clinic</label>
		  <textarea class="form-control" rows="5" id="comment"></textarea>
		</div>
		</td>
		<td colspan=2>Date of Birth (DD/MM/YYYY): <input type="date"> </td>
		</tr>
		<tr>
	
		
		<td colspan=2>
		<div class="form-group">
		  <label for="comment">Residential Address</label>
		  <textarea class="form-control" rows="2" id="comment"></textarea>
		</div>
		</td>
		</tr>
		<tr>
				
		<td colspan=2>
		<div class="form-group">
		  <label for="comment">Permanent Address</label>
		  <textarea class="form-control" rows="2" id="comment"></textarea>
		</div>
		</tr>
		<tr>
		
		<td colspan=2><label>Contact No.</label><div>
			<label for="ex1">Mobile</label>
			<input class="form-control" id="ex1" type="text">
			<label for="ex1">Landline</label>
			<input class="form-control" id="ex1" type="text">
			</div></td>
		
	
	</div>
	<tr>
	
	<td colspan=3>
	<h2><center>Nature of the Problem</center></h2>
	</td>
	</tr>
	<tr>
	<td colspan=3>
	<div class="form-group">
	  <label for="sel1">Select:</label>
	  <select class="form-control" id="s1" onclick="EnableSelect()">
		<option>Family related matters</option>
		<option>Property related matters</option>
		<option>Miscellaneous</option>
	   </select>
	</div>
	</td>
	</tr>
	<tr>

	<td colspan=3>
	<label>Family related matters</label>
	<div class="form-group">
	  <label for="sel1"></label>
	  <select class="form-control" id="s2" onclick="EnableTextBox()" disabled>
		<option>Registration of Marriage</option>
		<option>Adultery</option>
		<option>Sexual abuse of children/Incest issues</option>
		<option>Forced abortion</option>
		<option>Registration of birth/death</option>
		<option>Bigamy</option>
		<option>Senior Citizen(maintenance/residence/property)</option>
		<option>Maintenance</option>
		<option>Adoption</option>
		<option>Dowry</option>
		<option>Divorce/Judicial Separation</option>
		<option>Pre-natal sex determination</option>
		<option>Guardianship/Custody</option>
		<option>Child marriage</option>
		<option>Domestic Violence(physical/emotional/economical)</option>
		<option>Other marriage related issue</option>
		<option>Others</option>
	   </select>
	</div>
	</td>
	</tr>
	<tr>
	<td colspan=3>
	<label>Property related matters</label>
	<div class="form-group">
	  <label for="sel1"></label>
	  <select class="form-control" id="s3" onclick="EnableTextBox()" disabled>
		<option>Transfer of property/Succession</option>
		<option>Illegal Construction/occupation</option>
		<option>Land boundaries</option>
		<option>Mutation</option>
		<option>Rent/Lease related</option>
		<option>Crops/Irrigation</option>
		<option>Related to Will</option>
		<option>Others</option>
	   </select>
	</div>
	</td>
	</tr>
	<tr>

	<td colspan=3>
	<label>Miscellaneous</label>
	<div class="form-group">
	  <label for="sel1"></label>
	  <select class="form-control" id="s4" onclick="EnableTextBox()" disabled>
		<option>Related to wage/MNREGA</option>
		<option>Related to sanitation</option>
		<option>Related to water</option>
		<option>Related to electricity/roadways</option>
		<option>Related to transportation facilities</option>
		<option>Related to schools/Right to Education</option>
		<option>Related to other infrastructures</option>
		<option>Related to government subsidies</option>
		<option>Discrimination based in religion, place of birth</option>
		<option>Voter ID card/Ration Card/BPL Card/Aadhar card</option>
		<option>Driving license/Vehicle Registration</option>
		<option>Bank loans/farm loans/SHG loans</option>
		<option>Pension related</option>
		<option>Filing an FIR</option>
		<option>Discrimination against SC/ST</option>
		<option>Accessing government schemes</option>
		<option>Child Labour</option>
		<option>Manual Scavenging</option>
		<option>Missing Children</option>
		<option>Others</option>
	   </select>
	</div>
	</td>
	</tr>
	<tr>

	<td colspan=3>
	<div class="form-group">
		<label for="other">Others</label>
		<input type="text" class="form-control" id="other" placeholder="If others then specify" disabled>
	</div>
	</td>
	</tr>
	<tr>
	
	<td>
	<label>Details of the Problem</label>
	</td>
	<td>
	<label>Suggestion/Assistance offered</label>
	</td>
	<td>
	<label>Remarks by the aid seeker</label>
	</td>
	</tr>
	<tr>

	<td>
		<div class="form-group">
		  <textarea class="form-control" rows="2" id="comment"></textarea>
		</div>
	</td>
	<td>
		<div class="form-group">
		  <textarea class="form-control" rows="2" id="comment"></textarea>
		</div>
	</td>
	<td>
		<div class="form-group">
		  <textarea class="form-control" rows="2" id="comment"></textarea>
		</div>
	</td>
	</tr>
	<tr>

	<td colspan=4>
	<h2><center>Actions taken in furtherance of the Suggestion(s)</center><h2>
	</td>
	</tr>
	
	<tr>
	<th>Date</th>
	<th>Authority/Person dealt with</th>
	<th>Outcome</th>
	<th>Remarks</th>
	</tr>
	
	<tr>
	<td><input class="form-control" type='date'></td>
	<td>
		<div class="form-group">
		  <textarea class="form-control" rows="2" id="comment"></textarea>
		</div>
	</td>
	<td>
		<div class="form-group">
		  <textarea class="form-control" rows="2" id="comment"></textarea>
		</div>
	</td>
	<td>
		<div class="form-group">
		  <textarea class="form-control" rows="2" id="comment"></textarea>
		</div>
	</td>
	</tr>
	
	<tr>
	<td><input class="form-control" type='date'></td>
	<td>
		<div class="form-group">
		  <textarea class="form-control" rows="2" id="comment"></textarea>
		</div>
	</td>
	<td>
		<div class="form-group">
		  <textarea class="form-control" rows="2" id="comment"></textarea>
		</div>
	</td>
	<td>
		<div class="form-group">
		  <textarea class="form-control" rows="2" id="comment"></textarea>
		</div>
	</td>
	</tr>
	
	
	<tr>
	<td><input class="form-control" type='date'></td>
	<td>
		<div class="form-group">
		  <textarea class="form-control" rows="2" id="comment"></textarea>
		</div>
	</td>
	<td>
		<div class="form-group">
		  <textarea class="form-control" rows="2" id="comment"></textarea>
		</div>
	</td>
	<td>
		<div class="form-group">
		  <textarea class="form-control" rows="2" id="comment"></textarea>
		</div>
	</td>
	</tr>
	
	</thead>
	</table>
	</form>
	
	
     <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
