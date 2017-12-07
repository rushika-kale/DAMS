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
	
	function EnableSelect()
	{
		if(document.myform.jmoney.value=="Free")
		{
			document.myform.money.disabled=true;
		}
		else if(document.myform.jmoney.value=="Paid")
		{
			document.myform.money.disabled=false;
		}
	}
	
	function EnableSelectC()
	{
		if(document.myform.cmoney.value=="Free")
		{
			document.myform.money1.disabled=true;
		}
		else if(document.myform.cmoney.value=="Paid")
		{
			document.myform.money1.disabled=false;
		}
	}
	
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
	
var room = 0;
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
			'<div class="jumbotron"><div class="form-group"><label for="speaker">Name of Author:</label><input type="text" name="s'+room+'_name" class="form-control" id="s'+room+'_name" required></div><div class="form-group"><label for="dept">Name of Department:</label><input type="text" name="s'+room+'_dept" class="form-control" id="s'+room+'_dept" required></div><div class="form-group"><label for="sinst">Institute name:</label><input type="text" name="s'+room+'_institute" class="form-control" id="s'+room+'_institute" required></div><div class="form-group"><label for="scontact">Contact Number:</label><input type="text" name="s'+room+'_contact" class="form-control" id="s'+room+'_contact" required></div></div>';		
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

     
	  <form name="myform" role="form" action="rva_add_publi1.php" method="post">	
		<?php
			$research=$_POST['research'];
			$pyear=$_POST['pyear'];
			$pubname=$_POST['pubname'];
			$dbType=$_POST['dbType'];
		
			echo '<input type="hidden" name="research" value='.$research.'>';
			echo '<input type="hidden" name="pyear" value='.$pyear.'>';
			echo '<input type="hidden" name="pubname" value='.$pubname.'>';
			echo '<input type="hidden" name="dbType" value='.$dbType.'>';
			
		
			if($dbType=="Journal")
			{		
				echo '
                                <!-- Main jumbotron for a primary marketing message or call to action -->
                          <div class="jumbotron">
                            <h1>Journal</h1>
                          </div>
						<div class="panel-group" id="accordion">
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Journal Details</a>
							</h4>
						  </div>
						  <div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
							<div class="form-group">
								  <label for="jtype">Journal:</label>
								  <select class="form-control" name="jtype" id="jtype" required>
									<option>Select:-</option>
									<option>IJ</option>
									<option>NJ</option>
								  </select>
								</div>
							<div class="form-group">
								  <label for="jname">Journal Name:</label>
								  <input type="text" name="jname" class="form-control" placeholder="Enter the Name of Journal" id="jname" required>
								</div>
								<div class="form-group">
								  <label for="jpublisher">Publisher:</label>
								  <input type="text" name="jpublisher" class="form-control" placeholder="Enter the Name of Publisher" id="jpublisher" required>
								</div>
							<div class="form-group">
								<label for="reference">Referred:</label><br>
									<input type="radio" name="reference" id="reference" value="yes">&nbsp;&nbsp;&nbsp;&nbsp;Yes&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="reference" id="reference" value="no">&nbsp;&nbsp;&nbsp;&nbsp;No
								</div>
								<div class="form-group">
								  <label for="jimpact">Impact Factor:</label>
								  <input type="text" name="jimpact" class="form-control" placeholder="Enter the impact factor" id="jimpact" required>
								</div>
								<div class="form-group">
								  <label for="jvolume">Volume:</label>
								  <input type="text" name="jvolume" class="form-control" placeholder="Enter the volume" id="jvolume" required>
								</div>
								<div class="form-group">
								  <label for="jissue">Issue:</label>
								  <input type="text" name="jissue" class="form-control" placeholder="Enter the issue" id="jissue" required>
								</div>
								<div class="form-group">
								  <label for="jpage">Pages:</label>
								  <input type="text" name="jpage" class="form-control" placeholder="Enter the no. of pages" id="jpage" required>
								</div>
							<div class="form-group">
								<label for="jmoney">Money:</label><br>
									<input type="radio" name="jmoney" id="jmoney" value="Paid" onclick="EnableSelect()">Paid 
								  <input type="text" name="money" class="form-control" id="money" disabled>
								<input type="radio" name="jmoney" id="jmoney" value="Free" onclick="EnableSelect()">Free
								</div>
								<div class="form-group">
								  <label for="jdoi">DOI:</label>
								  <input type="text" name="jdoi" class="form-control" placeholder="Enter DOI" id="jdoi" required>
								</div>	
						</div>
						</div>
						</div>
                        ';
			}
			else if($dbType=="Conference")			
			{
				echo '
						<div class="jumbotron">
                            <h1>Conference</h1>
                          </div>
						<div class="panel-group" id="accordion">
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Conference Details</a>
							</h4>
						  </div>
						  <div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
							<div class="form-group">
								  <label for="ctype">Conference:</label>
								  <select class="form-control" name="ctype" id="ctype" required>
									<option>Select:-</option>
									<option>IC</option>
									<option>NC</option>
								  </select>
								</div>
							<div class="form-group">
								  <label for="cname">Conference Name:</label>
								  <input type="text" name="cname" class="form-control" placeholder="Enter the Name of Conference" id="cname" required>
								</div>
							<div class="form-group">
								  <label for="corganiser">Organiser:</label>
								  <input type="text" name="corganiser" class="form-control" placeholder="Enter the Name of Organiser" id="corganiser" required>
								</div>
							<div class="form-group">
								  <label for="clocation">Location:</label>
								  <input type="text" name="clocation" class="form-control" placeholder="Enter the Location" id="clocation" required>
								</div>
							<div class="form-group">
								  <label for="cvolume">Volume:</label>
								  <input type="text" name="cvolume" class="form-control" placeholder="Enter the volume" id="cvolume" required>
								</div>
								<div class="form-group">
								  <label for="cissue">Issue:</label>
								  <input type="text" name="cissue" class="form-control" placeholder="Enter the Issue" id="cissue" required>
								</div>
								<div class="form-group">
								  <label for="cpage">Pages:</label>
								  <input type="text" name="cpage" class="form-control" placeholder="Enter the no. of pages" id="cpage" required>
								</div>
							<div class="form-group">
								<label for="cmoney">Money:</label><br>
									<input type="radio" name="cmoney" id="cmoney" value="Paid" onclick="EnableSelectC()">Paid
									<input type="text" name="money1" class="form-control" id="money1" disabled>
									<input type="radio" name="cmoney" id="cmoney" value="Free" onclick="EnableSelectC()">Free
								</div>
								<div class="form-group">
								  <label for="cdoi">DOI:</label>
								  <input type="text" name="cdoi" class="form-control" placeholder="Enter DOI" id="cdoi" required>
								</div>			
						</div>
						</div>
						</div>
                        ';
			}
			else if($dbType=="Thesis")
			{
				echo '					
					<div class="jumbotron">
                            <h1>Thesis</h1>
                          </div>
						<div class="panel-group" id="accordion">
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Thesis Details</a>
							</h4>
						  </div>
						  <div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
							<div class="form-group">
								  <label for="thesis">Thesis:</label>
								</div>	
							<div class="form-group">
								  <label for="ttitle">Thesis Title:</label>
								  <input type="text" name="ttitle" class="form-control" placeholder="Enter the Title of thesis" id="ttitle" required>
								</div>
							<div class="form-group">
								  <label for="tdegree">Degree:</label>
								  <input type="text" name="tdegree" class="form-control" placeholder="Enter the Degree" id="tdegree" required>
								</div>
							<div class="form-group">
								  <label for="taffiliate">Affiliation:</label>
								  <input type="text" name="taffiliate" class="form-control" placeholder="Enter the Affiliation" id="taffiliate" required>
								</div>
							<div class="form-group">
								  <label for="tguide">Guide:</label>
								  <input type="text" name="tguide" class="form-control" placeholder="Enter the Guide name" id="tguide" required>
								</div>
							<div class="form-group">
								  <label for="tcguide">Co-guide:</label>
								  <input type="text" name="tcguide" class="form-control" placeholder="Enter the Co-guide name" id="tcguide" required>
								</div>
							<div class="form-group">
								  <label for="tdoi">DOI:</label>
								  <input type="text" name="tdoi" class="form-control" placeholder="Enter DOI" id="tdoi" required>
								</div>									
						</div>
						</div>
						</div>';
			}
			else if($dbType=="Data Set")
			{			
				echo '
						<div class="jumbotron">
                            <h1>Data Set</h1>
                          </div>
						<div class="panel-group" id="accordion">
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Data Set Details</a>
							</h4>
						  </div>
						  <div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
							<div class="form-group">
								  <label for="dtype">Data Set:</label>
							</div>
							<div class="form-group">
								  <label for="dtopic">Topic:</label>
								  <input type="text" name="dtopic" class="form-control" placeholder="Enter the Data set" id="dtopic" required>
								</div>
							<div class="form-group">
								  <label for="ddoi">DOI:</label>
								  <input type="text" name="ddoi" class="form-control" placeholder="Enter DOI" id="ddoi" required>
								</div>		
						</div>
						</div>
						</div>';
			}
			else if($dbType=="Book")			
			{
				echo '
						<div class="jumbotron">
                            <h1>Book</h1>
                          </div>
						<div class="panel-group" id="accordion">
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Book Details</a>
							</h4>
						  </div>
						  <div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
							<div class="form-group">
								  <label for="btype">Book:</label>
								</div>
							<div class="form-group">
								  <label for="bpublisher">Publisher:</label>
								  <input type="text" name="bpublisher" class="form-control" placeholder="Enter the Publisher" id="bpublisher" required>
								</div>
							<div class="form-group">
								  <label for="beditor">Editor:</label>
								  <input type="text" name="beditor" class="form-control" placeholder="Enter the Editor" id="beditor" required>
								</div>	
							<div class="form-group">
								  <label for="bedition">Edition:</label>
								  <input type="text" name="bedition" class="form-control" placeholder="Enter the Edition" id="bedition" required>
								</div>	
							<div class="form-group">
								  <label for="bisbn">ISBN:</label>
								  <input type="text" name="bisbn" class="form-control" placeholder="Enter ISBN" id="bisbn" required>
								</div>	
							<div class="form-group">
								  <label for="btopic">Topic(s):</label>
								  <input type="text" name="btopic" class="form-control" placeholder="Enter the Topic" id="btopic" required>
								</div>			
							<div class="form-group">
								  <label for="bdoi">DOI:</label>
								  <input type="text" name="bdoi" class="form-control" placeholder="Enter DOI" id="bdoi" required>
								</div>									
						</div>
						</div>
						</div>';
			}
			else if($dbType=="Book-Chapter")
			{
				echo '					  		  
						<div class="jumbotron">
                            <h1>Book-Chapter</h1>
                          </div>
						<div class="panel-group" id="accordion">
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Book-Chapter Details</a>
							</h4>
						  </div>
						  <div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
							<div class="form-group">
								  <label for="bookchapter">Book chapter:</label>
								</div>
							<div class="form-group">
								  <label for="bcchaptername">Chapter Name:</label>
								  <input type="text" name="bcchaptername" class="form-control" placeholder="Enter Chapter name" id="bcchaptername" required>
								</div>
							<div class="form-group">
								  <label for="bcpages">Pages:</label>
								  <input type="text" name="bcpages" class="form-control" placeholder="Enter No. of Pages" id="bcpages" required>
								</div>
							<div class="form-group">
								  <label for="bcbooktitle">Book Title:</label>
								  <input type="text" name="bcbooktitle" class="form-control" placeholder="Enter the Book title" id="bcbooktitle" required>
								</div>
							<div class="form-group">
								  <label for="bceditor">Editor(s):</label>
								  <input type="text" name="bceditor" class="form-control" placeholder="Enter the Editor" id="bceditor" required>
								</div>	
							<div class="form-group">
								  <label for="bcpublisher">Publisher:</label>
								  <input type="text" name="bcpublisher" class="form-control" placeholder="Enter the Publisher" id="bcpublisher" required>
								</div>
							<div class="form-group">
								  <label for="bcedition">Edition:</label>
								  <input type="text" name="bcedition" class="form-control" placeholder="Enter the Edition" id="bcedition" required>
								</div>	
							<div class="form-group">
								  <label for="bcisbn">ISBN:</label>
								  <input type="text" name="bcisbn" class="form-control" placeholder="Enter ISBN" id="bcisbn" required>
								</div>	
							<div class="form-group">
								  <label for="bctopic">Topic(s):</label>
								  <input type="text" name="bctopic" class="form-control" placeholder="Enter the Topic" id="bctopic" required>
								</div>			
							<div class="form-group">
								  <label for="bcdoi">DOI:</label>
								  <input type="text" name="bcdoi" class="form-control" placeholder="Enter DOI" id="bcdoi" required>
								</div>									
						</div>
						</div>
						</div>';
			}						
			else if($dbType=="Patent")				
			{
				echo '
						<div class="jumbotron">
                            <h1>Patent</h1>
                          </div>
						<div class="panel-group" id="accordion">
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Patent Details</a>
							</h4>
						  </div>
						  <div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
							<div class="form-group">
								  <label for="patent">Patent:</label>
								</div>
							<div class="form-group">
								  <label for="pref">Reference Number:</label>
								  <input type="text" name="pref" class="form-control" placeholder="Enter the Reference Number" id="pref" required>
								</div>
							<div class="form-group">
								  <label for="ptopic">Topic:</label>
								  <input type="text" name="ptopic" class="form-control" placeholder="Enter the Topic" id="ptopic" required>
								</div>
							<div class="form-group">
								  <label for="pdoi">DOI:</label>
								  <input type="text" name="pdoi" class="form-control" placeholder="Enter DOI" id="pdoi" required>
								</div>		
						</div>
						</div>
						</div>';
			}
			else if($dbType=="Copyright")
			{
				echo '			
						<div class="jumbotron">
                            <h1>Copyright</h1>
                          </div>
						<div class="panel-group" id="accordion">
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Copyright Details</a>
							</h4>
						  </div>
						  <div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
							<div class="form-group">
								  <label for="copyright">Copyright:</label>
								</div>
							<div class="form-group">
								  <label for="crdiary">Diary Number:</label>
								  <input type="text" name="crdiary" class="form-control" placeholder="Enter the Diary Number" id="crdiary" required>
								</div>
							<div class="form-group">
								  <label for="crcopyright">Copyright Number:</label>
								  <input type="text" name="crcopyright" class="form-control" placeholder="Enter the copyright number" id="crcopyright" required>
								</div>
							<div class="form-group">
								  <label for="crtopic">Topic:</label>
								  <input type="text" name="crtopic" class="form-control" placeholder="Enter the Topic" id="crtopic" required>
								</div>
							<div class="form-group">
								  <label for="crdoi">DOI:</label>
								  <input type="text" name="crdoi" class="form-control" placeholder="Enter DOI" id="crdoi" required>
								</div>		
						</div>
						</div>
						</div>';
			}
			else if($dbType=="Report")
			{
				echo '										
					<div class="jumbotron">
                            <h1>Report</h1>
                          </div>
						<div class="panel-group" id="accordion">
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Report Details</a>
							</h4>
						  </div>
						  <div id="collapse1" class="panel-collapse collapse in">
							<div class="panel-body">
							<div class="form-group">
								  <label for="report">Report:</label>
								</div>
							<div class="form-group">
								  <label for="rnumber">Report Number:</label>
								  <input type="text" name="rnumber" class="form-control" placeholder="Enter the Report Number" id="rnumber" required>
								</div>
							<div class="form-group">
								  <label for="raffiliate">Affiliation:</label>
								  <input type="text" name="raffiliate" class="form-control" placeholder="Enter the Affiliation" id="raffiliate" required>
								</div>
							<div class="form-group">
								  <label for="rtopic">Topics:</label>
								  <input type="text" name="rtopic" class="form-control" placeholder="Enter the Topic" id="rtopic" required>
								</div>
						</div>
						</div>
						</div>';
			}				
	?>	
    
					
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Abstract Details</a>
							</h4>
						  </div>
						  <div id="collapse2" class="panel-collapse collapse">
							<div class="panel-body">
							
							<div class="form-group">
								  <label for="jdate">Date:</label>
								  <input type="date" name="jdate" class="form-control" id="jdate" required>
								</div>
							<div class="form-group">
								  <label for="abstract">Abstract:</label>
								  <textarea name="abstract" class="form-control" placeholder="Enter the abstract" id="abstract" required></textarea>
							</div>
							</div>
						</div>
						</div>
                       
                        

					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Author's Details</a>
							</h4>
						  </div>
						  <div id="collapse3" class="panel-collapse collapse">
							<div class="panel-body">
								<div class="form-group">
									<button type="button" class="btn btn-primary active" id="more_fields" onclick="add_fields(this);">Add More Author</button>
								</div>
							</div>
						</div>
						</div>
                        
						

					

						
<div>
</br>
 <button class="btn btn-lg btn-primary btn-block" type="submit">Save</button>
</form>
<br/>
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
