<!DOCTYPE html>


<?php
	include 'rva_common.php';
	$thispage="awardspreview";
?>


<html lang="en">
  

  
  
  
  
<?php
	
	if($_GET['submit']==1)
	{
		echo '
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

			<script src="../../assets/js/ie-emulation-modes-warning.js"></script>

		  </head>';
		// $session2012_13=$_GET['s2012_13'];
		// $session2013_14=$_GET['s2013_14'];
		// $session2014_15=$_GET['s2014_15'];
		// $session2015_16=$_GET['s2015_16'];
		$from=$_GET['from'];
        $to=$_GET['to'];
		$range=$_GET['range'];
		$faculty=$_GET['faculty'];
		$student=$_GET['student'];
				echo'
	  <body>';
		include ('rva_navigation.php');
	
		echo'	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			  <!--<h2 class="page-header">General Event Report</h2>-->
			  <h2 class="page-header"><center><img src="yccelogo.jpg" class="img-rounded" alt="Cinque Terre" >Department of Computer Technology</center></h2>
			  <h4 class="page-header"><center>Awards and Achievement/Recognition Report</center></h4>';
			  
			  
									echo '<table class="table table-bordered">
									<thead>
									<tr>';

									echo '<th>Year</th>';
									echo '<th>Type of Award</th>';
									echo '<th>Details of Competition with Date</th>';
									echo '<th>Organized By</th>';
									
									if(($faculty==1 && $student==1)||($faculty==0 && $student==0))
										echo '<th>Name of Faculty/Student</th><th>Year/Sem</th>';
										
									else if($faculty==1)
										echo '<th>Name of Faculty</th>';
										
									else
										echo '<th>Name of Student</th><th>Year/Sem</th>';
										
									if(($range==1)||($range==2))
									{
										$res=mysqli_query($con,"select * from awards  where adate BETWEEN '$from' AND '$to' order by name asc");
									}
									else
									{
										$res=mysqli_query($con,"select * from awards order by name asc");
									}
									echo '</tr>
									</thead>
									<tbody>';
									$i=1;
									while($row=mysqli_fetch_array($res))
									{
										if((($faculty==1 && $row['category']=="Faculty")||($student==1 && $row['category']=="Student")) || ($faculty==0 && $student==0))
										{
											echo '<tr>';
											$orderdate=explode('-',$row['adate']);
											$year=$orderdate[0];
											$month=$orderdate[1];
											$day=$orderdate[2];
											echo '<td>'.$year.'</td>';
											echo '<td>'.$row['atype'].'</td>';
											echo '<td>'.nl2br($row['adetail']).', '.$day.'/'.$month.'/'.$year.'</td>';
											echo '<td>'.$row['aby'].'</td>';
											echo '<td>'.$row['name'].'</td>';
											if($row['category']=="Student" || ($student==1 && $faculty==1) || ($student==0 && $faculty==0))
												echo '<td>'.$row['yearsem'].'</td>';
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
		header("Content-Disposition: attachment; filename=Awards-Report.xls");
		 
		// Add data table
				
		// $session2012_13=$_GET['s2012_13'];
		// $session2013_14=$_GET['s2013_14'];
		// $session2014_15=$_GET['s2014_15'];
		// $session2015_16=$_GET['s2015_16'];
		$from=$_GET['from'];
        $to=$_GET['to'];
		$range=$_GET['range'];
		$faculty=$_GET['faculty'];
		$student=$_GET['student'];
		
		
		echo '<table border="1">
									<tr>';
									
									//echo $to;
									echo '<th>Year</th>';
									echo '<th>Type of Award</th>';
									echo '<th>Details of Competition with date</th>';
									echo '<th>Organized By</th>';
									if(($faculty==1 && $student==1)||($faculty==0 && $student==0))
										echo '<th>Name of Faculty/Student</th><th>Year/Sem</th>';
									else if($faculty==1)
										echo '<th>Name of Faculty</th>';
									else
										echo '<th>Name of Student</th><th>Year/Sem</th>';
									
									if(($range==1)||($range==2))
									{
										$res=mysqli_query($con,"select * from awards  where adate BETWEEN '$from' AND '$to' order by name asc");
									}
									else
									{
										$res=mysqli_query($con,"select * from awards order by name asc");
									}
									echo '</tr>';
									$i=1;
									while($row=mysqli_fetch_array($res))
									{
										if((($faculty==1 && $row['category']=="Faculty")||($student==1 && $row['category']=="Student")) || ($faculty==0 && $student==0))
										{
											echo '<tr>';
											$orderdate=explode('-',$row['adate']);
											$year=$orderdate[0];
											$month=$orderdate[1];
											$day=$orderdate[2];
											echo '<td>'.$year.'</td>';
											echo '<td>'.$row['atype'].'</td>';
											echo '<td>'.nl2br($row['adetail']).', '.$day.'/'.$month.'/'.$year.'</td>';
											echo '<td>'.$row['aby'].'</td>';
											echo '<td>'.$row['name'].'</td>';
											if($row['category']=="Student" || ($student==1 && $faculty==1) || ($student==0 && $faculty==0))
												echo '<td>'.$row['yearsem'].'</td>';
											echo '</tr>';
										}
									
									}
									echo '
									</table>';
	}
?>


