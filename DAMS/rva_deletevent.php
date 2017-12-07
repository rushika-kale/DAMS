
<?php

	include 'rva_common.php';
	
	$editor=0;

	$_SESSION['current_page'] = $_SERVER['HTTP_REFERER'];
	if(isset($_GET['ename']) AND !empty($_GET['place'])AND isset($_GET['username']) AND isset($_GET['thispage']))
	{	
		$unn=$_GET['username'];
		if  ( $_SESSION['access']!= 1)  //not admin
		{
			$un=$_GET['username'];
			
		}
		else //admin
		{
			$un=$username;
		}
		
		
		if($username==$un)
		{
			$ename=$_GET['ename'];
			$place=$_GET['place'];
			$thispage=$_GET['thispage'];
		   // $un=$_GET['username'];
			$editor=1;
			$table="null";
			 
			
				if($table=="workshop")
					{
					$request=mysqli_query($con, "DELETE  from $table where username='$unn'&& wname='$title'");
					header("Location: ". $_SESSION['current_page']);
					}

				if($thispage=="attenseminar")
					{	echo "hello";
						$request=mysqli_query($con, "DELETE  from seminar where username='$unn' && wname='$ename'&& wvenue='$place'");
						 header("Location: ". $_SESSION['current_page']);
					}


		}
		
		else
		header("Location: rva_report3.php");
	}



?>

