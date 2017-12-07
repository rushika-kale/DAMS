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

    <title>Guest Lecture</title>

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
	
<!--	<script>
	function EnableSelect()
	{
		if(document.myform.category.value=="Organized")
		{
			document.myform.yearsem.disabled=true;
		}
		else if(document.myform.category.value=="Delivered")
		{
			document.myform.yearsem.disabled=false;
		}
	}
	</script>-->
	
	
	
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
		<h1>Guest Lecture</h1>
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
		
		
<form name="myform" role="form" action="rva_add_guest1.php" method="post">	
<div class="form-group">
  <h4><b>Type Of Event:</b></h4>
  <select class="form-control" name="category" id="category" onclick="EnableSelect()" required>
    <option>Organized</option>
    <option>Delivered</option>
  </select>
</div>	

  <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Guest Lecture Detail</a>
							</h4>
						  </div>
						  <div id="collapse3" class="panel-collapse collapse in">
							<div class="panel-body">
								<div class="form-group">
								  <label for="session">Session:</label>
								  <select class="form-control" name="session" id="session" required>
									
                                    <?php include 'rva_selectsession.php'; ?>
								  
                                  </select>
								</div>
								
						 	<div class="form-group">
								<label for="organizer">Name of Organizer:</label><br>
									<input type="text" name="organizer" class="form-control" id="organizer" placeholder="Enter name of Organizer" required>
							</div>
						
							<div class="form-group">
								<label for="topic">Name of Topic:</label><br>
									<input type="text" name="topic" class="form-control" id="topic" placeholder="Enter name of topic" required>
							</div>
							
							
							<div class="form-group">
								  <label for="speaker">Name of Speaker:</label>
								  <input type="text" name="speaker" class="form-control" id="speaker" placeholder="Enter name of speaker" required>
							</div>
							
							<div class="form-group">
								  <label for="affiliate">Affiliation of Speaker:</label>
								  <input type="text" name="affiliate" class="form-control" id="affiliate" placeholder="Enter affiliation of Speaker" required>
							</div>
							
							<div class="form-group">
								  <label for="adate">Date:</label>
								  <input type="date" name="adate" class="form-control" id="adate" required>
							</div>
						
							<div class="form-group">
								  <label for="expense">Expenses:</label>
								  <input type="text" name="expense" class="form-control" id="expense" placeholder="if any">
							</div>

						<div class="form-group">
								  <label for="feedback">Feedback:</label>
								  <input type="text" name="feedback" class="form-control" id="feedback" placeholder="Enter feedback" required>
							</div>

						</div>
						</div>
						</div>
						
						

<?php
	echo '<input type="hidden" name="type" value="Foothpath Shala Centre">';	
	//echo '<input type="hidden" name="centre" value="'.$centre.'">';
?>
 <button class="btn btn-lg btn-primary btn-block" type="submit" >Save Information</button>
</form>
<br/>



		
    </div> <!-- /container -->

	
	
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
