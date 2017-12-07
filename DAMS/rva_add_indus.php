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

    <title>Industrial Visits</title>

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
		<h1>Industrial Visits</h1>
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
		
		
                    <form name="myform" role="form" action="rva_add_indus1.php" method="post">		
                    <div class="panel-group" id="accordion">
						
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Industrial Visit Details</a>
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
                      <label for="name">Name of Co-ordinators:</label>
                      <input type="text" name="name" class="form-control" placeholder="Enter the Name" id="name" required>
                    </div>
                    <div class="form-group">
                      <label for="vloc">Visited Location:</label>
                      <input type="text" name="vloc" class="form-control" id="vloc" placeholder="Enter the visited location" required>
                    </div>
                    <div class="form-group">
                      <label for="adate">Date:</label>
                      <table>
                        <tbody>
                        <tr>
                          <td><label>From: </label><input type="date" name="fdate" class="form-control" id="fdate"></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td><label>To: </label><input type="date" name="todate" class="form-control" id="todate"></td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="form-group">
                      <label for="yearsem">Year/Sem:</label>
                      <select class="form-control" name="yearsem" id="yearsem" required>
                        <option>Select Year/Sem</option>
     
                        <option>2nd/III</option>
                        <option>2nd/IV</option>
                        <option>3rd/V</option>
                        <option>3rd/VI</option>
                        <option>4th/VII</option>
                        <option>4th/VIII</option>
                        
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="npart">No. of Participants:</label>
                      <input type="text" name="npart" class="form-control" id="npart" placeholder="Enter the no. of participants">
                    </div>
                    <div class="form-group">
                      <label for="agen">Agency involved:</label>
                      <input type="text" name="agency" class="form-control" id="agency" placeholder="Enter the agency">
                    </div>
                    <div class="form-group">
                      <label for="fee">Fees:</label>
                      <input type="text" name="fee" class="form-control" id="fee" placeholder="if any">
                    </div>
                    <div class="form-group">
                      <label for="mode">Mode of Travel:</label>
                       <select class="form-control" name="mode" id="mode" required>
                        <option>Select mode of travel</option>
                        <option>Railway</option>
                        <option>Road</option>
                        <option>Private</option>
                       </select>
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
