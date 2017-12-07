<!DOCTYPE html>


<?php
	include 'rva_common.php';
	$thispage= "orgcount";
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
	
	
									<script type="text/javascript">
												function DoAll()
												{
													document.myform.workshop.checked = true;
													document.myform.fdpsttp.checked = true;
													document.myform.seminar.checked = true;
													document.myform.indus.checked = true;
													document.myform.uncheck.checked = false;
												}
												function UndoAll()
												{
													document.myform.workshop.checked = false;
													document.myform.fdpsttp.checked = false;
													document.myform.seminar.checked = false;
													document.myform.indus.checked = false;
													document.myform.all.checked = false;
												}
												function cuncheck()
												{
													if(document.myform.workshop.checked==true || 
													document.myform.fdpsttp.checked==true || 
													document.myform.seminar.checked == true ||
													document.myform.indus.checked == true)								
													document.myform.uncheck.checked = false;
												}
									
									</script>
									
									
									
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
          <h1 class="page-header">Total Events</h1>
		  <h4></h4>
		  
						
						
						<!--<form>
						(month and year):
						  <input type="month" name="bdaymonth">
						</form>-->
						
						<form name="myform" action="rva_count_preview.php" method="post">
						<table class="table table-striped">
						<thead>
						<tr>
						<th></th>
						<th></th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<th>All:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="all" onclick="DoAll()"></label></div>
								</td>
							</tr>
							<tr>
								<th>Workshops</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="workshop" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							
							<tr>
								<th>FDP/STTPs</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="fdpsttp" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							<!--<tr>
								<th>Conferences</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="conference" onclick="cuncheck()"></label></div>
								</td>
							</tr>-->
							
							<tr>
								<th>Seminars</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="seminar" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							<tr>
								<th>Industrial Visits</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="indus" onclick="cuncheck()"></label></div>
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
