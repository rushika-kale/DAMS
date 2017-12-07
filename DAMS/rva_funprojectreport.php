<!DOCTYPE html>


<?php
	include 'rva_common.php';
	$thispage= "funproject";
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="js/jquery.min.js"></script>
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
	
									<script>
											/*	function DoSAll()
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
														
												}*/
												function DoAll()
												{
													document.myform.pfaculty.checked=true;
													document.myform.dfaculty.checked=true;
													document.myform.title.checked = true;
													document.myform.fdate.checked = true;
													document.myform.scheme.checked = true;
													document.myform.amount.checked = true;
													document.myform.status.checked = true;
													document.myform.tarea.checked = true;
													document.myform.uncheck.checked = false;
												}
												function UndoAll()
												{
													document.myform.pfaculty.checked = false;
													document.myform.dfaculty.checked = false;
													document.myform.title.checked = false;
													document.myform.fdate.checked = false;
													document.myform.scheme.checked = false;
													document.myform.amount.checked = false;
													document.myform.status.checked = false;
													document.myform.tarea.checked = false;
													document.myform.all.checked = false;
												}
												function cuncheck()
												{
													if(document.myform.pfaculty.checked == true ||
													document.myform.dfaculty.checked == true ||
													document.myform.title.checked == true ||
													document.myform.fdate.checked == true ||
													document.myform.scheme.checked == true ||
													document.myform.amount.checked == true ||
													document.myform.status.checked == true ||
													document.myform.tarea.checked == true
													)								
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
          <h1 class="page-header">Funding Project Report</h1>
		  <h4></h4>
		  
						
						
						<form name="myform" action="rva_funproject_preview.php" method="post">
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
								
								<?php include'rva_date_session_selector.php'; ?>
								
							<tr>
								<th>All:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="all" onclick="DoAll()"></label></div>
								</td>
							</tr>
							<tr>
								<th>Name Of Faculty:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="pfaculty" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							
							<tr>
								<th>Designation of Faculty:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="dfaculty" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							<tr>
								<th>Title of Project:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="title" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							
							<tr>
								<th>Date of Proposal:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="fdate" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							
							<tr>
								<th>Scheme:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="scheme" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							<tr>
								<th>Amount:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="amount" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							<tr>
								<th>Status:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="status" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							<tr>
								<th>Thrust area:</th>
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
