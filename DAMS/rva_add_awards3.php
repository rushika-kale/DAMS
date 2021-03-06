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

    <title>Awards and Achievements</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<script>
	function EnableSelect()
	{
		if(document.myform.category.value=="Faculty")
		{
			document.myform.yearsem.disabled=true;
		}
		else if(document.myform.category.value=="Student")
		{
			document.myform.yearsem.disabled=false;
		}
	}
	</script>
	
	
	
  </head>

  <body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">E-Resource Support System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
		<h1>Awards & Achievements</h1>
        <p></p>
      </div>
		

		
		
<form name="myform" role="form" action="rva_add_awards1.php" method="post">		
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
<div class="form-group">
  <label for="category">Category:</label>
  <select class="form-control" name="category" id="category" onclick="EnableSelect()" required>
    <option>Faculty</option>
    <option>Student</option>
  </select>
</div>
<div class="form-group">
  <label for="yearsem">Year/Sem:</label>
  <select class="form-control" name="yearsem" id="yearsem" disabled required>
	<option>Select Year/Sem</option>
	<option>1st/I</option>
	<option>1st/II</option>
	<option>2nd/III</option>
	<option>2nd/IV</option>
	<option>3rd/V</option>
	<option>3rd/VI</option>
	<option>4th/VII</option>
	<option>4th/VIII</option>
  </select>
</div>
<div class="form-group">
  <label for="nop">No. of Participants:</label>
  <input type="text" name="nop" class="form-control" placeholder="Enter No. of participants" id="nop" required>
</div>
<div class="form-group">
  <label for="name">Name:</label>
  <input type="text" name="name" class="form-control" placeholder="Enter the Names separated by comma" id="name" required>
</div>
<div class="form-group">
  <label for="atype">Type of Award:</label>
  <input type="text" name="atype" class="form-control" id="atype" placeholder="Enter Type of award" required>
</div>
<div class="form-group">
  <label for="adetail">Details of Award:</label>
  <textarea name="adetail" class="form-control" id="adetail" placeholder="Enter details of award"></textarea>
</div>
<div class="form-group">
  <label for="adate">Date:</label>
  <input type="date" name="adate" class="form-control" id="adate">
</div>
<div class="form-group">
  <label for="prize">Cash Prize:</label>
  <input type="text" name="prize" class="form-control" id="prize" placeholder="if any">
</div>


<?php
	echo '<input type="hidden" name="type" value="Foothpath Shala Centre">';	
	//echo '<input type="hidden" name="centre" value="'.$centre.'">';
?>
 <button class="btn btn-lg btn-primary btn-block" type="submit">Save Information</button>
</form>



		
    </div> <!-- /container -->

	
	
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
