<!DOCTYPE html>


<?php
	//Start session
	session_start();
 
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['username1']) || (trim($_SESSION['username1']) == '')) 
	{
		header('location: index.php');
		exit();
	}
	$username=$_SESSION['username1'];
	$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
	$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());
	$res=mysql_query("Select * FROM profile WHERE username='$username'");
	$row=mysql_fetch_array($res);
	$fname=$row['f_name'];
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
	
  <body>
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
					<li><a href="#">Workshop</a></li>
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
          <div id="collapse3" class="panel-collapse collapse in">
            <div class="panel-body">
			
				<ul class="nav nav-sidebar">
					<li class="active"><a href="rva_atten_workshop.php">Workshop</a></li>
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
	
	
		  
						<?php
								echo '<table class="table table-bordered">
								<thead>
								<tr>';
								$session2012_13=$_GET['s2012_13'];
								$session2013_14=$_GET['s2013_14'];
								$session2014_15=$_GET['s2014_15'];
								$session2015_16=$_GET['s2015_16'];
								$session2016_17=$_GET['s2016_17'];
								
								
								//echo $to;
								echo '<th>Sr. No.</th>';
								echo '<th>Name</th>';
								echo '<th>Contact No.</th>';
								echo '<th>Joining Date</th>';
								echo '<th>Designation</th>';
								//echo "$session2012_13"; echo "$session2013_14"; echo "$session2014_15"; echo "$session2015_16"; echo "$session2016_17";
								
								$res=mysql_query("select s.username,p.sal,p.f_name,p.m_name,p.l_name,p.con from profile p, fac_session s where p.username=s.username and (session2012_13='$session2012_13' or session2013_14='$session2013_14' or session2014_15='$session2014_15' or session2015_16='$session2015_16' or session2016_17='$session2016_17')");
								echo '</tr>
								</thead>
								<tbody>';
								$i=1;
								while(($row= mysql_fetch_array($res,MYSQL_ASSOC)))
								{
									$user=$row['username'];
									$res2=mysql_query("select username,des,j_date,j_month,j_year from faculty.fac_info where username='$user'");
									$row2= mysql_fetch_array($res2);
									if($row['f_name']!=null)
									{
										echo '<tr>';
										echo '<td>'.$i++.'</td>';
										echo '<td>'.$row['sal']." ".$row['f_name']." ".$row['m_name']." ".$row['l_name'].'</td>';
										echo '<td>'.$row['con'].'</td>';
										echo '<td>'.$row2['j_date']."/".$row2['j_month']."/".$row2['j_year'].'</td>';
										echo '<td>'.$row2['des'].'</td>';
										echo '</tr>';
									}
								}
								echo '
								</tbody>
								</table>';
						?>
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
