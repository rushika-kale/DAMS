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

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
			<?php echo '<li class="active"><a href="discussionpanel.php">'.$fname.'<span class="sr-only">(current)</span></a></li>'; ?>
            <li><a href="discussionpanel.php">Overview</a></li>
          </ul>

          <?php
          	echo '<ul class="nav nav-sidebar">';
          	echo '<li class="active"><a href="#">Category</a></li>';

			echo '<li><a href="">General Event Report</a></li>';
			echo '<li><a href="">Faculty Report</a></li>';
			echo '</ul>';

          ?>
          <ul class="nav nav-sidebar">
			<br><br>
            <li><a href="">Contact</a></li>
            <li><a href="">About</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">General Event Report</h1>
		  <h4></h4>
		  
		  
						<table class="table table-striped">
						<thead>
						<tr>
						<th></th>
						<th></th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<th>Type of Event:</th>
								<td>
										 <label><input type="checkbox" name="workshop" value=""> Workshop&nbsp;&nbsp;&nbsp;&nbsp;</label>
										 <label><input type="checkbox" value=""> Seminar&nbsp;&nbsp;&nbsp;&nbsp;</label>
										 <label><input type="checkbox" value=""> FDP&nbsp;&nbsp;&nbsp;&nbsp;</label>
										 <label><input type="checkbox" value=""> STTP&nbsp;&nbsp;&nbsp;&nbsp;</label>
								</td>
							</tr>
							<tr>
								<th>Name of Event:</th>
								<td>
										 <label><input type="checkbox" name="" value=""></label>
								</td>
							</tr>
							<tr>
								<th>Place:</th>
								<td>
										 <label><input type="checkbox" name="" value=""></label>
								</td>
							</tr>
							<tr>
								<th>Date:</th>
								<td>
										 <label><input type="checkbox" name="" value=""></label>
								</td>
							</tr>
							<tr>
								<th>No. of Days:</th>
								<td>
										 <label><input type="checkbox" name="" value=""></label>
								</td>
							</tr>
						</tbody>
						</table>
						<nav>
							<ul class="pager">
								<li><a href="#">Preview</a></li>
								<li><a href="#" onclick="window.open('examples/pdf2_2.php')">Download</a></li>
							</ul>
						</nav>
						
						<?php
							//<a href="#">Preview</a>
							$query = mysqli_query($con,"select * from workshop");
							while($row = mysqli_fetch_array($query))
							{
							}
						
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
