<!DOCTYPE html>


<?php
	include 'rva_common.php';
	$thispage= "facprofilepreview";
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

  
  
  
  
<?php
	
	if($_GET['submit']==1)
	{
		$session2012_13=$_GET['s2012_13'];
		$session2013_14=$_GET['s2013_14'];
		$session2014_15=$_GET['s2014_15'];
		$session2015_16=$_GET['s2015_16'];
		$session2016_17=$_GET['s2016_17'];

				echo'
	  <body>';
		include ('rva_navigation.php');
echo'	
	
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			  <!--<h2 class="page-header">General Event Report</h2>-->
			  <h2 class="page-header"><center><img src="yccelogo.jpg" class="img-rounded" alt="Cinque Terre" >Department of Computer Technology</center></h2>
			  <h4 class="page-header"><center>Combined Report</center></h4>';
			  
			  
									echo '<table class="table table-bordered">
									<thead>
									<tr>';
									
									
									
									//echo $to;
									echo '<th>Sr. No.</th>';
									echo '<th>Name</th>';
									echo '<th>Contact No.</th>';
									echo '<th>Joining Date</th>';
									echo '<th>Designation</th>';
									//echo "$session2012_13"; echo "$session2013_14"; echo "$session2014_15"; echo "$session2015_16"; echo "$session2016_17";
									
									$res=mysqli_query($con,"select s.username,p.sal,p.f_name,p.m_name,p.l_name,p.con from profile p, fac_session s where p.username=s.username and (session2012_13='$session2012_13' or session2013_14='$session2013_14' or session2014_15='$session2014_15' or session2015_16='$session2015_16' or session2016_17='$session2016_17')");
									echo '</tr>
									</thead>
									<tbody>';
									$i=1;
									while(($row= mysqli_fetch_array($res,MYSQLI_ASSOC)))
									{
										$user=$row['username'];
										$res2=mysqli_query($con,"select username,des,j_date,j_month,j_year from faculty.fac_info where username='$user'");
										$row2= mysqli_fetch_array($res2);
										if($row['f_name']!=null)
										{
											echo '<tr>';
											echo '<td>'.$i++.'</td>';
											echo '<td>'.$row['sal']." ".$row['f_name']." ".$row['m_name']." ".$row['l_name'].'</td>';
											echo '<td>'.$row['con'].'</td>';
											echo '<td>'.$row2['j_date']."/".$row2['j_month']."/".$row2['j_year'].'</td>';
											echo '<td>'.$row2['des'].'</td>';
											echo '</tr>';
										}
									}
									echo '
									</tbody>
									</table>';
				echo '
			</div>
		  </div>
		</div>';

		echo '
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="dist/js/bootstrap.min.js"></script>
		<script src="assets/js/vendor/holder.min.js"></script>
		<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
	  </body>
	  </html>';
	}
	else if($_GET['submit']==2)
	{
		// The function header by sending raw excel
		header("Content-type: application/vnd-ms-excel");
		 
		// Defines the name of the export file "codelution-export.xls"
		header("Content-Disposition: attachment; filename=Faculty-profile.xls");
		 
		// Add data table
		//include 'rva_facprofile_excel_2_A.php';
		
		$session2012_13=$_GET['s2012_13'];
		$session2013_14=$_GET['s2013_14'];
		$session2014_15=$_GET['s2014_15'];
		$session2015_16=$_GET['s2015_16'];
		$session2016_17=$_GET['s2016_17'];
		
		echo '<table border="1">
									<tr>';
									
									
									
									//echo $to;
									echo '<th>Sr. No.</th>';
									echo '<th>Name</th>';
									echo '<th>Contact No.</th>';
									echo '<th>Joining Date</th>';
									echo '<th>Designation</th>';
									
									
									$res=mysqli_query($con,"select s.username,p.sal,p.f_name,p.m_name,p.l_name,p.con from profile p, fac_session s where p.username=s.username and (session2012_13='$session2012_13' or session2013_14='$session2013_14' or session2014_15='$session2014_15' or session2015_16='$session2015_16' or session2016_17='$session2016_17')");
									echo '</tr>';
									$i=1;
									while(($row= mysqli_fetch_array($res,MYSQLI_ASSOC)))
									{
										$user=$row['username'];
										$res2=mysqli_query($con,"select username,des,j_date,j_month,j_year from faculty.fac_info where username='$user'");
										$row2= mysqli_fetch_array($res2);
										if($row['f_name']!=null)
										{
											echo '<tr>';
											echo '<td>'.$i++.'</td>';
											echo '<td>'.$row['sal']." ".$row['f_name']." ".$row['m_name']." ".$row['l_name'].'</td>';
											echo '<td>'.$row['con'].'</td>';
											echo '<td>'.$row2['j_date']."/".$row2['j_month']."/".$row2['j_year'].'</td>';
											echo '<td>'.$row2['des'].'</td>';
											echo '</tr>';
										}
									}
									echo '</table>';
	}
?>


