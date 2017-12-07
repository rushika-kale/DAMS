<!DOCTYPE html>


<?php
	include 'rva_common.php';
	$thispage="placementpreview";
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
		$session2012_13=$_GET['s2012_13'];
		$session2013_14=$_GET['s2013_14'];
		$session2014_15=$_GET['s2014_15'];
		$session2015_16=$_GET['s2015_16'];
		$ug=$_GET['ug'];
		$pg=$_GET['pg'];
		$pkg=$_GET['pkg'];

				echo'
	  <body>';
		include ('rva_navigation.php');
	
		echo'	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			  <!--<h2 class="page-header">General Event Report</h2>-->
			  <h2 class="page-header"><center><img src="yccelogo.jpg" class="img-rounded" alt="Cinque Terre" >Department of Computer Technology</center></h2>
			  ';
			  if($ug==1)
			  {		  
			  echo '<h4 class="page-header"><center>UG Placement Report</center></h4>';
			  
			  
									echo '<table  align="center" class="table table-bordered">
									<thead>
									<tr>';
									
									
									
									echo '<th>Year</th>';
									echo '<th>No. of Enrolled</th>';
									echo '<th>No. of Placement/Eligible</th>';
									echo '<th>No. of Placed </th>';
									echo '<th>No. of Off-campus Placed</th>';
                                    echo '<th>No. for Higher studies</th>';
									echo '<th>No. for Entrepreneur</th>';
                                    echo '<th>Total Employability</th>';
                                    $res=mysqli_query($con,"select * from placement where session='$session2012_13' or session='$session2013_14' or session='$session2014_15' or session='$session2015_16' && $ug='1' ");
			
									while($row=mysqli_fetch_array($res))
									{
										
										
											echo '<tr align="center">';
											
											echo '<td>'.$row['session'].'</td>';
											echo '<td>'.$row['ugnumstud'].'</td>';
											echo '<td>'.$row['ugnumeligi'].'</td>';
											echo '<td>'.$row['ugnumplace'].'</td>';
											echo '<td>'.$row['ugnumoff'].'</td>';
											echo '<td>'.$row['ugnumhigh'].'</td>';
											echo '<td>'.$row['ugnumentre'].'</td>';
											echo '<td>'.$row['ugemploy'].'</td>';
											
											echo '</tr>';
										
									
									}
									echo '
									</tbody>
									</table>';
			  }					
							;
					
			echo '<br/>';
			
			if($pg==1)
			  {		  
			  echo '<h4 class="page-header"><center>PG Placement Report</center></h4>';
			  
			  
									echo '<table align="center" class="table table-bordered">
									<thead>
									<tr>';
									
									
									
									echo '<th>Year</th>';
									echo '<th>No. of Enrolled</th>';
									echo '<th>No. of Placed</th>';
									echo '<th>No. of Off-campus Placed</th>';
                                    echo '<th>Total Employability</th>';
                                    $res=mysqli_query($con,"select * from placement where session='$session2012_13' or session='$session2013_14' or session='$session2014_15' or session='$session2015_16' && $pg='1' ");
			
									while($row=mysqli_fetch_array($res))
									{
										
										
											echo '<tr align="center">';
											
											echo '<td>'.$row['session'].'</td>';
											echo '<td>'.$row['pgnumstud'].'</td>';
											echo '<td>'.$row['pgnumplace'].'</td>';
											echo '<td>'.$row['pgnumoff'].'</td>';
											echo '<td>'.$row['pgemploy'].'</td>';
											
											echo '</tr>';
										
									
									}
									echo '
									</tbody>
									</table>';
			  }					
							echo '
							
					';
					
			echo '<br/>';
			
			  if($pkg==1)
			  {		  
			  echo '<h4 class="page-header"><center>Company Package Information</center></h4>';
			  
			  
									echo '<table align="center" class="table table-bordered">
									<thead>
									<tr>';
								
									echo '<th>Year</th>';
									echo '<th>Maximum Salary Offered by Company</th>';
									echo '<th>Maximum Salary</th>';
									echo '<th>Minimum Salary Offered by Company</th>';
									echo '<th>Minimum Salary</th>';

                                    $res=mysqli_query($con,"select * from placement where session='$session2012_13' or session='$session2013_14' or session='$session2014_15' or session='$session2015_16' && $pkg='1' ");
			
									while($row=mysqli_fetch_array($res))
									{
										
										
											echo '<tr align="center">';
											
											echo '<td>'.$row['session'].'</td>';
											echo '<td>'.$row['maxsalcom'].'</td>';
											echo '<td>'.$row['maxsal'].'</td>';
											echo '<td>'.$row['minsalcom'].'</td>';
											echo '<td>'.$row['minsal'].'</td>';
											
											echo '</tr>';
										
									
									}
									echo '
									</tbody>
									</table>';
			  }					
			
			echo '</div>';
			
						
			

		echo '
		//<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
        <script src="assets/js/jquery.min.js"></script>
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
		header("Content-Disposition: attachment; filename=Placement-Report.xls");
		 
		// Add data table
				
		$session2012_13=$_GET['s2012_13'];
		$session2013_14=$_GET['s2013_14'];
		$session2014_15=$_GET['s2014_15'];
		$session2015_16=$_GET['s2015_16'];
		$ug=$_GET['ug'];
		$pg=$_GET['pg'];
		$pkg=$_GET['pkg'];
		
		
		echo '<table border="1">
									<tr>';
									
									//echo $to;
									echo '<th>Year</th>';
									echo '<th>Number of Students Enrolled</th>';
									echo '<th>Number of Students opted for Placement/Eligible</th>';
									echo '<th>Number of Placed Students</th>';
									echo '<th>Number of Off-campus Placed Students</th>';
                                    echo '<th>Number of Students opted for Higher studies</th>';
									echo '<th>Number of Students going for Entrepreneur</th>';
                                    echo '<th>Total Employability</th>';
								
                                echo '
									</table>';
	}
?>


