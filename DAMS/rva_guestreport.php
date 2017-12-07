<!DOCTYPE html>


<?php
	include 'rva_common.php';
	$thispage= "guestreport";
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
												function cuncheck()
												{
													if(document.myform.s2012_13.checked==true || 
													document.myform.s2013_14.checked==true || 
													document.myform.s2014_15.checked == true ||
													document.myform.s2015_16.checked == true)								
														document.myform.suncheck.checked = false;
												}
                                                function DoAll()
                                                {
                                                    document.myform.category.checked = true;
													document.myform.organizer.checked = true;
													document.myform.topic.checked = true;
													document.myform.speaker.checked = true;
													document.myform.adate.checked = true;
                                                    document.myform.expense.checked = true;
                                                    document.myform.feedback.checked = true;
                                                    document.myform.uncheck.checked = false;
                                                }
                                                function UndoAll()
                                                {
                                                    document.myform.category.checked = false;
													document.myform.organizer.checked = false;
													document.myform.topic.checked = false;
													document.myform.speaker.checked = false;
													document.myform.adate.checked = false;
                                                    document.myform.expense.checked = false;
                                                    document.myform.feedback.checked = false;
                                                    document.myform.acheck.checked = false;
                                                }
                                                function suncheckk()
                                                {
                                                    if(document.myform.category.checked = true||
													document.myform.organizer.checked = true||
													document.myform.topic.checked = true||
													document.myform.speaker.checked = true||
													document.myform.adate.checked = true||
                                                    document.myform.expense.checked = true||
                                                    document.myform.feedback.checked = true)
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
          <h1 class="page-header">Guest Lecture Report</h1>
		  <h4></h4>
		  
						
						
						<!--<form>
						(month and year):
						  <input type="month" name="bdaymonth">
						</form>-->
						
						<form name="myform" action="rva_guestreport_preview.php" method="post">
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
								<th>All Sessions:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="sall" onclick="DoSAll()"></label></div>
								</td>
							</tr>
							<tr>
								<th>2012-13</th>
								<td>
										<div class="checkbox"><label><input type="checkbox" name="s2012_13" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							<tr>
								<th>2013-14</th>
								<td>
										<div class="checkbox"><label><input type="checkbox" name="s2013_14" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							<tr>
								<th>2014-15</th>
								<td>
										<div class="checkbox"><label><input type="checkbox" name="s2014_15" onclick="cuncheck()"></label></div>
								</td>
							</tr>
							<tr>
								<th>2015-16</th>
								<td>
										<div class="checkbox"><label><input type="checkbox" name="s2015_16" onclick="cuncheck()"></label></div>
								</td>
							</tr>
                            <tr>
								<th>Uncheck All Sessions:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="suncheck" onclick="UndoSAll()"></label></div>
								</td>
							</tr>
							<tr>
								<th>All:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="acheck" onclick="DoAll()"></label></div>
								</td>
							</tr>
							<tr>
								<th>Type of Event</th>
								<td>
										<div class="checkbox"><label><input type="checkbox" name="category" onclick="suncheckk()"></label></div>
								</td>
							</tr>
							<tr>
								<th>Name of Organizer</th>
								<td>
										<div class="checkbox"><label><input type="checkbox" name="organizer" onclick="suncheckk()"></label></div>
								</td>
							</tr>
							<tr>
								<th>Affiliation of Speaker</th>
								<td>
										<div class="checkbox"><label><input type="checkbox" name="affiliate" onclick="suncheckk()"></label></div>
								</td>
							</tr>
                            <tr>
								<th>Date</th>
								<td>
										<div class="checkbox"><label><input type="checkbox" name="adate" onclick="suncheckk()"></label></div>
								</td>
							</tr>
                            <tr>
								<th>Expenses</th>
								<td>
										<div class="checkbox"><label><input type="checkbox" name="expense" onclick="suncheckk()"></label></div>
								</td>
							</tr>
                            <tr>
								<th>Feedback</th>
								<td>
										<div class="checkbox"><label><input type="checkbox" name="feedback" onclick="suncheckk()"></label></div>
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
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
	<script src="assets/js/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
