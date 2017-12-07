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

    <title>Organized STTP</title>

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
	}
	
	
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
		<h1>Organized STTP</h1>
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
		
		
                <form name="myform" role="form" action="rva_add_sttp1.php" method="post">		
					  <div class="panel-group" id="accordion">
						
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">STTP Details</a>
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
								  <label for="namepr">Name of Programme:</label>
								  <input type="text" name="namepr" class="form-control" placeholder="Enter the Name" id="namepr" required>
								</div>
								<div class="form-group">
								  <label for="thelist">Name of Technical Body involved:</label>
								  <select class="form-control" name="thelist" id="thelist" onclick="enableC()">
									<option>Select:-</option>
									<option>ISTE</option>
									<option>AICTE</option>
									<option>DST</option>
									<option>Custom</option>
								  </select>
								  <input type="text" name="theinput" class="form-control" id="theinput" placeholder="Custom" disabled required>
								</div>
								<div class="form-group">
								<label for="finance">Finance:</label><br>
									<input type="radio" name="finance" id="finance" value="sponsored">Sponsored&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="finance" id="finance" value="self_financed">Self Financed
								</div>
									<div class="form-group">
								  <label for="adate">Date:</label>
								  <table>
									<tbody>
									<tr>
									  <td><label>From: </label><input type="date" name="sdate" class="form-control" id="sdate"></td>
									  <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
									  <td><label>To: </label><input type="date" name="edate" class="form-control" id="edate"></td>
									</tr>
									</tbody>
								  </table>
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
								  <div class="form-group">
								  <label for="organiser">Role:</label>
								  <select class="form-control" name="organiser" id="organiser" required>
									<option>Select:-</option>
									<option>Convenor</option>
									<option>Co-convenor</option>
									<option>Coordinator</option>
									<option>Co-Coordinator</option>
								  </select>
								</div>
								</div>		
						</div>
						</div>
						
						
						
						<div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Committee</a>
							</h4>
						  </div>
						  <div id="collapse2" class="panel-collapse collapse">
							<div class="panel-body">
							<div class="form-group">
								  <label for="convenor">Name of Convenor:</label>
								  <input type="text" name="convenor" class="form-control" placeholder="Enter the Name of convenor" id="convenor" required>
								</div>
								<div class="form-group">
								  <label for="coconvenor">Name of Co-convenor:</label>
								  <input type="text" name="coconvenor" class="form-control" placeholder="Enter the Nameof Co-convenor" id="coconvenor" required>
								</div>
								<div class="form-group">
								  <label for="coordinator">Name of Co-ordinator:</label>
								  <input type="text" name="coordinator" class="form-control" placeholder="Enter the Name of Coordinator" id="coordinator" required>
								</div>
								<div class="form-group">
								  <label for="cocoordinator">Name of Co-coordinator:</label>
								  <input type="text" name="cocoordinator" class="form-control" placeholder="Enter the Name of Co-cooordinator" id="cocoordinator" required>
								</div>
								<div class="form-group">
								  <label for="organisers">Name of the Organising Committee:</label>
								  <input type="text" name="organisers" class="form-control" placeholder="Enter the Name of organising committee" id="organisers" required>
								</div>
								<div class="form-group">
								  <label for="organisedept">Name of the Organising Department:</label>
								  <input type="text" name="organisedept" class="form-control" placeholder="Enter the Name of organising department" id="organisedept" required>
								</div>
									
						</div>
						</div>
						</div>
					  
					  
				 
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Participants Details</a>
							</h4>
						  </div>
						  <div id="collapse3" class="panel-collapse collapse">
							<div class="panel-body">
							<div class="form-group">
								<label for="participant">STTP organised for::</label><br>
									<input type="radio" name="participant" id="stud" value="student">Student&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="participant" id="fac" value="faculty">Faculty
							</div>
							<div class="form-group">
								  <label for="count">No. of Participants:</label>
								  <input type="text" name="count" class="form-control" id="count" required>
							</div>
							<div class="form-group">
								  <label for="partfrom">Participants from:</label>
								  <input type="text" name="partfrom" class="form-control" id="partfrom" required>
							</div>
						</div>
						</div>
						</div>
					

						<div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Speaker Details</a>
							</h4>
						  </div>
						  <div id="collapse4" class="panel-collapse collapse">
							<div class="panel-body">
							<div id="room_fileds">
								<div class="jumbotron">
									<div class="form-group">
										  <label for="nspeak">Name of Speaker:</label>
										  <input type="text" name="s1name" class="form-control" id="s1name" required>
									</div>
									<div class="form-group">
										  <label for="iname">Institute name:</label>
										  <input type="text" name="s1institute" class="form-control" id="s1institute" required>
									</div>
									<div class="form-group">
										  <label for="cnom">Contact Number:</label>
										  <input type="text" name="s1contact" class="form-control" id="s1contact" required>
									</div>
									<div class="form-group">
										  <label for="emailID">Email ID:</label>
										  <input type="text" name="s1email" class="form-control" id="s1email" required>
									</div>
								</div>
							</div>
							<button type="button" class="btn btn-primary active" id="more_fields" onclick="add_fields(this);">Add More Speaker</button>
							<!--<input type="button" id="more_fields" onclick="add_fields(this);"  value="Add More Speaker"  >-->
						</div>
						</div>
						</div>
						</div>

                    <div>
                     <button class="btn btn-lg btn-primary btn-block" type="submit">Save Information</button>
					 </div>
                    </form>
                    <br/>
                         <!-- /container -->
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
