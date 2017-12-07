		echo'
	  <body>
	 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header" >
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="rva_report3.php"><strong><font color="#ffffff" size="5">Report Generation</font></strong></a>
        </div>
        <div class="navbar-collapse collapse animated fadeIn">
          <ul class="nav navbar-nav navbar-right">
            <!-- <li><a href="">Reports</a></li>
            <li><a href="">Groups</a></li>
            <li><a href="">Profile</a></li>-->
            <li class="navbar-brand "><a style="top:-15px;" href="index.php"><font color="#E8E8E8 ">Home</font></a></li>
            <li class="navbar-brand "><a style="top:-15px;" href="logout.php"><font color="#E8E8E8 ">Logout</font></a></li>
          </ul>
        <!--  <form class="navbar-form navbar-right" action="searchfor.php" method="get">
            <input type="text" name="term" class="form-control" placeholder="Search..">
          </form>-->
        </div>
      </div>
    </nav>
		

		<div class="container-fluid">
		  <div class="row">
			
	        <div class="col-sm-3 col-md-2 sidebar">
	
	
	
	
	 <!--<div class="container">-->
       <h4>Event Report</h4><p>
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Organized</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse  <?php if($thispage=="guestreport" || $thispage=="guestpreview"|| $thispage=="orgworkshop" || $thispage=="orgworkshoppreview"|| $thispage=="orgseminar"|| $thispage=="orgseminarpreview" || $thispage=="orgall" || $thispage=="orgallpreview" || $thispage=="orgfdpsttp" || $thispage=="orgfdpsttppreview" || $thispage=="orgindus" || $thispage=="orginduspreview" || $thispage=="orgcount" || $thispage=="orgcountpreview" || $thispage=="orgall" || $thispage=="orgallpreview" ) echo 'in'?>">
            <div class="panel-body">
			
				 <ul class="nav nav-sidebar">
					<li class="<?php if($thispage=="orgworkshop" || $thispage=="orgworkshoppreview" ) echo 'active'?>"><a href="rva_workshopreport.php">Workshop</a></li>
					<li class="<?php if($thispage=="orgfdpsttp" || $thispage=="orgfdpsttppreview" ) echo 'active'?>"><a href="rva_fdpsttpreport.php">FDP/STTP</a></li>
			<!--		<li><a href="#">Conference</a></li>  -->
					<li class="<?php if($thispage=="orgseminar" || $thispage=="orgseminarpreview" ) echo 'active'?>"><a href="rva_seminarreport.php">Seminar</a></li>
					<li class="<?php if($thispage=="orgindus" || $thispage=="orginduspreview" ) echo 'active'?>"><a href="rva_indusreport.php">Industrial Visit</a></li>
					<!--<li class="<?php if($thispage=="guestreport" || $thispage=="guestpreview" ) echo 'active'?>"><a href="rva_guestreport.php">Guest Lecture</a></li>-->
					<li class="<?php if($thispage=="orgcount" || $thispage=="orgcountpreview" ) echo 'active'?>"><a href="rva_count.php">Count</a></li>
					<li class="<?php if($thispage=="orgall" || $thispage=="orgallpreview" ) echo 'active'?>"><a href="rva_allreport.php">All</a></li>
					
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
          <div id="collapse3" class="panel-collapse collapse <?php if($thispage=="attenworkshop" || $thispage=="attenworkshoppreview"|| $thispage=="attenseminar"|| $thispage=="attenseminarpreview" || $thispage=="attenall" || $thispage=="attenallpreview" || $thispage=="attenfdpsttp" || $thispage=="attenfdpsttppreview" ) echo 'in'?>" >
            <div class="panel-body">
			
				<ul class="nav nav-sidebar">
					<li class="<?php if($thispage=="attenworkshop" || $thispage=="attenworkshoppreview" ) echo 'active'?>"><a href="rva_atten_workshop.php">Workshop</a></li>
					<li class="<?php if($thispage=="attenfdpsttp" || $thispage=="attenfdpsttppreview" ) echo 'active'?>" ><a href="rva_atten_fdpsttp.php">FDP/STTP</a></li>
			<!--		<li><a href="#">Conference</a></li>  -->
					<li class="<?php if($thispage=="attenseminar" || $thispage=="attenseminarpreview" ) echo 'active'?> "><a href="rva_atten_seminar.php">Seminar</a></li>
					<li class="<?php if($thispage=="attenall" || $thispage=="attenallpreview" ) echo 'active'?>"><a href="rva_atten_all.php">All</a></li>
				</ul>
			
			</div>
          </div>
        </div>
		<p>	
	  
 
	     <h4>Faculty Report</h4>
	   <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Profile Report</a>
            </h4>
          </div>
		  <div id="collapse4" class="panel-collapse collapse <?php if($thispage == "facprofile" || $thispage=="facprofilepreview" ) echo 'in'?>">
            <div class="panel-body">
			<ul class="nav nav-sidebar">
					<li class="<?php if($thispage=="facprofile" || $thispage=="facprofilepreview" ) echo'active'?>"><a href="rva_facprofile1.php">Combined Report</a></li>
        </div>
		</div>
		</div>
	<p>
	<h4>Achievements</h4>
		<div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Awards</a>
            </h4>
          </div>
		  <div id="collapse5" class="panel-collapse collapse <?php if($thispage=="awards" || $thispage=="awardspreview" ) echo'in'?>">
            <div class="panel-body">
			<ul class="nav nav-sidebar">
					<li class="<?php if($thispage=="awards" || $thispage=="awardspreview" ) echo'active'?>"><a href="rva_awardsreport.php">Award Report</a></li>
        </div>
		</div>
		</div>
		<div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Miscellaneous</a>
            </h4>
          </div>
		  <div id="collapse6" class="panel-collapse collapse <?php if($thispage=="placement" || $thispage=="placementpreview" || $thispage=="funproject" || $thispage=="funprojectpreview" ) echo'in'?>">
            <div class="panel-body">
			<ul class="nav nav-sidebar">
					<li class="<?php if($thispage=="placement" || $thispage=="placementpreview" ) echo'active'?>"><a href="rva_placementreport.php">Placement Report</a></li>
					<li class="<?php if($thispage=="funproject"|| $thispage=="funprojectpreview" ) echo'active'?>"><a href="rva_funprojectreport.php">Funding Project Report</a></li>
        </div>
		</div>
		</div>
	</div> 
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	</div>
	</div>
	
	
			
			  