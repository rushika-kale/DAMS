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

    <title>Funding Projects</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
	<link href="blog.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
	
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	
	
  </head>

  <body role="document">

    <!-- Fixed navbar -->
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

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
		<h1>Funding Projects</h1>
      </div>
		
		<?php
			if(isset($_GET['success']))
			{
				if($_GET['success']==1)
					echo '
					<p>
						<div class="alert alert-success" role="alert">
							<strong>Information saved successfully. You can add more information.</strong>
						</div>
					</p>';
			}
		?>
		
		
                    <form name="myform" role="form" action="rva_add_funproject1.php" method="post">		
                    <div class="panel-group" id="accordion">
						
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Funding Project Details</a>
							</h4>
						  </div>
						  <div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
							<div class="form-group">
                      <label for="session">Session:</label>
                      <select class="form-control" name="session" id="session" required>
                        
                                    <?php include 'rva_selectsession.php'; ?>
                      
                      </select>
                    </div>
					 <div class="form-group">
                      <label for="pfaculty">Proposed by Faculty:</label>
                      <input type="text" name="pfaculty" class="form-control" placeholder="Enter the name Proposed by Faculty" id="pfaculty" required>
                    </div>
					
					<div class="form-group">
                      <label for="dfaculty">Designation of Faculty:</label>
                      <input type="text" name="dfaculty" class="form-control" placeholder="Enter the Designation" id="dfaculty" required>
                    </div>
					
					
					
                    <div class="form-group">
                      <label for="title">Title Of Proposal:</label>
                      <input type="text" name="title" class="form-control" placeholder="Enter the title" id="title" required>
                    </div>
					
					<div class="form-group">
						<label for="fdate">Date of Proposal:</label>
						<input type="date" name="fdate" class="form-control" id="fdate">
					</div>
					
                    <div class="form-group">
                      <label for="scheme">Scheme:</label>
                      <input type="text" name="scheme" class="form-control" id="scheme" placeholder="Enter the scheme" required>
                    </div>
                    <div class="form-group">
                      <label for="amount">Amount:</label>
                      <input type="text" name="amount" class="form-control" id="amount" placeholder="Enter the amount required for project" required>
                    </div>
                    
                    <div class="form-group">
                      <label for="status">Status:</label>
                      <input type="text" name="status" class="form-control" id="status" placeholder="Enter the status of project" required>
                    </div>
                   
                    <div class="form-group">
                      <label for="tarea">Thrust Area:</label>
                      <select class="form-control" name="tarea" id="tarea" required>
                        <option>Select area:</option>
                        <option>Computer Vision and Soft Computing(CVSC)</option>
                        <option>Computer Network(CN)</option>
                        <option>Data Mining(DM)</option>
                        <option>Language Processor(LP)</option>
                        <option>Others</option>
                      </select>
                     </div>
                     </div>
                    </div>
                    </div>
                    </div>
                    
                    <div>
                     <button class="btn btn-lg btn-primary btn-block" type="submit">Save Information</button>
                    </form>
                    <br/>
                    </div> 
                    </div>
                    
                    <!-- /container -->

	
	
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
