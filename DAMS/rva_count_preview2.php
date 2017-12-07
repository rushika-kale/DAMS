<!DOCTYPE html>


<?php
	include 'rva_common.php';
	$thispage= "orgcountpreview";
	
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
		$workshop=$_GET['workshop'];
		$fdpsttp=$_GET['fdpsttp'];
		$seminar=$_GET['seminar'];
		$indus=$_GET['indus'];
		
				echo'
	  <body>';
		include ('rva_navigation.php');
	 echo'
	
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			  <!--<h2 class="page-header">General Event Report</h2>-->
			  <h2 class="page-header"><center><img src="yccelogo.jpg" class="img-rounded" alt="Cinque Terre" >Department of Computer Technology</center></h2>
			  <h4 class="page-header"><center>Total Events</center></h4>';
			  
									echo '<table class="table table-bordered">
									<thead>
									<tr>';
									
									
									
									echo '<th>Sr. No.</th>';
									echo '<th>Type</th>';
									echo '<th>Session</th>';
									echo '<th>Count</th>';
									echo '</tr>
									</thead>
									<tbody>';
									$gtotal=0;
									$res=mysqli_query($con,"select * from sessions");
									$s_count=mysqli_num_rows($res);
									if($workshop)
									{
										$i=1;
										$res=mysqli_query($con,"select * from sessions");
										$f=1;
										while($row=mysqli_fetch_array($res))
										{
											$session=$row['session'];
											$ress=mysqli_query($con,"select * from organisedwork where session='$session'");
											echo '<tr>';
											echo '<td>'.$i++.'</td>';
											if($f)
											{	
												echo '<td rowspan='.$s_count.'>Workshop</td>';
												$f=0;
											}
											echo '<td>'.$session.'</td>';
											$count=mysqli_num_rows($ress);
											echo '<td>'.$count.'</td>';
											echo '</tr>';
										}
										echo '<tr>';
										$res2=mysqli_query($con,"select * from organisedwork");
										$total=mysqli_num_rows($res2);
										echo '<th colspan="3">Total</th>';
										echo '<th>'.$total.'</th>';
										$gtotal=$gtotal+$total;
										echo '</tr>';
									}
									if($fdpsttp)
									{
										$i=1;
										$res=mysqli_query($con,"select * from sessions");
										$f=1;
										while($row=mysqli_fetch_array($res))
										{
											$session=$row['session'];
											$ress=mysqli_query($con,"select * from organisedfdp where session='$session'
																union
															   select * from organisedsttp where session='$session'");
											echo '<tr>';
											echo '<td>'.$i++.'</td>';
											if($f)
											{	
												echo '<td rowspan='.$s_count.'>FDP/STTP</td>';
												$f=0;
											}
											echo '<td>'.$session.'</td>';
											$count=mysqli_num_rows($ress);
											echo '<td>'.$count.'</td>';
											echo '</tr>';
										}
										echo '<tr>';
										$res2=mysqli_query($con,"select * from organisedfdp
															union
														   select * from organisedsttp");
										$total=mysqli_num_rows($res2);
										echo '<th colspan="3">Total</th>';
										echo '<th>'.$total.'</th>';
										$gtotal=$gtotal+$total;
										echo '</tr>';
									}
									if($seminar)
									{
										$i=1;
										$res=mysqli_query($con,"select * from sessions");
										$f=1;
										while($row=mysqli_fetch_array($res))
										{
											$session=$row['session'];
											$ress=mysqli_query($con,"select * from organisedsem where session='$session'");
											echo '<tr>';
											echo '<td>'.$i++.'</td>';
											if($f)
											{	
												echo '<td rowspan='.$s_count.'>Seminar</td>';
												$f=0;
											}
											echo '<td>'.$session.'</td>';
											$count=mysqli_num_rows($ress);
											echo '<td>'.$count.'</td>';
											echo '</tr>';
										}
										echo '<tr>';
										$res2=mysqli_query($con,"select * from organisedsem");
										$total=mysqli_num_rows($res2);
										echo '<th colspan="3">Total</th>';
										echo '<th>'.$total.'</th>';
										$gtotal=$gtotal+$total;
										echo '</tr>';
									}
									if($indus)
									{
										$i=1;
										$res=mysqli_query($con,"select * from sessions");
										$f=1;
										while($row=mysqli_fetch_array($res))
										{
											$session=$row['session'];
											$ress=mysqli_query($con,"select * from organisedindustry where session='$session'");
											echo '<tr>';
											echo '<td>'.$i++.'</td>';
											if($f)
											{	
												echo '<td rowspan='.$s_count.'>Industry Visit</td>';
												$f=0;
											}
											echo '<td>'.$session.'</td>';
											$count=mysqli_num_rows($ress);
											echo '<td>'.$count.'</td>';
											echo '</tr>';
										}
										echo '<tr>';
										$res2=mysqli_query($con,"select * from organisedindustry");
										$total=mysqli_num_rows($res2);
										echo '<th colspan="3">Total</th>';
										echo '<th>'.$total.'</th>';
										$gtotal=$gtotal+$total;
										echo '</tr>';
									}
									
									echo '<tr>';
									echo '<th colspan="3">GRAND TOTAL</th>';
									echo '<th>'.$gtotal.'</th>';
									echo '</tr>';
									
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
		header("Content-Disposition: attachment; filename=Organized-Events-Count-Report.xls");
		 
		// Add data table
				
		$workshop=$_GET['workshop'];
		$fdpsttp=$_GET['fdpsttp'];
		$seminar=$_GET['seminar'];
		$indus=$_GET['indus'];
		
		
		echo '<table border="1">
									<tr>';
														
									echo '<th>Sr. No.</th>';
									echo '<th>Type</th>';
									echo '<th>Session</th>';
									echo '<th>Count</th>';
									echo '</tr>';
									
									$gtotal=0;
									$res=mysqli_query($con,"select * from sessions");
									$s_count=mysqli_num_rows($res);
									if($workshop)
									{
										$i=1;
										$res=mysqli_query($con,"select * from sessions");
										$f=1;
										while($row=mysqli_fetch_array($res))
										{
											$session=$row['session'];
											$ress=mysqli_query($con,"select * from organisedwork where session='$session'");
											echo '<tr>';
											echo '<td>'.$i++.'</td>';
											if($f)
											{	
												echo '<td rowspan='.$s_count.'>Workshop</td>';
												$f=0;
											}
											echo '<td>'.$session.'</td>';
											$count=mysqli_num_rows($ress);
											echo '<td>'.$count.'</td>';
											echo '</tr>';
										}
										echo '<tr>';
										$res2=mysqli_query($con,"select * from organisedwork");
										$total=mysqli_num_rows($res2);
										echo '<th colspan="3">Total</th>';
										echo '<th>'.$total.'</th>';
										$gtotal=$gtotal+$total;
										echo '</tr>';
									}
									if($fdpsttp)
									{
										$i=1;
										$res=mysqli_query($con,"select * from sessions");
										$f=1;
										while($row=mysqli_fetch_array($res))
										{
											$session=$row['session'];
											$ress=mysqli_query($con,"select * from organisedfdp where session='$session'
																union
															   select * from organisedsttp where session='$session'");
											echo '<tr>';
											echo '<td>'.$i++.'</td>';
											if($f)
											{	
												echo '<td rowspan='.$s_count.'>FDP/STTP</td>';
												$f=0;
											}
											echo '<td>'.$session.'</td>';
											$count=mysqli_num_rows($ress);
											echo '<td>'.$count.'</td>';
											echo '</tr>';
										}
										echo '<tr>';
										$res2=mysqli_query($con,"select * from organisedfdp
															union
														   select * from organisedsttp");
										$total=mysqli_num_rows($res2);
										echo '<th colspan="3">Total</th>';
										echo '<th>'.$total.'</th>';
										$gtotal=$gtotal+$total;
										echo '</tr>';
									}
									if($seminar)
									{
										$i=1;
										$res=mysqli_query($con,"select * from sessions");
										$f=1;
										while($row=mysqli_fetch_array($res))
										{
											$session=$row['session'];
											$ress=mysqli_query($con,"select * from organisedsem where session='$session'");
											echo '<tr>';
											echo '<td>'.$i++.'</td>';
											if($f)
											{	
												echo '<td rowspan='.$s_count.'>Seminar</td>';
												$f=0;
											}
											echo '<td>'.$session.'</td>';
											$count=mysqli_num_rows($ress);
											echo '<td>'.$count.'</td>';
											echo '</tr>';
										}
										echo '<tr>';
										$res2=mysqli_query($con,"select * from organisedsem");
										$total=mysqli_num_rows($res2);
										echo '<th colspan="3">Total</th>';
										echo '<th>'.$total.'</th>';
										$gtotal=$gtotal+$total;
										echo '</tr>';
									}
									if($indus)
									{
										$i=1;
										$res=mysqli_query($con,"select * from sessions");
										$f=1;
										while($row=mysqli_fetch_array($res))
										{
											$session=$row['session'];
											$ress=mysqli_query($con,"select * from organisedindustry where session='$session'");
											echo '<tr>';
											echo '<td>'.$i++.'</td>';
											if($f)
											{	
												echo '<td rowspan='.$s_count.'>Industry Visit</td>';
												$f=0;
											}
											echo '<td>'.$session.'</td>';
											$count=mysqli_num_rows($ress);
											echo '<td>'.$count.'</td>';
											echo '</tr>';
										}
										echo '<tr>';
										$res2=mysqli_query($con,"select * from organisedindustry");
										$total=mysqli_num_rows($res2);
										echo '<th colspan="3">Total</th>';
										echo '<th>'.$total.'</th>';
										$gtotal=$gtotal+$total;
										echo '</tr>';
									}
									
									echo '<tr>';
									echo '<th colspan="3">GRAND TOTAL</th>';
									echo '<th>'.$gtotal.'</th>';
									echo '</tr>';
									
									echo '</table>';
	}
?>


