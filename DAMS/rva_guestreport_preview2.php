<!DOCTYPE html>


<?php
	include 'rva_common.php';
	$thispage="guestpreview";
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
		$category=$_GET['category'];
		$organizer=$_GET['organizer'];
		$speaker=$_GET['speaker'];
        $topic=$_GET['topic'];
		$affiliate=$_GET['affiliate'];
		$adate=$_GET['adate'];
        $expense=$_GET['expense'];
		$feedback=$_GET['feedback'];

				echo'
	  <body>';
		include ('rva_navigation.php');
	
		echo'	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			  <!--<h2 class="page-header">General Event Report</h2>-->
			  <h2 class="page-header"><center><img src="yccelogo.jpg" class="img-rounded" alt="Cinque Terre" >Department of Computer Technology</center></h2>
			  ';
			 		  
			  echo '<h4 class="page-header"><center>Guest Lecture Report</center></h4>';
			  
			  
									echo '<table  align="center" class="table table-bordered">
									<thead>
									<tr>';
									
									
									
									echo '<th>Sr. No.</th>';
								//	if($session)
                                  //      echo '<th>Session</th>';
									if($category)
                                        echo '<th>Type of Event</th>';
									if($organizer)
                                        echo '<th>Name of Organizer</th>';
									if($speaker)
                                        echo '<th>Name of Speaker</th>';
									if($topic)
                                        echo '<th>Name of Topic</th>';
                                    if($affiliate)
                                        echo '<th>Affiliation of Speaker</th>';
									if($adate)
                                        echo '<th>Date</th>';
                                    if($expense)
                                        echo '<th>Expense</th>';
                                    if($feedback)
                                        echo '<th>Feedback</th>';
                                    $res=mysqli_query($con,"select * from guest where session='$session2012_13' or session='$session2013_14' or session='$session2014_15' or session='$session2015_16'");
                                    $i=1;
									while($row=mysqli_fetch_array($res))
									{
										
										
											echo '<tr>';
                                            echo '<td>'.$i++.'</td>';
										//	if($session)
                                          //      echo '<td>'.$row['session'].'</td>';
											if($category)
                                                echo '<td>'.$row['category'].'</td>';
                                            if($organizer)
                                                echo '<td>'.$row['organizer'].'</td>';
                                            if($speaker)
                                                echo '<td>'.$row['speaker'].'</td>';
											if($topic)
                                                echo '<td>'.$row['topic'].'</td>';
                                            if($affiliate)
                                                echo '<td>'.$row['affiliate'].'</td>';
                                            if($adate)
                                                echo '<td>'.$row['adate'].'</td>';
											if($expense)
                                                echo '<td>'.$row['expense'].'</td>';
											if($feedback)
                                                echo '<td>'.$row['feedback'].'</td>';
											echo '</tr>';
										
									
									}
									echo '
									</tbody>
									</table>';
			  				
							echo '
							
					';
					
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
		header("Content-Disposition: attachment; filename=Guest-Lecture-Report.xls");
		 
		// Add data table
				
		$session2012_13=$_GET['s2012_13'];
		$session2013_14=$_GET['s2013_14'];
		$session2014_15=$_GET['s2014_15'];
		$session2015_16=$_GET['s2015_16'];
		$category=$_GET['category'];
		$organizer=$_GET['organizer'];
		$speaker=$_GET['speaker'];
        $topic=$_GET['topic'];
		$affiliate=$_GET['affiliate'];
		$adate=$_GET['adate'];
        $expense=$_GET['expense'];
		$feedback=$_GET['feedback'];

		
		
		echo '<table border="1">
									<tr>';
									
									//echo $to;
									echo '<th>Sr. No.</th>';
									if($session)
                                        echo '<th>Session</th>';
									if($category)
                                        echo '<th>Type of Event</th>';
									if($organizer)
                                        echo '<th>Name of Organizer</th>';
									if($speaker)
                                        echo '<th>Name of Speaker</th>';
									if(topic)
                                        echo '<th>Name of Topic</th>';
                                    if(affiliate)
                                        echo '<th>Affiliation of Speaker</th>';
									if(adate)
                                        echo '<th>Date</th>';
                                    if(expense)
                                        echo '<th>Expense</th>';
                                    if(feedback)
                                        echo '<th>Feedback</th>';;
								
                                echo '
									</table>';
	}
?>


