<!DOCTYPE html>


<?php
	//Start session
	session_start();
 
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['username1']) || (trim($_SESSION['username1']) == '')) 
	{
		header('location: index.php');
		exit();
	}
	$username=$_SESSION['username1'];
	$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
	$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());
	$res=mysql_query("Select * FROM profile WHERE username='$username'");
	$row=mysql_fetch_array($res);
	$fname=$row['f_name'];
	$thispage= "orgfdpsttp";
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

    <title>REPORT GENERATION</title>

	
	
	
	
	
	
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
	<link href="blog.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
<script src="js/jquery.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script>
								
									
									$( document ).ready(function()
									{
										$("#srange_show").hide();
										$("#drange_show").hide();	
									
									
									
									
									$("#srange").click(function(){
										$("#srange_show").show();
										$("#drange_show").hide();
									});
									$("#drange").click(function(){
										$("#drange_show").show();
										$("#srange_show").hide();
									});									
									
									});
									
	</script>
									
	
									<script type="text/javascript">
									
									
												function DoSAll()
												{
													document.myform.s2012_13.checked = true;
													document.myform.s2013_14.checked = true;
													document.myform.s2014_15.checked = true;
													document.myform.s2015_16.checked = true;
													document.myform.suncheck.checked = false;
												}
												function UndoSAll()
												{
													document.myform.s2012_13.checked = false;
													document.myform.s2013_14.checked = false;
													document.myform.s2014_15.checked = false;
													document.myform.s2015_16.checked = false;
													document.myform.sall.checked = false;
												}
												function Scuncheck()
												{
													if(document.myform.s2012_13.checked==true || 
													document.myform.s2013_14.checked==true || 
													document.myform.s2014_15.checked == true ||
													document.myform.s2015_16.checked == true)													
													document.myform.suncheck.checked = false;
														
												}
												function DoAll()
												{
													document.myform.name.checked = true;
													document.myform.tevent.checked = true;
													document.myform.nevent.checked = true;
													document.myform.nspeaker.checked = true;
													document.myform.date.checked = true;
													document.myform.days.checked = true;
													document.myform.npart.checked = true;
													document.myform.agency.checked = true;
													document.myform.tarea.checked = true;
													document.myform.uncheck.checked = false;
												}
												function UndoAll()
												{
													document.myform.name.checked = false;
													document.myform.tevent.checked = false;
													document.myform.nevent.checked = false;
													document.myform.nspeaker.checked = false;
													document.myform.date.checked = false;
													document.myform.days.checked = false;
													document.myform.npart.checked = false;
													document.myform.agency.checked = false;
													document.myform.tarea.checked = false;
													document.myform.all.checked = false;
												}
												function cuncheck()
												{
													if(document.myform.name.checked == true ||
													document.myform.tevent.checked == true ||
													document.myform.nevent.checked == true ||
													document.myform.nspeaker.checked == true ||
													document.myform.date.checked == true ||
													document.myform.days.checked == true ||
													document.myform.npart.checked == true ||
													document.myform.agency.checked == true ||
													document.myform.tarea.checked == true)								
														document.myform.uncheck.checked = false;
												}
									
									</script>
									
									
	
  </head>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>REPORT GENERATION</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
	<link href="blog.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
		
  </head>

  
	  <body>
		<?php include ('rva_navigation.php'); ?>
	
			
			  
	
	
	
	
    <div class="container-fluid">
     		
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Organized FDP/STTP Report</h1>
		  <h4></h4>
		  
						
						
						<form name="myform" action="rva_fdpsttp_preview.php" method="post">
						<table class="table table-striped">
						<thead>
						<tr>
						<th></th>
						<th></th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<th colspan='2'>Select Session</th>
							</tr>
					<!--			<th>All Sessions:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="sall" onclick="DoSAll()"></label></div>
								</td>
							</tr>
                     -->
					

								
							<tr>	
								<td>
									<div class="radio" id="srange">
										 <label style="padding-right:40px" for="range">Select Session Range</label>
										  <input type="radio" name="range" value="1">
									</div>
								</td>
							</tr>
							<tr>
								<td>
								
								<div class="row" id="srange_show">
									 <div class="form-group col-lg-4 col-sm-4 col-md-4 col-xs-6">
									  <label for="from_session">FROM:</label>
									  <select class="form-control" name="from_session" id="from_session">
										<option>2012-13</option>
										<option>2013-14</option>
										<option>2014-15</option>
										<option>2015-16</option>
									  </select>
									</div>

									<div  class="form-group col-lg-4 col-sm-4 col-md-4 col-xs-6">
									  <label for="to_session">TO:</label>
									  <select class="form-control" name="to_session" id="to_session">
										<option>2012-13</option>
										<option>2013-14</option>
										<option>2014-15</option>
										<option>2015-16</option>
									  </select>
									</div>
								</div>
								</td>
							</tr>
				
							<tr>
								<td>
									<div class="radio" id="drange">
										 <label style="padding-right:60px" for="range">Select Date Range</label>
										  <input type="radio" name="range" value="2">
									</div>
								</td>
							</tr>
							<tr>
								<td>
								<div class="row" id="drange_show">
									<div  class="form-group col-lg-4 col-sm-4 col-md-4 col-xs-6">	<label for="from">FROM:</label> <input type="date" name="from">
									</div>
									<div  class="form-group col-lg-4 col-sm-4 col-md-4 col-xs-6">
									<label for="to">TO:</label> <input type="date" name="to">
									</div>
								</div>
								</td>
							</tr>


							<tr>
								<th>All:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="all" onclick="DoAll()"></label></div>
								</td>
							</tr>
							<tr>
								<th>Name Of Co-ordinator:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="name" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							
							<tr>
								<th>Type of Event:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="tevent" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							<tr>
								<th>Name of Event:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="nevent" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							
							<tr>
								<th>Name of Speaker:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="nspeaker" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							<tr>
								<th>Date:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="date" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							<tr>
								<th>No. of Days:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="days" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							<tr>
								<th>No. of Participants:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="npart" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							<tr>
								<th>Agency Involved:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="agency" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							<tr>
								<th>Thrust Area</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="tarea" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							
							
							<tr>
								<th>Uncheck All:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="uncheck" onclick="UndoAll()"></label></div>
								</td>
							</tr>
							
						</tbody>
						</table>
						<nav>
							<ul class="pager">
								<input type="submit" class="btn btn-info" name="submit1" value="Preview">
								<!--<a href="rva_facprofile_excel_1_A.php" class="btn btn-info" role="button">Excel Download</a>-->
								<input type="submit" class="btn btn-info" name="submit2" value="Excel Download">
							</ul>
						</nav>
						</form>
						
        </div>
      </div>
    </div>
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
