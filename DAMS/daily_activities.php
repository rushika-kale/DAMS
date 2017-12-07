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

    <title>Volunteers Diary:Part B</title>

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
	<!--
	
	
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
	<p><h2><center>PARA-LEGAL VOLUNTEERS DIARY : PART B[MISCELLANEOUS ACTIVITIES]</center></h2></p>    
	</div>
	<form name="myform">
	<div class="table_format">
	<table class="table table-bordered">
	<thead>
	<tr align="centre">
		<td><label>Sr. No.</label></td>
		<td><input type="text"></td>
	</tr>
	<tr align="centre">
		<td><label>Date[MM/DD/YYYY]</label></td>
		<td><input type="date"></td>
	</tr>
	<tr align="centre">
		<td><label>Time[HH/MM][AM/PM]</label></td>
		<td><input type="text"></td>
	</tr>
	
	<tr align="centre">
		<td><label>Name of PLV/PL</label></td>
		<td><input type="text"></td>
	</tr>
		
	<tr align="centre">
		<td><label>Name of aid seeker</label></td>
		<td><input type="text"></td>
	</tr>
	
	<tr align="centre">
		<td><label>Contact number of aid seeker</label></td>
		<td><input type="text"></td>
	</tr>
	
	<tr align="centre">
		<td><label>Address of aid seeker</label></td>
		<td><input type="text"></td>
	</tr>
	
	<tr align="centre">
		<td><label>Nature of service(in brief)</label></td>
		<td><input type="text"></td>
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
