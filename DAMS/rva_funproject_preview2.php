<!DOCTYPE html>


<?php
	include 'rva_common.php';
	$thispage= "funprojectpreview";

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
		$pfaculty=$_GET['pfaculty'];
		$dfaculty=$_GET['dfaculty'];
		$title=$_GET['title'];
		$fdate=$_GET['fdate'];
		$scheme=$_GET['scheme'];
		$amount=$_GET['amount'];
		$status=$_GET['status'];
		$tarea=$_GET['tarea'];
		
				echo'
	  <body>';
	 include ('rva_navigation.php'); 
	    echo '
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			  <!--<h2 class="page-header">General Event Report</h2>-->
			  <h2 class="page-header"><center><img src="yccelogo.jpg" class="img-rounded" alt="Cinque Terre" >Department of Computer Technology</center></h2>
			  <h4 class="page-header"><center>Funding Project Report</center></h4>';
			  
			  
									echo '<table class="table table-bordered">
									<thead>
									<tr>';
									$from=$_GET['from'];
                                    $to=$_GET['to'];
									$range=$_GET['range'];
                                    //echo $to;
									
									
									echo '<th>Sr. No.</th>';
									if($pfaculty)
										echo '<th>Name Of Faculty</th>';
									if($dfaculty)
										echo '<th>Designation of Faculty</th>';
									if($title)
										echo '<th>Title of Project</th>';
									if($fdate)
										echo '<th>Date of Proposal</th>';
									if($scheme)
										echo '<th>Scheme</th>';
									if($amount)
										echo '<th>Amount</th>';
									if($status)
										echo '<th>Status</th>';
									if($tarea)
										echo '<th>Thrust Area</th>';
									
									
									//$res=mysqli_query($con,"select * from organisedwork where session='$session2012_13' or session='$session2013_14' or session='$session2014_15' or session='$session2015_16'");
									echo '</tr>
									</thead>
									<tbody>';
									if(($range==1)||($range==2))
                                        $res=mysqli_query($con,"Select * from funproject where fdate BETWEEN '$from' AND '$to'");
                                    else
                                        $res=mysqli_query($con,"Select * from funproject order by fdate asc");
									$i=1;
									while($row=mysqli_fetch_array($res))
									{
										echo '<tr>';
										echo '<td>'.$i++.'</td>';
										if($pfaculty)
											echo '<td>'.$row['pfaculty'].'</td>';
										if($dfaculty)
											echo '<td>'.$row['dfaculty'].'</td>';
										if($title)
											echo '<td>'.$row['title'].'</td>';
										
										if($fdate)
										{
											$fdate=$row['fdate'];
											$orderdate1=explode('-',$row['fdate']);
											$year1=$orderdate1[0];
											$month1=$orderdate1[1];
											$day1=$orderdate1[2];
											echo '<td>'.$day1.'/'.$month1.'/'.$year1.'</td>';
											
										}
										
										if($scheme)
											echo '<td>'.$row['scheme'].'</td>';
										if($amount)
											echo '<td>'.$row['amount'].'</td>';
										if($status)
											echo '<td>'.$row['status'].'</td>';
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
		header("Content-Disposition: attachment; filename=Funding-Project-Report.xls");
		 
		// Add data table
		// $session2012_13=$_GET['s2012_13'];
		// $session2013_14=$_GET['s2013_14'];
		// $session2014_15=$_GET['s2014_15'];
		// $session2015_16=$_GET['s2015_16'];
		$from=$_GET['from'];
        $to=$_GET['to'];
		$range=$_GET['range'];
		$pfaculty=$_GET['pfaculty'];
		$dfaculty=$_GET['dfaculty'];
		$title=$_GET['title'];
		$fdate=$_GET['fdate'];
		$scheme=$_GET['scheme'];
		$amount=$_GET['amount'];
		$status=$_GET['status'];
		$tarea=$_GET['tarea'];
		
		
		echo '<table border="1">
									<tr>';
									
									
									echo '<th>Sr. No.</th>';
									if($pfaculty)
										echo '<th>Name Of Faculty</th>';
									if($dfaculty)
										echo '<th>Designation of Faculty</th>';
									if($title)
										echo '<th>Title of Project</th>';
									if($fdate)
										echo '<th>Date of Proposal</th>';
									if($scheme)
										echo '<th>Scheme</th>';
									if($amount)
										echo '<th>Amount</th>';
									if($status)
										echo '<th>Status</th>';
									if($tarea)
										echo '<th>Thrust Area</th>';
									
									
									//$res=mysqli_query($con,"select * from organisedwork where session='$session2012_13' or session='$session2013_14' or session='$session2014_15' or session='$session2015_16'");
									if(($range==1)||($range==2))
                                        $res=mysqli_query($con,"Select * from funproject where fdate BETWEEN '$from' AND '$to'");
                                    else
                                        $res=mysqli_query($con,"Select * from funproject order by fdate asc");
									$i=1;
									while($row=mysqli_fetch_array($res))
									{
										echo '<tr>';
										echo '<td>'.$i++.'</td>';
										if($pfaculty)
											echo '<td>'.$row['pfaculty'].'</td>';
										if($dfaculty)
											echo '<td>'.$row['dfaculty'].'</td>';
										if($title)
											echo '<td>'.$row['title'].'</td>';
										
										if($fdate)
										{
											$fdate=$row['fdate'];
											$orderdate1=explode('-',$row['fdate']);
											$year1=$orderdate1[0];
											$month1=$orderdate1[1];
											$day1=$orderdate1[2];
											echo '<td>'.$day1.'/'.$month1.'/'.$year1.'</td>';
											
										}
										
										if($scheme)
											echo '<td>'.$row['scheme'].'</td>';
										if($amount)
											echo '<td>'.$row['amount'].'</td>';
										if($status)
											echo '<td>'.$row['status'].'</td>';
										if($tarea)
											echo '<td>'.$row['tarea'].'</td>';
										
										echo '</tr>';
									}
									echo '</table>';
	}
?>


