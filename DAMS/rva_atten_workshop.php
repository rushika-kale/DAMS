<!DOCTYPE html>


<?php
	include 'rva_common.php';
	$thispage= "attenworkshop";
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
									<script type="text/javascript">
												function DoAll()
												{
													document.myform.workshop.checked = true;
													document.myform.name.checked = true;
													document.myform.place.checked = true;
													document.myform.date.checked = true;
													document.myform.days.checked = true;
													document.myform.uncheck.checked = false;
												}
												function UndoAll()
												{
													document.myform.workshop.checked = false;
													document.myform.name.checked = false;
													document.myform.place.checked = false;
													document.myform.date.checked = false;
													document.myform.days.checked = false;
													document.myform.all.checked = false;
												}
												function cuncheck()
												{
													if(document.myform.workshop.checked==true || 
													document.myform.name.checked==true || 
													document.myform.place.checked == true ||
													document.myform.date.checked == true ||
													document.myform.days.checked == true)								
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

  		<?php include ('rva_navigation.php'); ?>
	
	
	
	
    <div class="container-fluid">
     		
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Workshop Report</h1>
		  <h4></h4>
		  
						
						
						<!--<form>
						(month and year):
						  <input type="month" name="bdaymonth">
						</form>-->
						
						<form name="myform" action="rva_atten_workshop_preview.php" method="post">
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

					

								
							<?php include('rva_date_session_selector.php') ?>

							<tr>
								<th>All:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="all" onclick="DoAll()"></label></div>
								</td>
							</tr>
							<tr>

							
							<tr>
								<th>Type of Event:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="workshop" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							<tr>
								<th>Name of Event:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="name" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							<tr>
								<th>Place:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="place" onclick="cuncheck()"></label></div>
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
								<th>Uncheck All:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="uncheck" onclick="UndoAll()"></label></div>
								</td>
							</tr>
						</tbody>
						</table>
						<nav>
							<ul class="pager">
								<input type="submit" class="btn btn-info" value="Preview">
								<a href="rva_workshop_excel_1_A.php" class="btn btn-info" role="button">Excel Download</a>
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
