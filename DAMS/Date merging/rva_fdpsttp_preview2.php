<!DOCTYPE html>


<?php
	include 'rva_common.php';
	$thispage= "orgfdpsttppreview";
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
		$name=$_GET['name'];
		$tevent=$_GET['tevent'];
		$nevent=$_GET['nevent'];
		$nspeaker=$_GET['nspeaker'];
		$date=$_GET['date'];
		$days=$_GET['days'];
		$npart=$_GET['npart'];
		$agency=$_GET['agency'];
		$tarea=$_GET['tarea'];
		
				echo'
				
	  <body>';
	  include ('rva_navigation.php');
	 echo'
	 
	
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			  <!--<h2 class="page-header">General Event Report</h2>-->
			  <h2 class="page-header"><center><img src="yccelogo.jpg" class="img-rounded" alt="Cinque Terre" >Department of Computer Technology</center></h2>
			  <h4 class="page-header"><center>Organized FDP/STTP Report</center></h4>';
			  
			  
									echo '<table class="table table-bordered">
									<thead>
									<tr>';
									
									
									
									echo '<th>Sr. No.</th>';
									if($name)
										echo '<th>Name of Co-ordinators</th>';
									if($tevent)
										echo '<th>Type of Event</th>';
									if($nevent)
										echo '<th>Name Of Event</th>';
									if($nspeaker)
										echo '<th>Name of Speakers</th>';
									if($date)
										echo '<th>Date</th>';
									if($days)
										echo '<th>No. of Days</th>';
									if($npart)
										echo '<th>No. of Participants</th>';
									if($agency)
										echo '<th>Agency Involved</th>';
									if($tarea)
										echo '<th>Thrust Area</th>';
									
																		
									$res=mysqli_query($con,"select * from organisedfdp where w_date BETWEEN '$from' AND '$to'
													 union
													  select * from organisedsttp where w_date BETWEEN '$from' AND '$to'
													  order by name asc");
									echo '</tr>
									</thead>
									<tbody>';
									$i=1;
									while($row=mysqli_fetch_array($res))
									{
										echo '<tr>';
										echo '<td>'.$i++.'</td>';
										if($name)
											echo '<td>'.$row['coordinator'].'<br>'.$row['cocoordinator'].'</td>';
										if($tevent)	
											echo '<td>'.$row['type'].'</td>';
										if($nevent)
											echo '<td>'.$row['name'].'</td>';
										if($nspeaker)
										{
											echo '<td>'.$row['s1_name'].'<br>';
											echo $row['s2_name'].'<br>';
											echo $row['s3_name'].'<br>';
											echo $row['s4_name'].'</td>';
										}
										if($date)
										{
											$fdate=$row['w_date'];
											$orderdate1=explode('-',$row['w_date']);
											$year1=$orderdate1[0];
											$month1=$orderdate1[1];
											$day1=$orderdate1[2];
											$todate=$row['w_date2'];
											$orderdate2=explode('-',$row['w_date2']);
											$year2=$orderdate2[0];
											$month2=$orderdate2[1];
											$day2=$orderdate2[2];
											
											
											if($row['w_date']!=$row['w_date2'])
												echo '<td>'.$day1.'/'.$month1.'/'.$year1.' To '.$day2.'/'.$month2.'/'.$year2.'</td>';
											else
												echo '<td>'.$day1.'/'.$month1.'/'.$year1.'</td>';
										}
										if($days)
										{
											$date1=date_create($row['w_date']);
											$date2=date_create($row['w_date2']);
											$diff=date_diff($date1,$date2);
											$days=$diff->format('%a')+1;
											if($date1!=$date2)
												echo '<td>'.$days.'</td>';
											else
												echo '<td>1</td>';
										}
										if($npart)
											echo '<td>'.$row['count'].'</td>';
										if($agency)
											echo '<td>'.$row['organiser'].'</td>';
										if($tarea)
											echo '<td>'.$row['tarea'].'</td>';
										echo '</tr>';
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
		header("Content-Disposition: attachment; filename=Oragnized-FDPSTTP-Report.xls");
		 
		// Add data table
				
		$from=$_GET['from'];
        $to=$_GET['to'];
		$name=$_GET['name'];
		$tevent=$_GET['tevent'];
		$nevent=$_GET['nevent'];
		$nspeaker=$_GET['nspeaker'];
		$date=$_GET['date'];
		$days=$_GET['days'];
		$npart=$_GET['npart'];
		$agency=$_GET['agency'];
		$tarea=$_GET['tarea'];
		
		
		echo '<table border="1">
									<tr>';
														
									echo '<th>Sr. No.</th>';
									if($name)
										echo '<th>Name of Co-ordinators</th>';
									if($tevent)
										echo '<th>Type of Event</th>';
									if($nevent)
										echo '<th>Name Of Event</th>';
									if($nspeaker)
										echo '<th>Name of Speakers</th>';
									if($date)
										echo '<th>Date</th>';
									if($days)
										echo '<th>No. of Days</th>';
									if($npart)
										echo '<th>No. of Participants</th>';
									if($agency)
										echo '<th>Agency Involved</th>';
									if($tarea)
										echo '<th>Thrust Area</th>';
									
									$res=mysqli_query($con,"select * from organisedfdp where w_date BETWEEN '$from' AND '$to'
													 union
													  select * from organisedsttp where w_date BETWEEN '$from' AND '$to'
													  order by name asc");
									echo '</tr>';
									$i=1;
									while($row=mysqli_fetch_array($res))
									{
										echo '<tr>';
										echo '<td>'.$i++.'</td>';
										if($name)
											echo '<td>'.$row['coordinator'].'<br>'.$row['cocoordinator'].'</td>';
										if($tevent)
											echo '<td>'.$row['type'].'</td>';
										if($nevent)
											echo '<td>'.$row['name'].'</td>';
										if($nspeaker)
										{
											echo '<td>'.$row['s1_name'].'<br>';
											echo $row['s2_name'].'<br>';
											echo $row['s3_name'].'<br>';
											echo $row['s4_name'].'</td>';
										}
										if($date)
										{
											$fdate=$row['w_date'];
											$orderdate1=explode('-',$row['w_date']);
											$year1=$orderdate1[0];
											$month1=$orderdate1[1];
											$day1=$orderdate1[2];
											$todate=$row['w_date2'];
											$orderdate2=explode('-',$row['w_date2']);
											$year2=$orderdate2[0];
											$month2=$orderdate2[1];
											$day2=$orderdate2[2];
											
											
											if($row['w_date']!=$row['w_date2'])
												echo '<td>'.$day1.'/'.$month1.'/'.$year1.' To '.$day2.'/'.$month2.'/'.$year2.'</td>';
											else
												echo '<td>'.$day1.'/'.$month1.'/'.$year1.'</td>';
										}
										if($days)
										{
											$date1=date_create($row['w_date']);
											$date2=date_create($row['w_date2']);
											$diff=date_diff($date1,$date2);
											$days=$diff->format('%a')+1;
											if($date1!=$date2)
												echo '<td>'.$days.'</td>';
											else
												echo '<td>1</td>';
										}
										if($npart)
											echo '<td>'.$row['count'].'</td>';
										if($agency)
											echo '<td>'.$row['organiser'].'</td>';
										if($tarea)
											echo '<td>'.$row['tarea'].'</td>';
										echo '</tr>';
									}
									echo '</table>';
	}
?>


