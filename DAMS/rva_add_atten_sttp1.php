<?php
	include 'rva_common.php';


	if (isset($_POST['wname'])  AND !empty($_POST['wname']))
		{
		$wname=$_POST['wname'];
		}
		else
		{
		header("location:worksop.php");
		}
			$hquery=mysqli_query($con,"insert into sttp(username,wname) values ('$username','$wname')");
			
			
		if (isset($_POST['wvenue'])  AND !empty($_POST['wvenue']))
		{
		$wvenue=$_POST['wvenue'];
		}
		else{$wvenue='';}
			$hquery=mysqli_query($con,"update sttp set wvenue='".$_POST['wvenue']."' where username='$username' && wname='$wname'");
		
		
		/*if (isset($_POST['days'])  AND !empty($_POST['days']))
		{
		$days=$_POST['days'];
		}

			$hquery=mysqli_query($con,"update sttp set days='".$_POST['days']."' where username='$username' && wname='$wname'");
		*/

	$date=$_POST['sdate'];
	$date = str_replace('/', '-', $date);
	$date = date("Y-m-d", strtotime($date));
	if (isset($_POST['sdate'])  AND !empty($_POST['sdate']))
		{
		
			$hquery=mysqli_query($con,"update sttp set w_date='$date' where username='$username' && wname='$wname'");
		}
		else{
		$date='';
		}
	$date=$_POST['edate'];
	$date = date("Y-m-d", strtotime($date));
	if (isset($_POST['edate'])  AND !empty($_POST['edate']))
		{
		
			$hquery=mysqli_query($con,"update sttp set w_date1='$date' where username='$username' && wname='$wname'");
			$query= "INSERT INTO sttp (w_date1) 
			VALUES('". $date ."') where username='$username'";
		}
		else{
		$date='';
		}
		
		
	$date=$_POST['jdate'];
	$date = date("Y-m-d", strtotime($date));
	if (isset($_POST['edate'])  AND !empty($_POST['edate']))
		{
		
			$hquery=mysqli_query($con,"update sttp set w_date2='$date' where username='$username' && wname='$wname'");
			$query= "INSERT INTO sttp (w_date2) 
			VALUES('". $date ."') where username='$username'";
		}
		else{
		$date='';
		}

		
		function GetImageExtension($imagetype)
		 {
		   if(empty($imagetype)) return false;
		   switch($imagetype)
		   {
			   case 'image/bmp': return '.bmp';
			   case 'image/gif': return '.gif';
			   case 'image/jpeg': return '.jpg';
			   case 'image/png': return '.png';
			   default: return false;
		   }
		 }

	if (!empty($_FILES["wattach1"]["name"])) {

		$file_name=$_FILES["wattach1"]["name"];
		$temp_name=$_FILES["wattach1"]["tmp_name"];
		$imgtype=$_FILES["wattach1"]["type"];
		$ext= GetImageExtension($imgtype);
		$imagename=date("d-m-Y")."-".time().$ext;
		$target_path = "images/".$imagename;
		$date=date("Y-m-d");
	if(move_uploaded_file($temp_name, $target_path)) {

		$query_upload=mysqli_query($con,"update faculty.sttp set wattach1='$target_path' WHERE username='$username' && wname='$wname'") or die("error in $query_upload == ----> ".mysqli_error());
		$query_upload1=mysqli_query($con,"update faculty.sttp set subdate1='$date' WHERE username='$username' && wname='$wname'") or die("error in $query_upload == ----> ".mysqli_error());
		
	}else{

	   exit("Error While uploading image on the server");
	}
	}
	if (!empty($_FILES["wattach2"]["name"])) {

		$file_name=$_FILES["wattach2"]["name"];
		$temp_name=$_FILES["wattach2"]["tmp_name"];
		$imgtype=$_FILES["wattach2"]["type"];
		$ext= GetImageExtension($imgtype);
		$imagename=date("d-m-Y")."-".time().$ext;
		$target_path = "images/".$imagename;
		$date=date("Y-m-d");
	if(move_uploaded_file($temp_name, $target_path)) {

		$query_upload=mysqli_query($con,"update faculty.sttp set wattach2='$target_path' WHERE username='$username' && wname='$wname'") or die("error in $query_upload == ----> ".mysqli_error());
		$query_upload1=mysqli_query($con,"update faculty.sttp set subdate2='$date' WHERE username='$username' && wname='$wname'") or die("error in $query_upload == ----> ".mysqli_error());
		
	}else{

	   exit("Error While uploading image on the server");
	}
	}if (!empty($_FILES["wattach3"]["name"])) {

		$file_name=$_FILES["wattach3"]["name"];
		$temp_name=$_FILES["wattach3"]["tmp_name"];
		$imgtype=$_FILES["wattach3"]["type"];
		$ext= GetImageExtension($imgtype);
		$imagename=date("d-m-Y")."-".time().$ext;
		$target_path = "images/".$imagename;
		$date=date("Y-m-d");
	if(move_uploaded_file($temp_name, $target_path)) {

		$query_upload=mysqli_query($con,"update faculty.sttp set wattach3='$target_path' WHERE username='$username' && wname='$wname'") or die("error in $query_upload == ----> ".mysqli_error());
		$query_upload1=mysqli_query($con,"update faculty.sttp set subdate3='$date' WHERE username='$username' && wname='$wname'") or die("error in $query_upload == ----> ".mysqli_error());
		
	}else{

	   exit("Error While uploading image on the server");
	} 	 
	}	 
		 
?>

<?php
	mysqli_query($con,"insert into sttp (session, wname, w_date, w_date1, w_date2, wvenue, regfees) values ('$session', '$wname', '$sdate', '$edate', '$jdate', '$wvenue', '$regfees')");
	header("Location: rva_add_atten.php?success=1");
?>