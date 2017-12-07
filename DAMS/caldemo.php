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

	
	
	
	
	
	
	
	
	
	<link href="css/menu.css" rel="stylesheet" type="text/css" />
            <link href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
            <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
            <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
            <script src="js/short.js" type="text/javascript"></script>
            <script src="js/verify.notify.js" type="text/javascript"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.1.47/jquery.form-validator.min.js"></script>
	
	
	
	
	
	
	
	
	
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
	
	
									<script type="text/javascript">
												function DoAll()
												{
													document.myform.workshop.checked = true;
													document.myform.name.checked = true;
													document.myform.place.checked = true;
													document.myform.date.checked = true;
													document.myform.days.checked = true;
													document.myform.uncheck.checked = false;
												}
												function UndoAll()
												{
													document.myform.workshop.checked = false;
													document.myform.name.checked = false;
													document.myform.place.checked = false;
													document.myform.date.checked = false;
													document.myform.days.checked = false;
													document.myform.all.checked = false;
												}
									
									</script>
									
									
									<script> $.validate({
  borderColorOnError : '#FFF',
  addValidClassOnAll : true
}); </script>
									
									<script>
												 $(function() {
													

													days.value="please select date";
													$( "#join" ).datepicker({
														dateFormat: "yy-mm-dd",
													  defaultDate: "+1w",
													  changeMonth: true,
													  numberOfMonths: 1 });
													$( "#from" ).datepicker({
													   
													  defaultDate: "+1w",
													  changeMonth: true,
													  numberOfMonths: 1,
													  onClose: function( selectedDate ) {
														var day = $("#from").datepicker('getDate');
												day.setDate(day.getDate()+1);
														$( "#to" ).datepicker( "option", "minDate", day );

													  }
													});
													$( "#to" ).datepicker({
														
													  defaultDate: "+1w",
													  changeMonth: true,
													  numberOfMonths: 1,
													  onClose: function( selectedDate ) {
														$( "#from" ).datepicker( "option", "maxDate", selectedDate );
													  }
													});
													
													
													$('#to').on('change',function(){
													 var da = (daydiff(parseDate($('#from').val()), parseDate($('#to').val())));
													  
													  days.value=da+1;
													  
													  
													})
													
													function parseDate(str) {
													var mdy = str.split('/')
													return new Date(mdy[2], mdy[0]-1, mdy[1]);
												}

												function daydiff(first, second) {
													return (second-first)/(1000*60*60*24);
												}
													
												  });
												  </script>
    
	
	
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
					<li class=""><a href="#">Workshop</a></li>
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
					<li><a href="#">FDP/STTP</a></li>
					<li><a href="#">Conference</a></li>
					<li><a href="#">Seminar</a></li>
					<li><a href="#">All</a></li>
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
	
	
	
	
	
	
    <div class="container-fluid">
     		
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Workshop Report</h1>
		  <h4></h4>
		  
						<form>
						Birthday:
						<input type="date" name="bday">
						</form>
						
						<form>
  Birthday (month and year):
  <input type="month" name="bdaymonth">
</form>
						
						<form name="data">
						
						  From: <input type="text"name="sdate" id="from"data-validate="required"/>
	
                                To: <input type="text"name="edate" id="to"data-validate="required"/>
						
						
						
						</form>
						<form name="myform" action="rva_atten_workshop_preview.php" method="post">
						<table class="table table-striped">
						<thead>
						<tr>
						<th></th>
						<th></th>
						</tr>
						</thead>
						<tbody>
							<tr>
								<th>All:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="all" onclick="DoAll()"></label></div>
								</td>
							</tr>
							
							<tr>
								<th>Type of Event:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="workshop"></label></div>
								</td>
							</tr>
							<tr>
								<th>Name of Event:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="name"></label></div>
								</td>
							</tr>
							<tr>
								<th>Place:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="place"></label></div>
								</td>
							</tr>
							<tr>
								<th>Date:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="date"></label></div>
								</td>
							</tr>
							<tr>
								<th>No. of Days:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="days"></label></div>
								</td>
							</tr>
							<tr>
								<th>Uncheck All:</th>
								<td>
										 <div class="checkbox"><label><input type="checkbox" name="uncheck" onclick="UndoAll()"></label></div>
								</td>
							</tr>
						</tbody>
						</table>
						<nav>
							<ul class="pager">
								<input type="submit" class="btn btn-info" value="Preview">
								<!--<input type="submit" class="btn btn-info" value="Download">-->
								<!--<li><a href="rva_report_category_print.php">Preview</a></li>
								<li><a href="#">Download</a></li>-->
							</ul>
						</nav>
						
						</form>
						
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
