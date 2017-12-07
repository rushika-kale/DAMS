<!DOCTYPE html>


<?php
	include 'rva_common.php';
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
		<!--<link href="css/layout1.css" rel="stylesheet" type="text/css" />
		<link href="css/menu.css" rel="stylesheet" type="text/css" />
		<link href="js/menu/tabcontent.css" rel="stylesheet" type="text/css" />
		<script src="js/tabcontent.js" type="text/javascript"></script>
		<script src="js/tabcontent1.js" type="text/javascript"></script>
		<script src="js/tinybox.js" type="text/javascript"></script>
        <script src="js/short.js" type="text/javascript"></script>-->

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

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Report Generation </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="">Reports</a></li>
            <li><a href="">Groups</a></li>
            <li><a href="">Profile</a></li>
            <li><a href="">Help</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right" action="searchfor.php" method="get">
            <input type="text" name="term" class="form-control" placeholder="Search..">
          </form>
        </div>
      </div>
    </nav>

	
	
	
	
	 <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
	
	
	
	
	 <!--<div class="container">-->
       <h4>Event Report</h4>
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Organized</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
			
				 <ul class="nav nav-sidebar">
					<li class=""><a href="#">Workshop</a></li>
					<li><a href="#">FDP/STTP</a></li>
					<li><a href="#">Conference</a></li>
					<li><a href="#">Seminar</a></li>
					<li><a href="#">All</a></li>
				</ul>
			
			</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Attended</a>
            </h4>
          </div>
          <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">
			
				<ul class="nav nav-sidebar">
					<li><a href="rva_atten_workshop.php">Workshop</a></li>
					<li><a href="rva_atten_fdpsttp.php">FDP/STTP</a></li>
					<li><a href="#">Conference</a></li>
					<li><a href="rva_atten_seminar.php">Seminar</a></li>
					<li><a href="rva_atten_all.php">All</a></li>
				</ul>
			
			</div>
          </div>
        </div>
      </div> 
	  
	   <h4>Faculty Report</h4>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	</div>
	</div>
	
	
	
	
	
	
    <div class="container-fluid">
     		
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Sessionwise Faculty Report</h1>
		  <h4></h4>
		  
						
						
					
						
						<form name="myform" action="rva_atten_seminar_preview.php" method="post">
						<table class="table table-striped">
						<thead>
						<tr>
						<th></th>
						<th></th>
						<th></th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<th>Session Range:</th>
									<td>
										<div class="form-group">
										  <label for="sel1">From:</label>
										  <select class="form-control" id="sel1">
											<option>Select:</option>
											<option>2012-2013</option>
											<option>2013-2014</option>
											<option>2014-2015</option>
											<option>2015-2016</option>
											<option>2016-2017</option>
										  </select>
										</div>
									</td>
									<td>
										<div class="form-group">
										  <label for="sel1">To:</label>
										  <select class="form-control" id="sel1">
											<option>Select:</option>
											<option>2012-2013</option>
											<option>2013-2014</option>
											<option>2014-2015</option>
											<option>2015-2016</option>
											<option>2016-2017</option>
										  </select>
										</div>
									</td>
							</tr>
						</tbody>
						</table>
						<nav>
							<ul class="pager">
								<input type="submit" class="btn btn-info" value="Preview">
								<input type="button" class="btn btn-info" onclick="window.open('examples/pdf20.php')" value="PDF Download">
								<a href="rva_facprofile_excel_1_A.php" class="btn btn-info" role="button">Excel Download</a>
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
