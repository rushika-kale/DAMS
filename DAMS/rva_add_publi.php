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

    <title>Publication</title>

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
	
	<script>
	
	
	
	function enableC()
	{
		if(document.myform.thelist.value=="Custom")
		{
			document.myform.theinput.disabled=false;
		}
		else if((document.myform.thelist.value=="AICTE")||(document.myform.thelist.value=="DST")||(document.myform.thelist.value=="ISTE"))
		{
			document.myform.theinput.disabled=true;
		}
	}
	
	
	/*var room = 1;
	function add_fields()
	{
		if(room<4)
		{
			room++;
			var anchor="'anchor";
			var xx="xx'";
			var date="'date";
			var da="'yyyy/MM/dd'";
			var objTo = document.getElementById('room_fileds')
			var divtest = document.createElement("div");
			divtest.innerHTML = 
			'<div class="jumbotron"><div class="form-group"><label for="speaker">Name of Speaker:</label><input type="text" name="s'+room+'name" class="form-control" id="s'+room+'name" required></div><div class="form-group"><label for="sinst">Institute name:</label><input type="text" name="s'+room+'institute" class="form-control" id="s'+room+'institute" required></div><div class="form-group"><label for="scontact">Contact Number:</label><input type="text" name="s'+room+'contact" class="form-control" id="s'+room+'contact" required></div><div class="form-group"><label for="semail">Email ID:</label><input type="text" name="s'+room+'email" class="form-control" id="s'+room+'email" required></div></div>';
			
			objTo.appendChild(divtest)
		}
	}*/
	
	
	</script>
	
	
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
		<h1>Publication</h1>
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
		
		
<form name="myform" role="form" action="rva_add_publi2.php" method="post">		


					  <div class="panel-group" id="accordion">
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Publication Details</a>
							</h4>
						  </div>
						  <div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
							<div class="form-group">
								  <label for="research">Area of Research:</label>
								  <select class="form-control" name="research" id="research" required>
									<option>Select area:-</option>
									<option>CN</option>
									<option>CVSC</option>
									<option>DM</option>
									<option>LP</option>
									<option>Others</option>
								  </select>
								</div>
							<div class="form-group">
								  <label for="pyear">Academic year of Publication:</label>
								  <select class="form-control" name="pyear" id="pyear" required>
									
                                     <?php include 'rva_selectsession.php'; ?>
                                     
								  </select>
								</div>
								<div class="form-group">
								  <label for="pubname">Title:</label>
								  <input type="text" name="pubname" class="form-control" placeholder="Enter the title name" id="pubname" required>
								</div>
								<div class="form-group">
								  <label for="dbType">Type:</label>
								  <select class="form-control" name="dbType" id="dbType" onclick="EnablePubType()" required>
									<option>Choose Publication Type:-</option>
									<option>Journal</option>
									<option>Conference</option>
									<option>Thesis</option>
									<option>Data Set</option>
									<option>Book</option>
									<option>Book-Chapter</option>
									<option>Patent</option>
									<option>Copyright</option>
									<option>Report</option>
								  </select>
								</div>
						
						
						
<div>
 <button class="btn btn-lg btn-primary btn-block" type="submit">Next</button>
</form>
    </div> <!-- /container -->
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
