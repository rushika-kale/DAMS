<!DOCTYPE html>


<?php
	//Start session
	session_start();
 
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['username1']) || (trim($_SESSION['username1']) == '')) 
	{
		header('location: index.php');
		exit();
	}
	$username=$_SESSION['username1'];
	$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
	$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());
	$res=mysql_query("Select * FROM profile WHERE username='$username'");
	$row=mysql_fetch_array($res);
	$fname=$row['f_name'];
	$thispage= "attenworkshoppreview";
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

	  <body>
		<?php include ('rva_navigation.php'); ?>
	
	
			<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			  <!--<h2 class="page-header">General Event Report</h2>-->
			  <h2 class="page-header"><center><img src="yccelogo.jpg" class="img-rounded" alt="Cinque Terre" >Department of Computer Technology</center></h2>
			  <h4 class="page-header"><center>Workshop Report</center></h4>
			  
		  
						<?php
								echo '<table class="table table-bordered">
								<thead>
								<tr>';
								$from=$_GET['from'];
								$to=$_GET['to'];
								//echo $to;
								echo '<th>Sr. No.</th>';
								echo '<th>Name</th>';
								if($_GET['workshop']){echo '<th>Type of Event</th>';}
								if($_GET['name']){echo '<th>Event Name</th>';}
								if($_GET['place']){echo '<th>Place</th>';}
								if($_GET['date']){echo '<th>Date</th>';}
								
								echo '</tr>
								</thead>
								<tbody>';
								
								$flag=0;
								$fc=0;
									//$workshop=$_GET['workshop'];
									//echo $workshop;
									
									
								
								if ($from!=null && $to!=null)
									$res=mysql_query("Select * from workshop where w_date BETWEEN '$from' AND '$to' order by username asc");
								else
									$res=mysql_query("Select * from workshop order by username asc");
								$i=1;
								$count=0;
								while($row=mysql_fetch_array($res))
								{
									$un=$row['username'];
									
									
									
									
									echo "<tr>";
									if($fc==0)
									{
										//$ress=mysql_query("Select * from workshop where w_date>='$from' AND w_date<='$to' AND username='$un'");
										if ($from!=null && $to!=null)
											$ress=mysql_query("Select * from workshop where w_date BETWEEN '$from' AND '$to' AND username='$un'");
										else
											$ress=mysql_query("Select * from workshop where username='$un'");
										$count=mysql_num_rows($ress);
										//echo $count;
										$flag=1;
										$fc=1;
									}
									
									
									
									
									
									
									
									$res2=mysql_query("Select * FROM profile WHERE username='$un'");
									$row2=mysql_fetch_array($res2);
									$sal=$row2['sal'];
									$fname=$row2['f_name'];
									$lname=$row2['l_name'];
									
									if($flag==1)
									{
										echo "<td rowspan=".$count." style='vertical-align:middle;'>".$i++."</td>";
										
										echo "<td rowspan=".$count." style='vertical-align:middle;'>".$sal." ".$fname." ".$lname."</td>";
									
										if($_GET['workshop'])
										{
											echo "<td rowspan=".$count." style='vertical-align:middle;'>Workshop</td>";
										}
										$flag=0;
									}
									if($_GET['name'])
									{
										$ename=$row['wname'];
										echo "<td>".$ename."</td>";
									}
									if($_GET['place'])
									{
										$place=$row['wvenue'];
										echo "<td>".$place."</td>";
									}
									if($_GET['date'])
									{
										$w_date=$row['w_date'];
										$w_date2=$row['w_date2'];
										echo "<td>".$w_date." to ".$w_date2."</td>";
									}
									/*if($_GET['days'])
									{
										
										echo "<td>".$days."</td>";
									}*/
									echo "</tr>";
									
									
									
									$count--;
									if($count==0)
										$fc=0;
								}
								echo '
								</tbody>
								</table>';
						?>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
