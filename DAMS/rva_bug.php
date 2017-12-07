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

    <title>Report Bug</title>

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
	
	
    <script>
								
									
									$( document ).ready(function()
									{
										$("#upload_file").hide();
									$("#yes").click(function(){
										$("#upload_file").show();
									});
									$("#no").click(function(){
										$("#upload_file").hide();
									});									
									
									});
									
	</script>
	
	
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
          <a class="navbar-brand animated fadeIn" href="rva_bug_preview.php"><strong><font color="#ffffff" size="5">Bug Report</font></strong></a>
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
		<h1>Report a Bug</h1>
      </div>
		
		<?php
			if(isset($_GET['success']))
			{
				if($_GET['success']==1)
					echo '
					<p>
						<div class="alert alert-success" role="alert">
							<strong>Bug reported successfully.</strong>
						</div>
					</p>';
				
				
			}
		?>
		
		

 <form class="form-horizontal" name="notification" action="rva_addbug.php"  enctype="multipart/form-data" method="post">
		<div class="panel-group" id="accordion">
			 <div class="panel panel-default">
				<div class="panel-heading"> &nbsp;
				</div>
 
  <div class="form-group">
    <label class="control-label col-sm-5" for="category">Select the category(s) to which this bug belongs:</label>
    <div class="col-sm-4">
      <input type="checkbox" name="tech" id="tech"> Technical Issue<br/>
	  <input type="checkbox" name="graph" id="graph"> Graphical Issue<br/>
	  <input type="checkbox" name="fetchb" id="fetchb"> Incorrect Data fetching issue<br/>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-5" for="detail">Describe the bug in detail:</label>
    <div class="col-sm-7">
      <textarea row="4" cols="12" name="detail" class="form-control" id="detail"></textarea>
    </div>
  </div>
  
  <div class="form-group">
		<label class="control-label col-sm-5" for="critical">Is the bug critical? :</label>
		
		<div class="radio col-sm-5" id="cyes">
		  <label><input type="radio" name="cbug" value="1">Yes</label>
		</div>
	<div>
		<div class="radio col-sm-offset-5 col-sm-2" id="cno">
		  <label><input type="radio" name="cbug" value="0">No</label>
		</div>
	</div>
</div>
<br/>

<div class="form-group">
		<label class="control-label col-sm-5" for="upload">Do you want to upload a screenshot of the issue?:</label>
		
		<div class="radio col-sm-5" id="yes">
		  <label><input type="radio" name="upload" value="1">Yes</label>
		</div>
		<div class="container" id="upload_file">
			<div class="radio col-sm-offset-5 col-sm-2" > 
				<input type="file" name="file" id="file_upload">
			</div>
		</div>
	
	<div>
		<div class="radio col-sm-offset-5 col-sm-2" id="no">
		  <label><input type="radio" name="upload" value="2">No</label>
		</div>
	</div>
 
 </div>

<br/>
  <div class="form-group">
    <div class="col-sm-offset-5 col-sm-4">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
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
