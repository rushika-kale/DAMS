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

    <title>Report Bug</title>

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
          <a class="navbar-brand animated fadeIn" href="rva_bug.php"><strong><font color="#ffffff" size="5">Report a bug</font></strong></a>
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

    <div class="container theme-showcase" role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
		<h1>Bug Report</h1>
      </div>
	</div>
	<div class="col-sm-9 col-sm-offset-1 col-md-10 col-md-offset-1 main">
	<?php
								
								
								
								
								
								
								
								echo '<table class="table table-bordered">
								<thead>
								<tr>';

								echo '<th>Sr. No.</th>';
								echo '<th>Reported By</th>';
								echo '<th>Type</th>';
								echo '<th>Details</th>';
								echo '<th>Critical</th>';
								echo '<th>Date/Time of report</th>';
								echo '<th>Screenshot</th>';
								echo '<th>Solved</th>';
								

								echo '</tr>
								</thead>
								<tbody>';
								
								$flag=0;
								$fc=0;

									
									

									$res=mysqli_query($con,"Select * from reportbug order by bdate asc");
						
								$i=1;
								$count=0;
								while($row=mysqli_fetch_array($res))
								{
									
									
									
									$un=$row['username'];
									
									
									
									
									
									if($fc==0)
									{
										//$ress=mysqli_query($con,"Select * from workshop where w_date>='$from' AND w_date<='$to' AND username='$un'");
											$ress=mysqli_query($con,"Select * from reportbug where username='$un'");
										$count=mysqli_num_rows($ress);
										//echo $count;
										$flag=1;
										$fc=1;
									}

									$res2=mysqli_query($con,"Select * FROM profile WHERE username='$un'");
									$row2=mysqli_fetch_array($res2);
									$sal=$row2['sal'];
									$fname=$row2['f_name'];
									$lname=$row2['l_name'];
									
									
									echo "<tr>";
									if($flag==1)
									{
										echo "<td rowspan=".$count." style='vertical-align:middle;'>".$i++."</td>";
										
										echo "<td rowspan=".$count." style='vertical-align:middle;'>".$sal." ".$fname." ".$lname."</td>";
									$flag=0;
									}
									if($row['tech']==1)
										echo "<td>Technical,";
									else 
										echo "<td>,";

									if($row['graph']==1)
										echo "Graphical,";
									else
										echo "";

										
									if($row['fetchb']==1)
										echo "Data fetching</td>";
									else
										echo "</td>";
									
									
									echo "<td>".$row['detail']."</td>";
									
									
									if($row['critical']==1)
										echo "<td>Yes</td>";
									else
										echo "<td>No</td>";
									echo "<td>".$row['bdate']."</td>";
									
								if(!empty($row['filename']))
								{
									echo '<td> <a href="reportbug/'.$row['filename'].'" class="da-link">Download</a></td>';
								}
								else
									echo "<td> Not available</td>";
									
									//echo $_SESSION['access']."access by admin";
									
								if($_SESSION['access']==1)
								{
									if($row['solved']==0)
									{
										echo "<td>"; ?>No/     <a href='rva_bug_solved.php?id=<?php echo $row['id'] ?>'> (Click if Solved) </a> <?php echo "</td>";
									}
									else
										echo "<td>Yes</td>";
								}
								else
								{
									if($row['solved']==0)
									{
										echo "<td>No</td>";
									}
									else
										echo "<td>Yes</td>";
								}
								
								// $id=$row['id'];
								// if($row['solved']==0)
									// {
										// echo "<td>No"; 
										// if ($_SESSION['access']==1)
										// { 
											// echo " <a href="; echo "'rva_bug_solved.php?id=$id'"; echo "> /(Click if Solved) </a>"; 
										// }
										// echo "</td>";
									// }
									// else
										// echo "<td>Yes</td>";	
									
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
