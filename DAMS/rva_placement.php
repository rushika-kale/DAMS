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

    <title>Placement Report</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

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
	
	<!--<script>
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
	}-->
	
<!--	
	var room = 1;
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
	}-->
	
	
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
          <a class="navbar-brand" href="rva_report3.php"><strong><font color="#ffffff" size="5">Report Generation</font></strong></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <!-- <li><a href="">Reports</a></li>
            <li><a href="">Groups</a></li>
            <li><a href="">Profile</a></li>-->
            <li><a href="index.php"><font color="#E8E8E8 ">Home</font></a></li>
            <li><a href="logout.php"><font color="#E8E8E8 ">Logout</font></a></li>
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
		<h2>Placement/Higher Studies/Entrepreneur</h2>
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
		
		
<form name="myform" role="form" action="rva_placement1.php" method="post">		

				
					  <div class="panel-group" id="accordion">
					  
					  <div class="form-group">
								  <label for="session">Session:</label>
								  <select class="form-control" name="session" id="session" required>
									<option>Select:-</option>
									<option>2015-16</option>
									<option>2014-15</option>
									<option>2013-14</option>
									<option>2012-13</option>
								  </select>
								</div>
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">UG Placement Details</a>
							</h4>
						  </div>
						  <div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
							
						 
							<!--	<div class="form-group">
								  <label for="graduate">Programme:</label>
								  <select class="form-control" name="graduate" id="graduate" required>
									<option>Select:-</option>
									<option>UG</option>
									<option>PG</option>
								  </select>
								</div>-->
								<div class="form-group">
								  <label for="ugnumstud">Number of Students Enrolled:</label>
								  <input type="text" name="ugnumstud" class="form-control" placeholder="Number of Students" id="ugnumstud" required>
								</div>
								<div class="form-group">
								  <label for="ugnumeligi">Number of Students opted for Placement/Eligible:</label>
								  <input type="text" name="ugnumeligi" class="form-control" placeholder="Number of Eligible Students" id="ugnumeligi" required>
								</div>
								<div class="form-group">
								<label for="ugnumplace">Number of Placed Students:</label><br>
									<input type="text" name="ugnumplace" class="form-control" placeholder="Number of Placed Students" id="ugnumplace" required>
								</div>
								<div class="form-group">
								<label for="ugnumoff">Number of Off-campus Placed Students:</label><br>
									<input type="text" name="ugnumoff" class="form-control" placeholder="Number of Off-campus Placed Students" id="ugnumoff" required>
								</div>
								<div class="form-group">
								<label for="ugnumhigh">Number of Students opted for Higher studies:</label><br>
									<input type="text" name="ugnumhigh" class="form-control" placeholder="Number of Students opted for Highr Studies" id="ugnumhigh" required>
								</div>
								<div class="form-group">
								<label for="ugnumentre">Number of Students going for Entrepreneur:</label><br>
									<input type="text" name="ugnumentre" class="form-control" placeholder="Number of Students going for Entrepreneur" id="ugnumentre" required>
								</div>
								<div class="form-group">
								<label for="ugemploy">Total Employability:</label><br>
									<input type="text" name="ugemploy" class="form-control" placeholder="Total number if students employed" id="ugemploy" required>
								</div>
								</div>		
							</div>
							</div>

						
						
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">PG Placement Detail</a>
							</h4>
						  </div>
						  <div id="collapse2" class="panel-collapse collapse">
							
							<div class="panel-body">
							<div class="form-group">
								  <label for="pgnumstud">Number of Students Enrolled:</label>
								  <input type="text" name="pgnumstud" class="form-control" placeholder="Number of Students" id="pgnumstud" required>
								</div>
								<div class="form-group">
								<label for="pgnumplace">Number of Placed Students:</label><br>
									<input type="text" name="pgnumplace" class="form-control" placeholder="Number of Placed Students" id="pgnumplace" required>
								</div>
								<div class="form-group">
								<label for="pgnumoff">Number of Off-campus Placed Students:</label><br>
									<input type="text" name="pgnumoff" class="form-control" placeholder="Number of Off-campus Placed Students" id="pgnumoff" required>
								</div>
								<div class="form-group">
								<label for="pgemploy">Total Employability:</label><br>
									<input type="text" name="pgemploy" class="form-control" placeholder="Total number if students employed" id="pgemploy" required>
								</div>
								</div>						
								</div>	
								</div>

								
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Salary</a>
							</h4>
						  </div>
						  <div id="collapse3" class="panel-collapse collapse">
							<div class="panel-body">
							<div class="form-group">
								  <label for="maxsal">Maximum Salary:</label>
								  <input type="text" name="maxsal" class="form-control" placeholder="Maximum Salary offered by company" id="maxsal" required>
								</div>
								<div class="form-group">
								  <label for="maxsalcom">Maximum Salary providing Company:</label>
								  <input type="text" name="maxsalcom" class="form-control" placeholder="Maximum Salary providing company" id="maxsalcom" required>
								</div>
								<div class="form-group">
								  <label for="minsal">Minimum Salary:</label>
								  <input type="text" name="minsal" class="form-control" placeholder="Minimum Salary offered by company" id="minsal" required>
								</div>
								<div class="form-group">
								  <label for="minsalcom">Minimum Salary providing Company:</label>
								  <input type="text" name="minsalcom" class="form-control" placeholder="Minimum Salary providing company" id="minsalcom" required>
								</div>			
						</div>
						</div>
						</div>		
						
</br>
<div>
 <button class="btn btn-lg btn-primary btn-block" type="submit">Save Information</button>
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
