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

    <title>Report Generation</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
	<link href="blog.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
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
          <a class="navbar-brand animated fadeIn" href="rva_report3.php"><strong><font color="#ffffff" size="5">Report Generation</font></strong></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse animated fadeIn" >
          <ul  class="nav navbar-nav navbar-right">
           <!-- <li><a href="">Reports</a></li>
            <li><a href="">Groups</a></li>
            <li><a href="">Profile</a></li>-->
            <li  class="navbar-brand " ><a style="top:-15px"  href="index.php"><font color="#E8E8E8 ">Home</font></a></li>
            <li class="navbar-brand "><a style="top:-15px" href="logout.php"><font color="#E8E8E8 ">Logout</font></a></li>
          </ul>
        <!--  <form class="navbar-form navbar-right" action="searchfor.php" method="get">
            <input type="text" name="term" class="form-control" placeholder="Search..">
          </form>-->
        </div>

		
      </div>
    </nav>

	
	
	
	
	 <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
	
	
	
	
	 <!--<div class="container">-->
       <h4>Event Report</h4><p>
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
					<li><a href="rva_workshopreport.php">Workshop</a></li>
					<li><a href="rva_fdpsttpreport.php">FDP/STTP</a></li>
		<!--		<li><a href="#">Conference</a></li>  -->
					<li><a href="rva_seminarreport.php">Seminar</a></li>
					<li><a href="rva_indusreport.php">Industrial Visit</a></li>
				<!--	<li><a href="rva_guestreport.php">Guest Lectures</a></li>-->
					<li><a href="rva_count.php">Count</a></li>
					<li><a href="rva_allreport.php">All</a></li>
					
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
					<li class=""><a href="rva_atten_workshop.php">Workshop</a></li>
					<li><a href="rva_atten_fdpsttp.php">FDP/STTP</a></li>
			<!--		<li><a href="#">Conference</a></li>  -->
					<li><a href="rva_atten_seminar.php">Seminar</a></li>
					<li><a href="rva_atten_all.php">All</a></li>
				</ul>
			
			</div>
          </div>
        </div>
       
	  <p>
 
	 <h4>Faculty Report</h4>
	   <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Profile Report</a>
            </h4>
          </div>
          <div id="collapse4" class="panel-collapse collapse">
            <div class="panel-body">
			<ul class="nav nav-sidebar">
					<li class=""><a href="rva_facprofile1.php">Combined Report</a></li>
			</ul>
        </div>
		</div>
		</div>
	<p>
	<h4>Achievements</h4>
		<div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Awards</a>
            </h4>
          </div>
		  <div id="collapse5" class="panel-collapse collapse">
            <div class="panel-body">
			<ul class="nav nav-sidebar">
					<li class=""><a href="rva_awardsreport.php">Award Report</a></li>
			</div>
		</div>
		</div>
		<div class="panel panel-default">
		<div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Miscellaneous</a>
            </h4>
          </div>
		  <div id="collapse6" class="panel-collapse collapse">
            <div class="panel-body">
			<ul class="nav nav-sidebar">
					<li class=""><a href="rva_placementreport.php">Placement Report</a></li>
					<li class=""><a href="rva_funprojectreport.php">Funding Project Report</a></li>
			</div>
			</div>
		</div>
	</div>
<p>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	</div>
	</div>

	
	
	
	
	
		<div class="container-fluid">
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
				<h1 class="page-header">Report Generation</h1>
				<h4>Generate report according to your requirement</h4>	
			</div>
		</div>
    <!-- </div> -->
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
