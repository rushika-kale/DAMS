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

    <title>Attended Events</title>

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
									
									
									$("#workshopselect").click(function(){
										$("#workshop").show();
										$("#seminar").hide();
										$("#fdp").hide();
										$("#sttp").hide();
									});
									
									$("#seminarselect").click(function(){
										$("#workshop").hide();
										$("#seminar").show();
										$("#fdp").hide();
										$("#sttp").hide();
									});
									
									$("#fdpselect").click(function(){
										$("#workshop").hide();
										$("#seminar").hide();
										$("#fdp").show();
										$("#sttp").hide();
									});
									$("#sttpselect").click(function(){
										$("#workshop").hide();
										$("#seminar").hide();
										$("#fdp").hide();
										$("#sttp").show();
										
									});									
									
									});
									
			</script>
	
	<script>
	function enableC3()
	{
		if(document.myform3.thelist.value=="Custom")
		{
			document.myform3.theinput.disabled=false;
		}
		else if((document.myform3.thelist.value=="AICTE")||(document.myform3.thelist.value=="DST")||(document.myform3.thelist.value=="ISTE"))
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
		else if((document.myform4.thelist.value=="AICTE")||(document.myform4.thelist.value=="DST")||(document.myform4.thelist.value=="ISTE"))
		{
			document.myform4.theinput.disabled=true;
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
		<h1>Attended FDP/STTP</h1>
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
		  <div class="panel-heading "><h4 class="panel-title" >Select FDP or STTP</h4></div>
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
		  
		  </div>

		  
		  
		</div>
	</div>
<!-- ***************************** Workshop *******************************************************************************-->
				<div id="workshop" class="container theme-showcase" role="main">
				<form name="myform1" role="form" action="rva_add_atten_workshop1.php" method="post">		
        <div class="panel-group" id="accordion1">
						

					   <div class="panel panel-default">
						  <div class="panel-heading">
							<h4 class="panel-title">
							  <a data-toggle="collapse" data-parent="#accordion1" href="#collapse11">Workshop Details</a>
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
                                            <label for="wname">Name of Workshop:</label>
                                            <input type="text" name="wname" class="form-control" placeholder="Enter the name of Workshop Name" id="wname" required>
                                </div>

                                <div class="form-group">
                                            <label for="adate">Date:</label><br>
                                            <label for="sdate">From:</label>
                                            <input type="date" name="sdate" class="form-control" id="sdate">
                                            <label for="edate">To:</label>
                                            <input type="date" name="edate" class="form-control" id="edate">
                                </div>

                                <div class="form-group">
                                            <label for="jdate">Joining Date:</label>
                                            <input type="date" name="jdate" class="form-control" id="jdate">
                                 </div>

                                <div class="form-group">
                                            <label for="wvenue">Place of Workshop:</label>
                                            <input type="text" name="wvenue" class="form-control" id="wvenue" placeholder="Enter the Workshop Place" required>
                                </div>
                                <div class="form-group">
                                            <label for="regfees">Registration Fees:</label>
                                            <input type="text" name="regfees" class="form-control" id="regfees" placeholder="Enter the Registration Fees">
                                </div>
                              </div>
                            </div>
                          </div>
                       </div>
                 
                            <?php
                                echo '<input type="hidden" name="type" value="Foothpath Shala Centre">';	
                                //echo '<input type="hidden" name="centre" value="'.$centre.'">';
                            ?>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Save Information</button>
                        </form>
				</div>
<!-- ***************************** SEMINAR *******************************************************************************-->
				<div id="seminar" class="container theme-showcase" role="main">	
				<form name="myform2" role="form" action="rva_add_atten_seminar1.php" method="post">		
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
                              <label for="wname">Name of Seminar:</label>
                              <input type="text" name="wname" class="form-control" placeholder="Enter the Name of Seminar" id="wname" required>
                            </div>

                            <div class="form-group">
                              <label>Date:</label>
                              <br>

                              <label for="sdate">From:</label>
                              <input type="date" name="sdate" class="form-control" id="from">
                              <label for="edate">To:</label>
                              <input type="date" name="edate" class="form-control" id="to">
                            </div>

                            <div class="form-group">
                              <label for="jdate">Joining Date:</label>
                              <input type="date" name="jdate" class="form-control" id="join">
                            </div>

                            <div class="form-group">
                              <label for="wvenue">Place of Seminar:</label>
                              <input type="text" name="wvenue" class="form-control" id="wvenue" placeholder="Enter the place of Seminar">
                            </div>

                            <div class="form-group">
                              <label for="regfees">Registration Fees:</label>
                              <input type="text" name="regfees" class="form-control" id="regfees" placeholder="if any">
                            </div>
                           </div>
                          </div>
                         </div>
                       </div>


                        <?php
                            echo '<input type="hidden" name="type" value="Foothpath Shala Centre">';	
                            //echo '<input type="hidden" name="centre" value="'.$centre.'">';
                        ?>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Save Information</button>
                </form>
				</div>
	  
<!-- ***************************** FDP *******************************************************************************-->
				<div id="fdp" class="container theme-showcase" role="main">					
			 <form name="myform3" role="form" action="rva_add_atten_fdp1.php" method="post">
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
                              <label for="wname">Name of FDP:</label>
                              <input type="text" name="wname" class="form-control" placeholder="Enter the name of FDP" id="wname" required>
                            </div>

                            <div class="form-group">
                              <label>Date:</label>
                              <br>
                              <label for="sdate">From:</label>
                              <input type="date" name="sdate" class="form-control" id="from">
                              <label for="edate">To:</label>
                              <input type="date" name="edate" class="form-control" id="to">
                            </div>

                            <div class="form-group">
                              <label for="jdate">Joining Date:</label>
                              <input type="date" name="jdate" class="form-control" id="join">
                            </div>

                            <div class="form-group">
                              <label for="wvenue">Place of FDP:</label>
                              <input type="text" name="wvenue" class="form-control" id="wvenue" placeholder="Enter the place of fdp">
                            </div>

                            <div class="form-group">
                              <label for="regfees">Registration Fees:</label>
                              <input type="text" name="regfees" class="form-control" id="regfees" placeholder="if any">
                            </div>
                           </div>
                          </div>
                         </div>
                       </div>


                        <?php
                            echo '<input type="hidden" name="type" value="Foothpath Shala Centre">';	
                            //echo '<input type="hidden" name="centre" value="'.$centre.'">';
                        ?>
                     <button class="btn btn-lg btn-primary btn-block" type="submit">Save Information</button>
                    </form>
			<br/>
				<!-- /container -->
			</div>
			
			
<!-- ***************************** STTP *******************************************************************************-->			
			<div id="sttp" class="container theme-showcase" role="main">
			<form name="myform4" role="form" action="rva_add_atten_sttp1.php" method="post">		
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
                              <label for="wname">Name of STTP:</label>
                              <input type="text" name="wname" class="form-control" placeholder="Enter the name of STTP" id="wname" required>
                            </div>

                            <div class="form-group">
                              <label>Date:</label>
                              <br>

                              <label for="sdate">From:</label>
                              <input type="date" name="sdate" class="form-control" id="from">
                              <label for="edate">To:</label>
                              <input type="date" name="edate" class="form-control" id="to">
                            </div>

                            <div class="form-group">
                              <label for="jdate">Joining Date:</label>
                              <input type="date" name="jdate" class="form-control" id="join">
                            </div>

                            <div class="form-group">
                              <label for="wvenue">Place of STTP:</label>
                              <input type="text" name="wvenue" class="form-control" id="wvenue" placeholder="Enter the place of sttp">
                            </div>

                            <div class="form-group">
                              <label for="regfees">Registration Fees:</label>
                              <input type="text" name="regfees" class="form-control" id="regfees" placeholder="if any">
                            </div>
                           </div>
                          </div>
                         </div>
                       </div>


                            <?php
                                echo '<input type="hidden" name="type" value="Foothpath Shala Centre">';	
                                //echo '<input type="hidden" name="centre" value="'.$centre.'">';
                            ?>
                     <button class="btn btn-lg btn-primary btn-block" type="submit">Save Information</button>
                    </form>
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
