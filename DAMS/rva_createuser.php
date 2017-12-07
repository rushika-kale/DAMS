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

    <title>Create User</title>

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
		<h1>New User </h1>
      </div>
		
		<?php
			if(isset($_GET['success']))
			{
				if($_GET['success']==1)
					echo '
					<p>
						<div class="alert alert-success" role="alert">
							<strong>User created successfully. You can add more users.</strong>
						</div>
					</p>';
			}
		?>
		
		
            <form class="form-inline" name="reg" action="rva_process.php"  method="post" >
                <div class="panel-group" id="accordion">
					   <div class="panel panel-default">
						  <div class="panel-heading">
				</div>
			<div id="collapse1" class="panel-collapse collapse in">
				<div class="panel-body">
                <div class="form-group">
                </br>
                <div><label> Username:&nbsp; &nbsp;&nbsp; </label>
                    <input id="username" class="form-control" type="text" name="username"></br>
                </div>
                <br>
                    <label> Password: &nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input id="password"  class="form-control" type="text" name="password"></br>

                    <br>
                    <label> Access: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <select name="access"class="size101">
                        <option value="Regular">Regular
                        <option value="Admin">Admin
                    </select>
            </br>
            <br>
                <input id="submit" class="btn btn-primary" type="submit" value="Create">
                </div>
            </form>
            </div> <!-- /container -->
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
