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

    <title>Organized Events</title>

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
								
									
									$( document ).ready(function()
									{
										
										$("#workshop").hide();
										$("#seminar").hide();
										$("#fdp").hide();
										$("#sttp").hide();
										$("#indus").hide();	
										$("#guest").hide();
									
									
									$("#workshopselect").click(function(){
										$("#workshop").show();
										$("#seminar").hide();
										$("#fdp").hide();
										$("#sttp").hide();
										$("#indus").hide();	
										$("#guest").hide();
									});
									$("#seminarselect").click(function(){
										$("#workshop").hide();
										$("#seminar").show();
										$("#fdp").hide();
										$("#sttp").hide();
										$("#indus").hide();	
										$("#guest").hide();
									});
									
									$("#fdpselect").click(function(){
										$("#workshop").hide();
										$("#seminar").hide();
										$("#fdp").show();
										$("#sttp").hide();
										$("#indus").hide();	
										$("#guest").hide();
									});
									$("#sttpselect").click(function(){
										$("#workshop").hide();
										$("#seminar").hide();
										$("#fdp").hide();
										$("#sttp").show();
										$("#indus").hide();	
										$("#guest").hide();
									});		
									$("#indusselect").click(function(){
										$("#workshop").hide();
										$("#seminar").hide();
										$("#fdp").hide();
										$("#sttp").hide();
										$("#indus").show();	
										$("#guest").hide();
									});		
									$("#guestselect").click(function(){
										$("#workshop").hide();
										$("#seminar").hide();
										$("#fdp").hide();
										$("#sttp").hide();
										$("#indus").hide();	
										$("#guest").show();
									});											
									
									});
									
			</script>
	
	<script>
	function enableC1()
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
	
		function enableC2()
	{
		if(document.myform2.thelist.value=="Custom")
		{
			document.myform2.theinput.disabled=false;
		}
		else if((document.myform2.thelist.value=="Select")||(document.myform2.thelist.value=="AICTE")||(document.myform2.thelist.value=="DST")||(document.myform2.thelist.value=="ISTE"))
		{
			document.myform2.theinput.disabled=true;
		}
	}
			function enableC3()
	{
		if(document.myform3.thelist.value=="Custom")
		{
			document.myform3.theinput.disabled=false;
		}
		else if((document.myform3.thelist.value=="Select")||(document.myform3.thelist.value=="AICTE")||(document.myform3.thelist.value=="DST")||(document.myform3.thelist.value=="ISTE"))
		{
			document.myform3.theinput.disabled=true;
		}
	}
			function enableC4()
	{
		if(document.myform4.thelist.value=="Custom")
		{
			document.myform4.theinput.disabled=false;
		}
		else if((document.myform4.thelist.value=="Select")||(document.myform4.thelist.value=="AICTE")||(document.myform4.thelist.value=="DST")||(document.myform4.thelist.value=="ISTE"))
		{
			document.myform4.theinput.disabled=true;
		}
	}
			function enableC5()
	{
		if(document.myform5.thelist.value=="Custom")
		{
			document.myform5.theinput.disabled=false;
		}
		else if((document.myform5.thelist.value=="Select")||(document.myform5.thelist.value=="AICTE")||(document.myform5.thelist.value=="DST")||(document.myform5.thelist.value=="ISTE"))
		{
			document.myform5.theinput.disabled=true;
		}
	}
			function enableC6()
	{
		if(document.myform6.thelist.value=="Custom")
		{
			document.myform6.theinput.disabled=false;
		}
		else if((document.myform6.thelist.value=="Select")||(document.myform6.thelist.value=="AICTE")||(document.myform6.thelist.value=="DST")||(document.myform6.thelist.value=="ISTE"))
		{
			document.myform6.theinput.disabled=true;
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
	
	<div class="container theme-showcase" >
	<div  role="main">
      <div class="jumbotron">
		<h1>Organized Events Data Entry</h1>
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
	 </div>
		<div class="panel panel-default" role="main">
		  <div class="panel-heading "><h4 class="panel-title" >Organized Events</h4></div>
		  <div class="panel-body">
		  		<div class="radio" id="workshopselect">
				  <label><input type="radio" name="fdpsttp">Workshop</label>
				</div>		  		
				<div class="radio" id="seminarselect">
				  <label><input type="radio" name="fdpsttp">Seminar</label>
				</div>
				
		  		<div class="radio" id="fdpselect">
				  <label><input type="radio" name="fdpsttp">FDP</label>
				</div>
				<div class="radio" id="sttpselect">
				  <label><input type="radio" name="fdpsttp">STTP</label>
				</div> 
				<div class="radio" id="indusselect">
				  <label><input type="radio" name="fdpsttp">Industrial Visits</label>
				</div>
			<!--	<div class="radio" id="guestselect">
				  <label><input type="radio" name="fdpsttp">Guest Lecture</label>
				</div>
		  -->
		  </div>

		  
		  
		</div>
	</div>
	  

	  <div id="workshop" class="container theme-showcase" role="main">
	          <form name="myform" role="form" action="rva_add_workshop1.php" method="post">		


					  <div class="panel-group" id="accordion">
						
						
					  
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">Workshop Details</a>
							</h4>
						  </div>
						  <div id="collapse11" class="panel-collapse collapse in">
							<div class="panel-body">
							<div class="form-group">
								  <label for="session">Session:</label>
								  <select class="form-control" name="session" id="session" required>
									
									<?php include 'rva_selectsession.php'; ?>
								  
								  </select>
								</div>
								<div class="form-group">
								  <label for="namepr">Name of Workshop:</label>
								  <input type="text" name="namepr" class="form-control" placeholder="Enter the Name" id="namepr" required>
								</div>
								<div class="form-group">
								  <label for="thelist">Name of Technical Body involved:</label>
								  <select class="form-control" name="thelist" id="thelist" onclick="enableC1()">
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
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">Committee</a>
							</h4>
						  </div>
						  <div id="collapse12" class="panel-collapse collapse">
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
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">Participants Details</a>
							</h4>
						  </div>
						  <div id="collapse13" class="panel-collapse collapse">
							<div class="panel-body">
							<div class="form-group">
								<label for="participant">Workshop organised for::</label><br>
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
							  <a data-toggle="collapse" data-parent="#accordion" href="#collapse14">Speaker Details</a>
							</h4>
						  </div>
						  <div id="collapse14" class="panel-collapse collapse">
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
	  </div>
	  
	  
	  <!--************************************************ Seminar *****************************************-->
			<div id="seminar" class="container theme-showcase" role="main">
			<form name="myform2" role="form" action="rva_add_seminar1.php" method="post">		


					  <div class="panel-group" id="accordion2">
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse21">Seminar Details</a>
							</h4>
						  </div>
						  <div id="collapse21" class="panel-collapse collapse in">
							<div class="panel-body">
							<div class="form-group">
								  <label for="session">Session:</label>
								  <select class="form-control" name="session" id="session" required>
									
                                    <?php include 'rva_selectsession.php'; ?>
								  
                                  </select>
								</div>
								<div class="form-group">
								  <label for="namepr">Name of Programme:</label>
								  <input type="text" name="namepr" class="form-control" placeholder="Seminar name" id="namepr" required>
								</div>
								<div class="form-group">
								  <label for="thelist">Name of Technical Body involved:</label>
								  <select class="form-control" name="thelist" id="thelist" onclick="enableC2()">
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
							  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse22">Committee</a>
							</h4>
						  </div>
						  <div id="collapse22" class="panel-collapse collapse">
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
							  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse23">Participants Details</a>
							</h4>
						  </div>
						  <div id="collapse23" class="panel-collapse collapse">
							<div class="panel-body">
							<div class="form-group">
								<label for="participant">Seminar organised for::</label><br>
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
							  <a data-toggle="collapse" data-parent="#accordion2" href="#collapse24">Speaker Details</a>
							</h4>
						  </div>
						  <div id="collapse24" class="panel-collapse collapse">
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
			</div>
	  
	  <!-- ******************************************   FDP ********************************* -->
				<div id="fdp" class="container theme-showcase" role="main">		
			<form name="myform3" role="form" action="rva_add_fdp1.php" method="post">		


								  <div class="panel-group" id="accordion3">
								  
								   <div class="panel panel-default">
									  <div class="panel-heading">
										<h4 class="panel-title">
										  <a data-toggle="collapse" data-parent="#accordion3" href="#collapse31">FDP Details</a>
										</h4>
									  </div>
									  <div id="collapse31" class="panel-collapse collapse in">
										<div class="panel-body">
										<div class="form-group">
											  <label for="session">Session:</label>
											  <select class="form-control" name="session" id="session" required>
												 
												 <?php include 'rva_selectsession.php'; ?>
											  
											  </select>
											</div>
											<div class="form-group">
											  <label for="namepr">Name of Programme:</label>
											  <input type="text" name="namepr" class="form-control" placeholder="Faculty Development Programme name" id="namepr" required>
											</div>
											<div class="form-group">
											  <label for="thelist">Name of Technical Body involved:</label>
											  <select class="form-control" name="thelist" id="thelist" onclick="enableC3()">
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
										  <a data-toggle="collapse" data-parent="#accordion3" href="#collapse32">Committee</a>
										</h4>
									  </div>
									  <div id="collapse32" class="panel-collapse collapse">
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
										  <a data-toggle="collapse" data-parent="#accordion3" href="#collapse33">Participants Details</a>
										</h4>
									  </div>
									  <div id="collapse33" class="panel-collapse collapse">
										<div class="panel-body">
										<div class="form-group">
											<label for="participant">Faculty development Programme organised for::</label><br>
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
										  <a data-toggle="collapse" data-parent="#accordion3" href="#collapse34">Speaker Details</a>
										</h4>
									  </div>
									  <div id="collapse34" class="panel-collapse collapse">
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
			
			
	<!--************************************************ STTP *****************************************-->
			<div id="sttp" class="container theme-showcase" role="main">
			<form name="myform4" role="form" action="rva_add_sttp1.php" method="post">		
					  <div class="panel-group" id="accordion4">
						
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion4" href="#collapse41">STTP Details</a>
							</h4>
						  </div>
						  <div id="collapse41" class="panel-collapse collapse in">
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
								  <select class="form-control" name="thelist" id="thelist" onclick="enableC4()">
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
							  <a data-toggle="collapse" data-parent="#accordion4" href="#collapse42">Committee</a>
							</h4>
						  </div>
						  <div id="collapse42" class="panel-collapse collapse">
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
							  <a data-toggle="collapse" data-parent="#accordion4" href="#collapse43">Participants Details</a>
							</h4>
						  </div>
						  <div id="collapse43" class="panel-collapse collapse">
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
							  <a data-toggle="collapse" data-parent="#accordion4" href="#collapse44">Speaker Details</a>
							</h4>
						  </div>
						  <div id="collapse44" class="panel-collapse collapse">
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
					</div>
					
<!--************************************************ Industrial visits *****************************************-->
			<div id="indus" class="container theme-showcase" role="main">
			<form name="myform5" role="form" action="rva_add_indus1.php" method="post">		
                    <div class="panel-group" id="accordion5">
						
					  
					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion5" href="#collapse51">Industrial Visit Details</a>
							</h4>
						  </div>
						  <div id="collapse51" class="panel-collapse collapse in">
							<div class="panel-body">
							<div class="form-group">
                      <label for="session">Session:</label>
                      <select class="form-control" name="session" id="session" required>
                        
                                    <?php include 'rva_selectsession.php'; ?>
                      
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="name">Name of Co-ordinators:</label>
                      <input type="text" name="name" class="form-control" placeholder="Enter the Name" id="name" required>
                    </div>
                    <div class="form-group">
                      <label for="vloc">Visited Location:</label>
                      <input type="text" name="vloc" class="form-control" id="vloc" placeholder="Enter the visited location" required>
                    </div>
                    <div class="form-group">
                      <label for="adate">Date:</label>
                      <table>
                        <tbody>
                        <tr>
                          <td><label>From: </label><input type="date" name="fdate" class="form-control" id="fdate"></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                          <td><label>To: </label><input type="date" name="todate" class="form-control" id="todate"></td>
                        </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="form-group">
                      <label for="yearsem">Year/Sem:</label>
                      <select class="form-control" name="yearsem" id="yearsem" required>
                        <option>Select Year/Sem</option>
     
                        <option>2nd/III</option>
                        <option>2nd/IV</option>
                        <option>3rd/V</option>
                        <option>3rd/VI</option>
                        <option>4th/VII</option>
                        <option>4th/VIII</option>
                        
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="npart">No. of Participants:</label>
                      <input type="text" name="npart" class="form-control" id="npart" placeholder="Enter the no. of participants">
                    </div>
                    <div class="form-group">
                      <label for="agen">Agency involved:</label>
                      <input type="text" name="agency" class="form-control" id="agency" placeholder="Enter the agency">
                    </div>
                    <div class="form-group">
                      <label for="fee">Fees:</label>
                      <input type="text" name="fee" class="form-control" id="fee" placeholder="if any">
                    </div>
                    <div class="form-group">
                      <label for="mode">Mode of Travel:</label>
                       <select class="form-control" name="mode" id="mode" required>
                        <option>Select mode of travel</option>
                        <option>Railway</option>
                        <option>Road</option>
                        <option>Private</option>
                       </select>
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
                     </div>
                    </div>
                    </div>
                    </div>
                    
                    <div>
                     <button class="btn btn-lg btn-primary btn-block" type="submit">Save Information</button>
					 </div>
                    </form>
			</div>
			<!--************************************************ Guest Lectures *****************************************-->
			<div id="guest" class="container theme-showcase" role="main">
			<form name="myform6" role="form" action="rva_add_guest1.php" method="post">	


  <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion6" href="#collapse61">Guest Lecture Detail</a>
							</h4>
						  </div>
						  
						  <div id="collapse61" class="panel-collapse collapse in">
						  
							<div class="panel-body">
							<div class="form-group">
								  <label for="category">Type Of Event:</label>
								  <select class="form-control" name="category" id="category" onclick="EnableSelect()" required>
									<option>Organized</option>
									<option>Delivered</option>
								  </select>
							</div>	
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
			</div>
					<br>
			
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
